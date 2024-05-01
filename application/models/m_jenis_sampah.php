<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class m_jenis_sampah extends CI_Model {
        
        public function loadData(){
            $data = $this->db->get('jenis_sampah');
            return $data;
        }
        
    
    }
    
    /* End of file m_jenis_sampah.php */
    
?>