<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\CommonModel;
use App\Models\SiteModel;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    protected $adminModel;
    protected $commonModel;
    protected $siteModel;
    protected $imageUpload;
    protected $excel;

    public function __construct()
    {
        helper(['url', 'form']);
        $this->adminModel = new AdminModel();
        $this->commonModel = new CommonModel();
        $this->siteModel = new SiteModel();
        $this->imageUpload = service('imageupload');
        $this->excel = service('excel');

        ini_set('memory_limit', '1024M');
        ini_set('max_execution_time', 2000);
        date_default_timezone_set("Asia/Kolkata");
        setcookie("basic_code", base_url(), time() + 3600 * 24, '/');
    }

    private function clearCache()
    {
        $this->response->setHeader("Cache-Control", "no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0")
                       ->setHeader("Pragma", "no-cache");
    }

    public function enquiryListView()
    {
        $data['enquiry_details'] = $this->adminModel->fetchEnquiryData();
        return view('admin/enquiry_list_view', $data);
    }

    public function enquiryExcelReport()
    {
        $enquiryDetails = $this->adminModel->fetchEnquiryData();
        $this->excel->enquiry_excel_report($enquiryDetails);
    }

    public function jobRegListView()
    {
        $data['career_details'] = $this->adminModel->fetchJobRegData();
        return view('admin/job_reg_list_view', $data);
    }

    public function courseEnquiry()
    {
        $data['course_enquiry'] = $this->adminModel->fetchCourseEnquiryData();
        return view('admin/course_enquiry', $data);
    }

    public function sliderMaster()
    {
        $data['slider_data'] = $this->commonModel->fetchDataASC('tbl_slider', 'slider_id');
        return view('admin/slider_master', $data);
    }

    public function saveSlider()
    {
        $id = $this->request->getPost('id');
        $single_liner = $this->request->getPost("single_liner");
        $single_liner2 = $this->request->getPost("single_liner2");
        $url_link = $this->request->getPost("url_link");

        $logo = '';
        $orgImg = '';

        $file = $this->request->getFile('slider_image');
        if ($file && $file->isValid()) {
            $newName = $file->getRandomName();
            $file->move('./images/slider/', $newName);
            $logo = $newName;
            $orgImg = $file->getClientName();
        } else {
            $logo = $this->request->getPost('hidden_slider_image');
            $orgImg = $this->request->getPost('hidden_slider_orig_name');
        }

        $data = [
            'slider_image' => $logo,
            'slider_orig_name' => $orgImg,
            'single_liner' => $single_liner,
            'single_liner2' => $single_liner2,
            'url_link' => $url_link
        ];

        if (!empty($id) && $id > 0) {
            $result = $this->commonModel->updateDetails('tbl_slider', 'slider_id', $id, $data);
            $message = $result ? 'Slider Details Updated Successfully!' : 'Error Updating Slider Details!';
        } else {
            $result = $this->commonModel->addData('tbl_slider', $data);
            $message = $result ? 'Slider Details Saved Successfully!' : 'Error Saving Slider Details!';
        }

        return $this->response->setJSON([
            'valid' => $result,
            'msg' => "<div class='alert alert-success'>{$message}</div>"
        ]);
    }

    public function deleteSlider()
    {
        $id = $this->request->getPost('id');
        $result = $this->commonModel->updateDetails('tbl_slider', 'slider_id', $id, ['display' => 'N']);

        return $this->response->setJSON([
            'valid' => $result,
            'msg' => $result
                ? "<div class='alert alert-success'>Slider Details Removed Successfully!</div>"
                : "<div class='alert alert-danger'>Error Removing Slider Details!</div>"
        ]);
    }

    public function blogListView()
    {
        $data['blogData'] = $this->commonModel->fetchDataDESC('tbl_blog', 'blog_id');
        return view('admin/blog-list-view', $data);
    }

    public function saveBlog()
    {
        $id = $this->request->getPost('id');
        $data = [
            'blog_title' => $this->request->getPost('blog_title'),
            'author' => $this->request->getPost('author'),
            'location' => $this->request->getPost('location'),
            'blog_desc' => $this->request->getPost('blog_desc'),
            'blog_date' => date('Y-m-d', strtotime($this->request->getPost('blog_date')))
        ];

        $file = $this->request->getFile('blog_img');
        if ($file && $file->isValid()) {
            $newName = $file->getRandomName();
            $file->move('./images/blog/', $newName);
            $data['blog_img'] = $newName;
            $data['blog_org_img'] = $file->getClientName();
        }

        $result = empty($id) ? $this->commonModel->addData('tbl_blog', $data) : $this->commonModel->updateDetails('tbl_blog', 'blog_id', $id, $data);

        return $this->response->setJSON([
            'valid' => $result,
            'msg' => $result
                ? "<div class='alert alert-success'>Blog Details Saved Successfully!</div>"
                : "<div class='alert alert-danger'>Error Saving Blog Details!</div>"
        ]);
    }

    public function deleteBlog()
    {
        $id = $this->request->getPost('id');
        $result = $this->commonModel->updateDetails('tbl_blog', 'blog_id', $id, ['display' => 'N']);

        return $this->response->setJSON([
            'valid' => $result,
            'msg' => $result
                ? "<div class='alert alert-success'>Blog Details Removed Successfully!</div>"
                : "<div class='alert alert-danger'>Error Removing Blog Details!</div>"
        ]);
    }
}
