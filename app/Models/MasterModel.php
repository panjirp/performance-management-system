<?php
namespace App\Models;
use CodeIgniter\Model;

class MasterModel extends Model {

    function getAllActiveDepartment(){
        $builder = $this->db->table('master_department');
        $where = array(
          'status' => 'Active'
        );
        $query = $builder->getWhere($where);
        return $query;
    }

    function getDepartmentById($id){
        $builder = $this->db->table('master_department');
        $where = array(
          'id' => $id
        );
        $query = $builder->getWhere($where);
        return $query;
      }

    function addDepartment($data){
        $builder = $this->db->table('master_department');
        return $builder->insert($data);
    }

    function editDepartment($id, $data){
        $builder = $this->db->table('master_department');
        $builder->where('id', $id);
        return $builder->update($data);
    }

    function deleteDepartment($id){
      $data = array(
        'status' => 'Deleted',
        'modified_by' => session()->get('userId'),
        'date_time_modified' => date('Y-m-d H:i:s')
      );
  
      $builder = $this->db->table('master_department');
      $builder->where('id', $id);
      return $builder->update($data);
    }

    //job position

    function getAllActiveJobPosition(){
      $builder = $this->db->table('master_position');
      $where = array(
        'status' => 'Active'
      );
      $query = $builder->getWhere($where);
      return $query;
    }

    function getJobPositionById($id){
      $builder = $this->db->table('master_position');
      $where = array(
        'id' => $id
      );
      $query = $builder->getWhere($where);
      return $query;
    }

    function addJobPosition($data){
        $builder = $this->db->table('master_position');
        return $builder->insert($data);
    }

    function editJobPosition($id, $data){
        $builder = $this->db->table('master_position');
        $builder->where('id', $id);
        return $builder->update($data);
    }

  function deleteJobPosition($id){
    $data = array(
      'status' => 'Deleted',
      'modified_by' => session()->get('userId'),
      'date_time_modified' => date('Y-m-d H:i:s')
    );

    $builder = $this->db->table('master_position');
    $builder->where('id', $id);
    return $builder->update($data);
  }

}