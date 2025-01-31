<?php

namespace App\Controllers;

use App\Models\CommonModel;
use App\Models\AdminModel;
use App\Models\SiteModel;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\ResponseInterface;

class SiteController extends BaseController
{
    protected $commonModel;
    protected $adminModel;
    protected $siteModel;
    protected $email;

    public function __construct()
    {
        helper(['url', 'form']);
        $this->commonModel = new CommonModel();
        $this->adminModel = new AdminModel();
        $this->siteModel = new SiteModel();
        $this->email = \Config\Services::email();
    }

    public function index()
    {
        $data['slider_data'] = $this->commonModel->fetchDataASC('tbl_slider', 'slider_id');
        $data['client_logos_data'] = $this->commonModel->fetchDataASC('tbl_client_master', 'client_id');
        return view('site/index', $data);
    }

    public function whoWeAre()
    {
        return view('site/who-we-are');
    }

    public function services()
    {
        return view('site/services');
    }

    public function clients()
    {
        $data['client_logos_data'] = $this->commonModel->fetchDataASC('tbl_client_master', 'client_id');
        return view('site/clients', $data);
    }

    public function blog()
    {
        $data['blog_data'] = $this->commonModel->fetchDataASC('tbl_blog', 'blog_id');
        return view('site/blog', $data);
    }

    public function blogDetails($id = null)
    {
        $data['single_blog_details'] = $this->siteModel->fetch_single_blog_deta($id);
        $data['blog_data'] = $this->commonModel->fetchDataASC('tbl_blog', 'blog_id');
        return view('site/blog-details', $data);
    }

    public function contactUs()
    {
        return view('site/contact-us');
    }

    public function saveContact()
    {
        $contactData = [
            'c_name' => $this->request->getPost('name'),
            'c_email' => $this->request->getPost('email'),
            'c_contact' => $this->request->getPost('phone'),
            'c_companyName' => $this->request->getPost('companyName'),
            'c_message' => $this->request->getPost('contact_message')
        ];

        $result = $this->siteModel->contact_us($contactData);
        
        return $this->response->setJSON(['msg' => $result ? "Thank you for your message!" : "Sorry, please try again!"]);
    }

    public function saveJobRegistration()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'name' => 'required',
            'dob' => 'required',
            'email' => 'required|valid_email',
            'phone' => 'required',
            'gender' => 'required',
            'position' => 'required',
            'experience' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return $this->response->setJSON(['message' => 'Please fill all required fields.']);
        }

        $careerData = [
            'name' => $this->request->getPost('name'),
            'dob' => $this->request->getPost('dob'),
            'email' => $this->request->getPost('email'),
            'mobile' => $this->request->getPost('phone'),
            'gender' => $this->request->getPost('gender'),
            'position' => $this->request->getPost('position'),
            'experience' => $this->request->getPost('experience'),
            'resume' => '',
            'subject' => $this->request->getPost('subject'),
            'comment' => $this->request->getPost('message'),
            'timestamp' => date("Y-m-d H:i:s")
        ];

        if ($file = $this->request->getFile('resume')) {
            if ($file->isValid() && !$file->hasMoved()) {
                $newName = $file->getRandomName();
                $file->move(ROOTPATH . 'public/uploads/career', $newName);
                $careerData['resume'] = $newName;
            }
        }

        $result = $this->siteModel->career_user($careerData);

        return $this->response->setJSON(['message' => $result ? 'Thank you for applying! We will contact you soon.' : 'Error while saving career details.']);
    }
}
