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
            /*
            $this->db->select('*');
            $this->db->from('tabungan_transaksi');
            $this->db->join('transaksi_sampah', 'tabungan_transaksi.id_transaksi_sampah = tabungan.id_transaksi_sampah');
            $this->db->join('transaksi_sampahdetail', 'transaksi_sampah.id_transaksi_sampah = transaksi_sampahdetail.id_transaksi_sampah');
            $this->db->join('tabungan', 'tabungan_transaksi.id_tabungan = tabungan.id_tabungan');
            $this->db->join('user', 'tabungan.id_user = user.id_user');
            $this->db->where('tabungan_transaksi.id_tabungan', $id);
            $result = $this->db->get()->result();
            */

            $query = "SELECT * FROM tabungan_transaksi 
            JOIN tabungan ON tabungan_transaksi.id_tabungan = tabungan.id_tabungan
            JOIN user ON tabungan.id_user_nasabah = user.id_user
            WHERE tabungan_transaksi.id_tabungan_transaksi = '$id' LIMIT 1";
            $result = $this->db->query($query);

            return $result;
        }

        public function getDetailSampah($id){
            $query = "SELECT * FROM tabungan_transaksi
            JOIN transaksi_sampah ON tabungan_transaksi.id_transaksi_sampah = transaksi_sampah.id_transaksi_sampah
            JOIN transaksi_sampahdetail ON transaksi_sampah.id_transaksi_sampah = transaksi_sampahdetail.id_transaksi_sampah
            JOIN jenis_sampah ON transaksi_sampahdetail.id_jenis_sampah = jenis_sampah.id
            WHERE tabungan_transaksi.id_tabungan_transaksi = '$id' ";
            $result = $this->db->query($query);

            return $result;
        }
    
    }
    
    /* End of file m_riwayat.php */