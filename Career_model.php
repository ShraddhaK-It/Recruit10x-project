<?php

namespace App\Models;

use CodeIgniter\Model;

class CareerModel extends Model
{
    protected $table = 'tbl_vacancy';
    protected $primaryKey = 'vacancy_id';
    protected $allowedFields = ['vacancy_id']; // Add actual fields here if needed

    public function getAllJobs()
    {
        return $this->findAll();
    }

    public function getJobById($jobId)
    {
        return $this->find($jobId);
    }
}
