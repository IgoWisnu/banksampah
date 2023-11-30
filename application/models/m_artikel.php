<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class m_artikel extends CI_Model {
    
        public function getData(){
            $result = $this->db->get('artikel');
            return $result->result_array();
        }

        public function getDetail($id){
            $this->db->where('id', $id);
            $query = $this->db->get('artikel')->result_array();;

            return $query[0] ;
        }
    
    }
    
    /* End of file ModelName.php */
    
?>