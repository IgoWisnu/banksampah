<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class m_tarik extends CI_Model {
    
        public function cariUserSaldo($keyword) {
            $this->db->select('*');
            $this->db->from('user');
            $this->db->join('tabungan', 'user.id_user = tabungan.id_user_nasabah');
            $this->db->like('user.username', $keyword);
            $this->db->or_like('user.id_user', $keyword);
            $query = $this->db->get();

            return $query;
        }
        
    
    }
    
    /* End of file m_tarik.php */
    
?>