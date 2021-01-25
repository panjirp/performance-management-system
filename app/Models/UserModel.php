<?php
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model {

    function getAllActiveUser(){
        $builder = $this->db->table('user');
        $where = array(
          'status' => 'Active'
        );
        $query = $builder->getWhere($where);
        return $query;
    }

    function getUserById($id){
        $builder = $this->db->table('user');
        $where = array(
          'id' => $id
        );
        $query = $builder->getWhere($where);
        return $query;
      }

    function add($data){
        $builder = $this->db->table('user');
        return $builder->insert($data);
    }

    function editUser($id, $data){
        $builder = $this->db->table('user');
        $builder->where('id', $id);
        return $builder->update($data);
    }

    function deleteUser($id){
      $data = array(
        'status' => 'Deleted',
        'modified_by' => session()->get('userId'),
        'date_time_modified' => date('Y-m-d H:i:s')
      );
  
      $builder = $this->db->table('user');
      $builder->where('id', $id);
      return $builder->update($data);
    }

}