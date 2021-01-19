<?php
namespace App\Models;
 
use CodeIgniter\Model;

class LoginModel extends Model {

    function cek_login($where){	
        $builder = $this->db->table('user');
        $query = $builder->getWhere($where);
        return $query;
	}

}