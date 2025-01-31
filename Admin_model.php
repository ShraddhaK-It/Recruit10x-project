<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $db;

    public function __construct()
    {
        parent::__construct();
        $this->db = \Config\Database::connect();
    }

    public function fetchContactData()
    {
        return $this->fetchData('tbl_site_contact');
    }

    public function fetchErpContactData()
    {
        return $this->fetchData('tbl_erp_site_contact');
    }

    public function fetchEnquiryData()
    {
        return $this->fetchData('tbl_inquiry_about');
    }

    public function fetchJobRegData()
    {
        return $this->fetchData('tbl_career');
    }

    public function fetchCourseEnquiryData()
    {
        return $this->fetchData('tbl_erp_course');
    }

    private function fetchData($table)
    {
        $query = $this->db->query("SELECT * FROM `$table` WHERE `display`='Y'");
        return $query->getResult();
    }
}
