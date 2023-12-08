<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class m_setor extends CI_Model {
        
        public function cariUser($query){
            $this->db->select("*");
            $this->db->from("user");
            if($query != '')
            {
                $this->db->like('id_user', $query);
                $this->db->or_like('username', $query);
                $this->db->or_like('email', $query);
            }
            $this->db->order_by('username', 'DESC');
            return $this->db->get();
        }
    
    }
    
    /* End of file m_setor.php */
    
?>