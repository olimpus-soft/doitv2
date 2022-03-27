<?php
namespace App\Models;

class Users extends BaseModel {
    protected $table = 'tbl_users';

    public function getAll(Array $where=null, Array $order=null, &$result=[]) {
        $result = parent::getAll($where, $order);
        return $result;
    }
}