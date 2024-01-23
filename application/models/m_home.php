<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class m_home extends CI_Model {
        
        public function loadData($id){
            $query = "SELECT CONCAT('Rp', FORMAT(saldo, 0)) AS saldo FROM tabungan WHERE id_user_nasabah = ?";
            $user = $this->db->query($query, array($id));
            return $user->row()->saldo;
        }

        public function loadProfile(){
            $iduser = $this->session->userdata('id');

            $query = $this->db->query("CALL sp_get_profile($iduser)");
            return $query;
        }
        
    
    }
    
    /* End of file m_home.php */
    
?>