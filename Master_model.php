<?php
namespace App\Models;

use CodeIgniter\Model;

class MasterModel extends Model
{
    protected $db;

    public function __construct()
    {
        parent::__construct();
        $this->db = db_connect();
    }

    public function fetchDataASC($table_name, $asc_by_col_name)
    {
        $query = $this->db->table($table_name)
                          ->where('display', 'Y')
                          ->orderBy($asc_by_col_name, 'ASC')
                          ->get();
        return $query->getNumRows() > 0 ? $query->getResult() : false;
    }

    public function addData($table_name, $data)
    {
        return $this->db->table($table_name)->insert($data);
    }

    public function saveMultiData($table_name, $data)
    {
        return $this->db->table($table_name)->insertBatch($data);
    }

    public function selectDetailsWhr($table_name, $where, $condition)
    {
        $query = $this->db->table($table_name)->where($where, $condition)->get();
        return $query->getNumRows() === 1 ? $query->getRow() : false;
    }

    public function selectAllWhr($table_name, $where, $condition)
    {
        $query = $this->db->table($table_name)
                          ->where($where, $condition)
                          ->where('display', 'Y')
                          ->get();
        return $query->getNumRows() > 0 ? $query->getResult() : false;
    }

    public function selectMultiDataFor($table_name, $where1, $where2, $condition1, $condition2)
    {
        $query = $this->db->table($table_name)
                          ->where($where1, $condition1)
                          ->where($where2, $condition2)
                          ->where('display', 'Y')
                          ->get();
        return $query->getNumRows() > 0 ? $query->getResult() : false;
    }

    public function updateDetails($table_name, $where, $condition, $data)
    {
        return $this->db->table($table_name)->where($where, $condition)->update($data);
    }
    public function forgot_pass(array $userData, string $password, int $userId, string $email): bool
{
    $db = \Config\Database::connect();
    $builder = $db->table('tbl_userinfo');

    $emailSent = service('email_sent'); // Load Email Service

    $db->transStart();
    
    // Update user password
    $builder->where('user_id', $userId)->update($userData);

    // Prepare email data
    $datavalue["password"] = $password;
    $subject = 'Task us Forgot Password';

    $msgBody = view("mailer/new_pass", $datavalue);
    $altMsg = 'Task us Forgot Password';

    $data = [
        'subject'  => $subject,
        'msg_body' => $msgBody,
        'alt_msg'  => $altMsg
    ];
    
    $emailData[] = ['email_id' => $email];

    $result = $emailSent->mail_sent($data, $emailData);

    if ($result) {
        $db->transComplete();
        return $db->transStatus();
    }

    return false;
}
public function insertProduct(array $machineData, array $prodSubImgData): bool
{
    $db = \Config\Database::connect();
    $builder = $db->table('tbl_products_&_machines');

    $db->transStart();

    // Insert product data
    $builder->insert($machineData);
    $mId = $db->insertID(); // Get last inserted ID

    if (!empty($prodSubImgData)) {
        foreach ($prodSubImgData as &$imgData) {
            $imgData['m_id'] = $mId;
        }
        $db->table('tbl_prod_sub_img')->insertBatch($prodSubImgData);
    }

    $db->transComplete();
    return $db->transStatus();
}
public function updateProduct(array $machineData, int $id, array $prodSubImgData): bool
{
    $db = \Config\Database::connect();
    $builder = $db->table('tbl_products_&_machines');

    $db->transStart();

    // Update product data
    $builder->where('m_id', $id)->update($machineData);

    if (!empty($prodSubImgData)) {
        foreach ($prodSubImgData as &$imgData) {
            $imgData['m_id'] = $id;
        }
        $db->table('tbl_prod_sub_img')->insertBatch($prodSubImgData);
    }

    $db->transComplete();
    return $db->transStatus();
}

    public function deleteRecord($table_name, $uniqueField, $id)
    {
        return $this->db->table($table_name)->where($uniqueField, $id)->delete();
    }

    public function fetchDataForProduct()
    {
        $query = $this->db->query("SELECT tpm.*, tpsi.* FROM tbl_products_&_machines tpm JOIN tbl_prod_sub_img tpsi ON tpm.m_id = tpsi.m_id");
        return $query->getNumRows() > 0 ? $query->getResult() : false;
    }

    public function fetchDataForProductById($id)
    {
        $query = $this->db->query("SELECT tpm.*, tpsi.* FROM tbl_products_&_machines tpm JOIN tbl_prod_sub_img tpsi ON tpm.m_id = tpsi.m_id WHERE tpm.m_id = ?", [$id]);
        return $query->getNumRows() > 0 ? $query->getResult() : false;
    }

    public function fetch_category_master_data()
    {
        return $this->db->table('tbl_exhi_category')->where('display', 'Y')->get()->getResult();
    }

    public function fetch_exhibition_master_data()
    {
        $query = $this->db->table('tbl_exhi_category tec')
                          ->join('tbl_exhibition te', 'tec.categ_id = te.categ_id', 'right')
                          ->get();
        return $query->getNumRows() > 0 ? $query->getResult() : false;
    }

    public function fetch_single_exhibition_data($id)
    {
        $query = $this->db->table('tbl_exhi_category tec')
                          ->where('tec.categ_id', $id)
                          ->join('tbl_exhibition te', 'tec.categ_id = te.categ_id', 'right')
                          ->get();
        return $query->getNumRows() > 0 ? $query->getResult() : false;
    }

    public function fetch_career_data()
    {
        return $this->db->table('tbl_career')->where('display', 'Y')->get()->getResult();
    }

    public function fetch_contact_data()
    {
        return $this->db->table('tbl_contact')->where('display', 'Y')->get()->getResult();
    }

    public function fetch_erp_contact_data()
    {
        return $this->db->table('tbl_erp_contact')->where('display', 'Y')->get()->getResult();
    }

}
