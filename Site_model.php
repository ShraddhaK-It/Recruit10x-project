<?php

namespace App\Models;

use CodeIgniter\Model;
use Config\Services;

class SiteModel extends Model
{
    protected $table = '';
    protected $primaryKey = 'id';
    protected $allowedFields = [];

    public function contact_user($contact_data)
    {
        $query = $this->db->table('tbl_site_contact')->insert($contact_data);
        
        if ($query) {
            $email = Services::email();
            $c_name = $contact_data['c_name'];
            $email = $contact_data['c_email'];
            $user_mobile = $contact_data['c_contact'];
            $c_message = $contact_data['c_message'];

            $to = "aarav.adk@gmail.com";
            $subject = 'ITAakash - Contact Us';
            $view_data = [
                'c_name' => $c_name,
                'c_email' => $email,
                'c_contact' => $user_mobile,
                'c_message' => $c_message,
            ];
            
            $msg_body = view('mailer/contact-enquiry', $view_data);
            $alt_msg = 'ITAakash - Contact Us';

            $email->setTo($to);
            $email->setSubject($subject);
            $email->setMessage($msg_body);
            $email->setAltMessage($alt_msg);

            return $email->send();
        }

        return false;
    }

    public function insert_real_estate_crm($crm_data)
    {
        $query = $this->db->table('tbl_enquiry')->insert($crm_data);
        
        if ($query) {
            $email = Services::email();
            
            $fullName = $crm_data['fullName'];
            $companyName = $crm_data['companyName'];
            $emailId = $crm_data['emailId'];
            $productName = $crm_data['productName'];
            $contactNo = $crm_data['contactNo'];
            $message = $crm_data['message'];

            $to = "aarav.adk@gmail.com";
            $subject = 'ITAakash - Enquiry';
            $view_data = [
                'fullName' => $fullName,
                'companyName' => $companyName,
                'emailId' => $emailId,
                'productName' => $productName,
                'contactNo' => $contactNo,
                'message' => $message,
            ];

            $msg_body = view('mailer/common-enquiry-mailer', $view_data);
            $alt_msg = 'ITAakash - Enquiry';

            $email->setTo($to);
            $email->setSubject($subject);
            $email->setMessage($msg_body);
            $email->setAltMessage($alt_msg);

            return $email->send();
        }

        return false;
    }

    public function fetch_single_blog_data($id = '')
    {
        return $this->db->table('tbl_blog')->where('blog_id', $id)->get()->getResultArray();
    }

    public function fetch_single_vacancy_data($id = '')
    {
        return $this->db->table('tbl_vacancy')->where('vacancy_id', $id)->get()->getResultArray();
    }

    public function save_inquiry_about_form($inqArrData)
    {
        $this->db->table('tbl_inquiry_about')->insert($inqArrData);
        return $this->db->insertID() ? true : false;
    }

    public function contact_us($contact_data)
    {
        $query = $this->db->table('tbl_site_contact')->insert($contact_data);
        return $query ? true : false;
    }

    public function erpCourse($erp_contact_data)
    {
        $query = $this->db->table('tbl_erp_course')->insert($erp_contact_data);
        return $query ? true : false;
    }

    public function job_registration($career_data)
    {
        $query = $this->db->table('tbl_career')->insert($career_data);
        return $query ? true : false;
    }

    public function career_user($career_data)
    {
        $query = $this->db->table('tbl_career')->insert($career_data);

        if ($query) {
            $email = Services::email();

            $user_name = $career_data['name'];
            $email = $career_data['email'];
            $user_mobile = $career_data['mobile'];
            $user_comment = $career_data['comment'];
            $attachment = './uploads/career/' . $career_data['resume'];
            $to = "aarav.adk@gmail.com";

            $subject = 'ITAkash - Career With Us';
            $view_data = [
                'name' => $user_name,
                'email' => $email,
                'mobile' => $user_mobile,
                'comment' => $user_comment,
            ];

            $msg_body = view('mailer/signup/signup-successful', $view_data);
            $alt_msg = 'ITAkash - Career';

            $email->setTo($to);
            $email->setSubject($subject);
            $email->setMessage($msg_body);
            $email->setAltMessage($alt_msg);
            $email->attach($attachment);

            return $email->send();
        }

        return false;
    }
}
