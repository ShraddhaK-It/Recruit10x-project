<?php

namespace App\Controllers;

use App\Models\CommonModel;
use App\Models\AdminModel;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\ResponseInterface;

class CommonController extends BaseController
{
    protected $commonModel;
    protected $adminModel;

    public function __construct()
    {
        helper(['url', 'form', 'cookie']);
        $this->commonModel = new CommonModel();
        $this->adminModel = new AdminModel();
        ini_set('memory_limit', '1024M');
        ini_set('max_execution_time', 2000);
        date_default_timezone_set("Asia/Kolkata");
        set_cookie("basic_code", base_url(), 86400);
    }

    private function clear_cache()
    {
        $this->response->setHeader("Cache-Control", "no-store, no-cache, must-revalidate, max-age=0, post-check=0, pre-check=0");
        $this->response->setHeader("Pragma", "no-cache");
    }

    public function dashboard()
    {
        if (!session()->get('logged_in')) {
            $data['title'] = "Admin Login";
            return view("common/login_page", $data);
        }
        return view("common/dashboard");
    }

    public function admin_load()
    {
        if (!session()->get('logged_in')) {
            return view("common/login_page");
        }
        $data['contact_details'] = $this->adminModel->fetch_contact_data();
        return view("common/dashboard", $data);
    }

    public function admin_login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        if (!$username || !$password) {
            return $this->response->setJSON(['valid' => false, 'msg' => 'Please enter username and password.']);
        }

        if ($this->commonModel->chklogin($username, $password)) {
            session()->set(['logged_in' => true, 'username' => $username]);
            return $this->response->setJSON(['valid' => true, 'redirect' => base_url('admin_user')]);
        }

        return $this->response->setJSON(['valid' => false, 'msg' => 'Wrong username/password.']);
    }

    public function admin_logout()
    {
        session()->destroy();
        return redirect()->to('admin_user');
    }

    public function change_pass()
    {
        return $this->response->setJSON(['view' => view('common/change_password')]);
    }

    public function save_password_change()
    {
        $userId = session()->get('user_id');
        $currentPass = md5(sha1(md5($this->request->getPost('current_pass'))));
        $newPass = md5(sha1(md5($this->request->getPost('new_pass'))));

        $userData = $this->commonModel->selectDetailsWhr('tbl_userinfo', 'user_id', $userId);

        if ($userData->user_pass !== $currentPass) {
            return $this->response->setJSON(['valid' => false, 'msg' => 'Incorrect current password!']);
        }

        if ($this->commonModel->updateDetails('tbl_userinfo', 'user_id', $userId, ['user_pass' => $newPass])) {
            return $this->response->setJSON(['valid' => true, 'msg' => 'Password updated successfully!']);
        }

        return $this->response->setJSON(['valid' => false, 'msg' => 'Error updating password.']);
    }

    public function save_forgot_pass()
    {
        $email = $this->request->getPost('email');
        $newPass = md5(sha1(md5(mt_rand(100000, 999999))));

        if ($userData = $this->commonModel->selectDetailsWhr('tbl_userinfo', 'user_email', $email)) {
            $this->commonModel->updateDetails('tbl_userinfo', 'user_id', $userData->user_id, ['user_pass' => $newPass]);
            return $this->response->setJSON(['valid' => true, 'msg' => 'New password sent to your email.']);
        }

        return $this->response->setJSON(['valid' => false, 'msg' => 'Invalid email address.']);
    }
}
