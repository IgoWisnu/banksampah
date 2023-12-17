<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class m_riwayat extends CI_Model {
        
        public function loadRiwayat($id){
            $query = "SELECT * FROM tabungan_transaksi 
                        JOIN tabungan ON tabungan_transaksi.id_tabungan = tabungan.id_tabungan 
                        WHERE tabungan.id_user_nasabah = $id";
            $result = $this->db->query($query);
            return $result;
        }

        public function getDetail($id){
            $this->db->select('*');
            $this->db->from('tabungan_transaksi');
            $this->db->join('transaksi_sampah', 'user.id_user = tabungan.id_user_nasabah');


        }
    
    }
    
    /* End of file m_riwayat.php */