<?php
namespace App\Models;
use CodeIgniter\Model;

class ThreeSixtyModel extends Model {

    function getStackholders($userId){
        $sql = "SELECT a.id AS userId, a.name AS username, a.department, a.jabatan, a.role"
        ." FROM"
        ." (SELECT u.id, u.name, md.name AS department, mp.name AS jabatan, 'Superordinate' AS role"
        ." FROM user_hierarchy uha"
        ." LEFT JOIN user u ON u.id = uha.user_boss_id"
        ." LEFT JOIN master_department md ON md.id = u.master_department_id"
        ." LEFT JOIN master_position mp ON mp.id = u.master_position_id"
        ." WHERE uha.user_id = ? AND u.`status`='Active'"
        ." UNION"
        ." SELECT u.id, u.name, md.name AS department, mp.name AS jabatan, 'Subordinate' AS role"
        ." FROM user_hierarchy uhb"
        ." LEFT JOIN user u ON u.id = uhb.user_id"
        ." LEFT JOIN master_department md ON md.id = u.master_department_id"
        ." LEFT JOIN master_position mp ON mp.id = u.master_position_id"
        ." WHERE uhb.user_boss_id = ? AND u.`status`='Active'"
        ." UNION"
        ." SELECT u.id, u.name, md.name AS department, mp.name AS jabatan, 'Peer' AS role" 
        ." FROM user u "
        ." LEFT JOIN user u2 ON u2.master_department_id = u.master_department_id"
        ." LEFT JOIN master_department md ON md.id = u.master_department_id"
        ." LEFT JOIN master_position mp ON mp.id = u.master_position_id"
        ." WHERE u2.id = ? AND u.id <> u2.id AND u.`status`='Active') a"
        ." GROUP BY a.id";
        return $this->db->query($sql, [$userId, $userId, $userId]);
        // echo $this->db->getLastQuery();
    }

}