<?php

namespace App\Controllers;

use App\Models\MasterModel;
use CodeIgniter\RESTful\ResourceController;

class MasterController extends ResourceController
{
    protected $masterModel;

    public function __construct()
    {
        $this->masterModel = new MasterModel();
    }

    private function clear_cache()
    {
        $this->response->setHeader('Cache-Control', 'no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0');
        $this->response->setHeader('Pragma', 'no-cache');
    }

    /**************** Start Job Vacancy Master ****************/

    public function adminVacancy()
    {
        $tableName = 'tbl_vacancy';
        $asc_by_col_name = 'vacancy_id';
        $data['vacancyData'] = $this->masterModel->fetchDataASC($tableName, $asc_by_col_name);
        
        return view('admin/vacancy_master', $data);
    }

    public function saveVacancy()
    {
        $id = $this->request->getPost('id');
        $job_data = [
            'technology_title'       => $this->request->getPost('technology_title'),
            'technology_description' => $this->request->getPost('technology_description'),
            'skill'                  => $this->request->getPost('skill'),
            'position'               => $this->request->getPost('position'),
            'experience'             => $this->request->getPost('experience'),
            'location'               => $this->request->getPost('location')
        ];

        $tblname = 'tbl_vacancy';

        if (!empty($id) && $id > 0) {
            $where = 'vacancy_id';
            $result = $this->masterModel->updateDetails($tblname, $where, $id, $job_data);

            return $this->response->setJSON([
                'valid' => (bool) $result,
                'msg'   => $result
                    ? '<div class="alert modify alert-info">Job Vacancy Details Updated Successfully!</div>'
                    : '<div class="alert modify alert-danger">Error! While Updating Job Vacancy Details!</div>'
            ]);
        } else {
            $result = $this->masterModel->addData($tblname, $job_data);

            return $this->response->setJSON([
                'valid' => (bool) $result,
                'msg'   => $result
                    ? '<div class="alert modify alert-info">Job Vacancy Details Saved Successfully!</div>'
                    : '<div class="alert modify alert-danger">Error! While Saving Job Vacancy Details!</div>'
            ]);
        }
    }

    public function editVacancy()
    {
        $id = $this->request->getPost('id');
        $tblname = 'tbl_vacancy';
        $where = "vacancy_id";

        $data['singleJobData'] = $this->masterModel->selectDetailsWhr($tblname, $where, $id);

        return view('admin/vacancy_master', $data);
    }

    public function deleteVacancy()
    {
        $id = $this->request->getPost('id');
        $tableName = 'tbl_vacancy';
        $uniqueField = 'vacancy_id';
        $data = ['display' => 'N'];

        $result = $this->masterModel->updateDetails($tableName, $uniqueField, $id, $data);

        return $this->response->setJSON([
            'valid' => (bool) $result,
            'msg'   => $result
                ? '<div class="alert modify alert-info">Job Vacancy Details Removed Successfully!</div>'
                : '<div class="alert modify alert-danger">Error! While Removing Job Vacancy Details!</div>'
        ]);
    }
}
