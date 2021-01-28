<?php
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model {

    function getAllActiveUser(){
        $builder = $this->db->table('user');
        $builder->select('user.*,master_department.name as departmentName,master_position.name as positionName, user_hierarchy.user_boss_id as bossId, boss.name as bossName');
        $builder->join('master_department', 'master_department.id = user.master_department_id','left');   
        $builder->join('master_position', 'master_position.id = user.master_position_id','left');       
        $builder->join('user_hierarchy', 'user_hierarchy.user_id = user.id','left');       
        $builder->join('user boss', 'boss.id = user_hierarchy.user_boss_id','left');       
        $builder->where('user.status', 'Active');     
        $query = $builder->get();
        //$sql = $builder->getCompiledSelect();
        //var_dump($sql);
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

    function getUserBoss($id){
      $builder = $this->db->table('user_hierarchy');
      $where = array(
        'user_id' => $id
      );
      $query = $builder->getWhere($where);
      return $query;
  }

    function add($data){
        $builder = $this->db->table('user');
        $builder->insert($data);
        return $this->db->insertID();
    }

    function addUserBoss($data){
      $builder = $this->db->table('user_hierarchy');
      return $builder->insert($data);
    }

    function editUser($id, $data){
        $builder = $this->db->table('user');
        $builder->where('id', $id);
        return $builder->update($data);
    }

    function editUserBoss($id, $data){
      $builder = $this->db->table('user_hierarchy');
      $builder->where('user_id', $id);
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