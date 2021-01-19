<?php
namespace App\Models;
use CodeIgniter\Model;

class KpiModel extends Model {

    function getAllActiveKpi(){
        $builder = $this->db->table('master_kpi');
        $where = array(
          'status' => 'Active'
        );
        $query = $builder->getWhere($where);
        return $query;
    }

    function getKpiById($id){
        $builder = $this->db->table('master_kpi');
        $where = array(
          'id' => $id
        );
        $query = $builder->getWhere($where);
        return $query;
      }

    function add($data){
        $builder = $this->db->table('master_kpi');
        return $builder->insert($data);
    }

    function editKpi($id, $data){
        $builder = $this->db->table('master_kpi');
        $builder->where('id', $id);
        return $builder->update($data);
    }

    function deleteKpi($id){
        $data = array(
          'status' => 'Deleted',
          'modified_by' => session()->get('userId'),
          'date_time_modified' => date('Y-m-d H:i:s')
        );
  
        $builder = $this->db->table('master_kpi');
        $builder->where('id', $id);
        return $builder->update($data);
      }

}