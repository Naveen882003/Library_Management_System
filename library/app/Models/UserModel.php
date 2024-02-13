<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $DBGroup = 'library ';
    
    public function __construct($DBGroup){
        $this->db=$DBGroup;
    }
    public function add($data_insert){
        return $this->db->table('tbl_books')->insert($data_insert); #insert operation
        // return $this->db->table('tbl_books')  
        // ->set($data)
        // ->where('book_id',10)
        // ->update();     # update operation 
        
    }
    // public function aad($data){
    //     return $this->db->table('tbl_books')->insert($data);
    // }
}