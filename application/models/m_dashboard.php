<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class m_dashboard extends CI_Model {

    public function getData(){
        $data = $this->db->get('user'); 
        return $data;
    }

    public function getAdminCount(){
        $this->db->where('role', 'admin');
        $count = $this->db->count_all_results('user');
        return $count;
    }

    public function getNasabahCount(){
        $count = $this->db->count_all('user');
        return $count;
    }
    

}

/* End of file ModelName.php */


?>