<?php
namespace App\Controllers;

use App\Models\CareerModel;
use CodeIgniter\Controller;

class CareerController extends Controller {
    
    protected $careerModel;

    public function __construct() {
        $this->careerModel = new CareerModel();
    }

    public function index() {
        $data['job_data'] = $this->careerModel->getAllJobs();
        return view('site/career_view', $data);
    }
}
