<?php

namespace App\Models;

use CodeIgniter\Model;


class CommonModel extends Model
{

    public function selectQuery()
    {
        $builder = $this->db->table("tbl_books");
        $builder->select("*");
        // $builder->where("key", "1213");
        $result = $builder->get();
        // echo $this->db->getLastQuery();

        return $result->getResult();

        // "SELECT * FROM mytable WHERE key = '1213'";
    }

    public function selectRow($id)
    {
        $builder = $this->db->table("tbl_books");
        $builder->select("*");
        $builder->where("book_id", $id);
        $result = $builder->get();
        // echo $this->db->getLastQuery();

        return $result->getRow();

        // "SELECT * FROM mytable WHERE key = '1213'";
    }
    public function insertValue($data)
    {
        $builder = $this->db->table("tbl_books");
        return  $builder->insert($data);
    }
    // public function updateValue($id, $data)
    // {
    //     $builder = $this->db->table("tbl_books");
    //     $query =  $builder->where("id", $id);
    //     return  $query->update($data);
    // }
}
