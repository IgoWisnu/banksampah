<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class m_riwayat extends CI_Model {
        
        public function loadRiwayat($id){
            $query = "  SELECT * FROM transaksi_sampah 
                        JOIN transaksi_sampahdetail 
                        ON transaksi_sampah.id_transaksi_sampah = transaksi_sampahdetail.id_transaksi_sampah 
                        WHERE id_user_nasabah = $id ORDER BY transaksi_sampah.id_transaksi_sampah DESC";
            $result = $this->db->query($query);
            return $result;
        }
    
    }
    
    /* End of file m_riwayat.php */