<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class m_profile extends CI_Model {
        
        public function loadProfile(){
            $iduser = $this->session->userdata('id');

            $query = "SELECT * FROM user 
            JOIN tabungan ON user.id_user = tabungan.id_user_nasabah
            WHERE user.id_user = $iduser
            ";

            $result = $this->db->query($query);
            return $result;
        }
    
    }
    
    /* End of file m_profile.php */
    
?>