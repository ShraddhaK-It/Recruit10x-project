<?php

namespace App\Models;

use CodeIgniter\Model;

class CommonModel extends Model
{
    protected $db;

    public function __construct()
    {
        parent::__construct();
        $this->db = \Config\Database::connect();
    }

    private function fetchData($table, $orderBy, $orderType = 'ASC', $limit = null)
    {
        $builder = $this->db->table($table)->where('display', 'Y')->orderBy($orderBy, $orderType);
        if ($limit) {
            $builder->limit($limit);
        }
        $query = $builder->get();
        return $query->getResult();
    }

    public function fetchDataASC($table, $column)
    {
        return $this->fetchData($table, $column, 'ASC');
    }

    public function fetchDataDESC($table, $column)
    {
        return $this->fetchData($table, $column, 'DESC');
    }

    public function fetchDataDESClimit($table, $column, $limit)
    {
        return $this->fetchData($table, $column, 'DESC', $limit);
    }

    public function fetchDataASClimit($table, $column, $limit)
    {
        return $this->fetchData($table, $column, 'ASC', $limit);
    }

    public function addData($table, $data)
    {
        $this->db->table($table)->insert($data);
        return $this->db->insertID();
    }

    public function updateDetails($table, $where, $condition, $data)
    {
        return $this->db->table($table)->where($where, $condition)->update($data);
    }

    public function saveMultiData($table, $data)
    {
        return $this->db->table($table)->insertBatch($data);
    }

    public function selectDetailsWhr($table, $where, $condition)
    {
        return $this->db->table($table)->where($where, $condition)->get()->getRow();
    }

    public function selectDetailsWhrTest($table, $where, $condition)
    {
        $result = $this->db->table($table)->where($where, $condition)->get()->getRow();
        return $result ? $result->test_name : false;
    }

    public function selectAllWhr($table, $where, $condition)
    {
        return $this->db->table($table)->where($where, $condition)->where('display', 'Y')->get()->getResult();
    }

    public function singleJoinTwoTables($table1, $table2, $onColumn, $where, $id)
    {
        return $this->db->table($table1)
            ->join($table2, "$table1.$onColumn = $table2.$onColumn", 'left')
            ->where("$table1.$where", $id)
            ->where("$table1.display", 'Y')
            ->where("$table2.display", 'Y')
            ->get()
            ->getRow();
    }

    public function allJoinTwoTables($table1, $table2, $onColumn)
    {
        return $this->db->table($table1)
            ->join($table2, "$table1.$onColumn = $table2.$onColumn", 'left')
            ->where("$table1.display", 'Y')
            ->where("$table2.display", 'Y')
            ->get()
            ->getResult();
    }
}
