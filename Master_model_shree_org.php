<?php

namespace App\Models;

use CodeIgniter\Model;

class MasterModelShree extends Model
{
    protected $db;

    public function __construct()
    {
        parent::__construct();
        $this->db = db_connect();
    }

    public function fetchDataASC($tableName, $ascByColName)
    {
        return $this->db->table($tableName)
            ->where('display', 'Y')
            ->orderBy($ascByColName, 'ASC')
            ->get()
            ->getResult();
    }

    public function fetchDataDESC($tableName, $descByColName)
    {
        return $this->db->table($tableName)
            ->where('display', 'Y')
            ->orderBy($descByColName, 'DESC')
            ->get()
            ->getResult();
    }

    public function fetchDataDESClimit($tableName, $descByColName, $limit)
    {
        return $this->db->table($tableName)
            ->where('display', 'Y')
            ->orderBy($descByColName, 'DESC')
            ->limit($limit)
            ->get()
            ->getResult();
    }

    public function fetchDataASClimit($tableName, $ascByColName, $limit)
    {
        return $this->db->table($tableName)
            ->where('display', 'Y')
            ->orderBy($ascByColName, 'ASC')
            ->limit($limit)
            ->get()
            ->getResult();
    }

    public function addData($tableName, $data)
    {
        $this->db->table($tableName)->insert($data);
        return $this->db->insertID();
    }

    public function updateDetails($tableName, $where, $condition, $data)
    {
        return $this->db->table($tableName)->where($where, $condition)->update($data);
    }

    public function saveMultiData($tableName, $data)
    {
        return $this->db->table($tableName)->insertBatch($data);
    }

    public function selectDetailsWhr($tableName, $where, $condition)
    {
        return $this->db->table($tableName)->where($where, $condition)->get()->getRow();
    }

    public function selectAllWhr($tableName, $where, $condition)
    {
        return $this->db->table($tableName)
            ->where($where, $condition)
            ->where('display', 'Y')
            ->get()
            ->getResult();
    }

    public function selectAllWhrDsc($tableName, $where, $condition, $desc)
    {
        return $this->db->table($tableName)
            ->where($where, $condition)
            ->where('display', 'Y')
            ->orderBy($desc, 'DESC')
            ->get()
            ->getResult();
    }

    public function singleJoin2Tbl($tbl1, $tbl2, $where, $condition, $id)
    {
        return $this->db->table($tbl1)
            ->join($tbl2, "$tbl1.$where = $tbl2.$where", 'left')
            ->where("$tbl1.$condition", $id)
            ->where("$tbl1.display", 'Y')
            ->where("$tbl2.display", 'Y')
            ->get()
            ->getRow();
    }

    public function allJoin2Tbl($tbl1, $tbl2, $where)
    {
        return $this->db->table($tbl1)
            ->join($tbl2, "$tbl1.$where = $tbl2.$where", 'left')
            ->where("$tbl1.display", 'Y')
            ->where("$tbl2.display", 'Y')
            ->get()
            ->getResult();
    }

    public function forgotPass($userData, $password, $userId, $email)
    {
        $emailSent = service('email');
        $this->db->transStart();

        $this->db->table('tbl_userinfo')->where('user_id', $userId)->update($userData);

        $data = [
            'subject' => 'Task us Forgot Password',
            'msg_body' => view("mailer/new_pass", ['password' => $password]),
            'alt_msg' => 'Task us Forgot Password'
        ];

        $result = $emailSent->sendEmail($email, $data);

        $this->db->transComplete();

        return $this->db->transStatus() && $result;
    }

    public function fetchAllCity()
    {
        return $this->db->query(
            "SELECT tct.*, tc.country_name, ts.state_name FROM tbl_city tct 
            JOIN tbl_country tc ON tct.country_id = tc.country_id 
            JOIN tbl_state ts ON tct.state_id = ts.state_id WHERE tct.display = 'Y'"
        )->getResult();
    }
    public function menu_list($user_id)
    {
        $query = $this->db->query("SELECT * FROM tbl_menu WHERE display='Y'");
        if ($query->getNumRows() > 0) {
            $data = [];
            foreach ($query->getResult() as $key) {
                $array_data['menu'] = $key;
                $menu_id = $key->menu_id;

                $subquery = $this->db->query(
                    "SELECT s.*, IF(ISNULL(p.user_id), 'N', 'Y') prev 
                     FROM tbl_submenu s 
                     LEFT JOIN tbl_priviledges p ON p.user_id = ? AND p.submenu_id = s.submenu_id 
                     WHERE s.menu_id = ? AND s.display = 'Y' 
                     HAVING prev = 'Y' 
                     ORDER BY s.submenu_id ASC",
                    [$user_id, $menu_id]
                );

                if ($subquery->getNumRows() > 0) {
                    $array_data['submenu'] = $subquery->getResult();
                } else {
                    $array_data['submenu'] = null;
                }
                $data[] = $array_data;
            }
            return $data;
        }
        return null;
    }

    public function menu_list1($user_id)
    {
        $query = $this->db->query("SELECT * FROM tbl_menu WHERE display='Y'");
        if ($query->getNumRows() > 0) {
            $data = [];
            foreach ($query->getResult() as $key) {
                $array_data['menu'] = $key;
                $menu_id = $key->menu_id;

                $subquery = $this->db->query(
                    "SELECT s.*, IF(ISNULL(p.user_id), 'N', 'Y') prev 
                     FROM tbl_submenu s 
                     LEFT JOIN tbl_priviledges p ON p.user_id = ? AND p.submenu_id = s.submenu_id 
                     WHERE s.menu_id = ? AND s.display = 'Y'",
                    [$user_id, $menu_id]
                );

                if ($subquery->getNumRows() > 0) {
                    $array_data['submenu'] = $subquery->getResult();
                } else {
                    $array_data['submenu'] = null;
                }
                $data[] = $array_data;
            }
            return $data;
        }
        return null;
    }

    public function save_role_config($user_id, $submenu)
    {
        $this->db->transStart();

        $this->db->table('tbl_priviledges')->where('user_id', $user_id)->delete();
        
        $insertData = [];
        foreach ($submenu as $key) {
            $insertData[] = ['submenu_id' => $key, 'user_id' => $user_id];
        }
        
        if (!empty($insertData)) {
            $this->db->table('tbl_priviledges')->insertBatch($insertData);
        }

        $this->db->transComplete();

        return $this->db->transStatus();
    }
}

