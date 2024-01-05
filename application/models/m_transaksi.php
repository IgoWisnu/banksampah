<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class m_transaksi extends CI_Model {
        
        public function loadTransaksiAll(){
            $this->db->select('tabungan_transaksi.*, n.username AS nasabah_username, s.username AS staff_username'); // Add more fields as needed
            $this->db->from('tabungan_transaksi');
            $this->db->join('tabungan', 'tabungan_transaksi.id_tabungan = tabungan.id_tabungan');
            $this->db->join('user n', 'tabungan.id_user_nasabah = n.id_user');
            $this->db->join('user s', 'tabungan_transaksi.id_user_staff = s.id_user');
            $this->db->limit(20);
            

            $query = $this->db->get();
            return $query;
        }

        public function loadDetailAll(){
            $this->db->select('transaksi_sampahdetail.*, jenis_sampah.jenis_sampah'); // Add more fields as needed
            $this->db->from('transaksi_sampahdetail');
            $this->db->join('transaksi_sampah', 'transaksi_sampahdetail.id_transaksi_sampah = transaksi_sampah.id_transaksi_sampah');
            $this->db->join('jenis_sampah', 'jenis_sampah.id = transaksi_sampahdetail.id_jenis_sampah');
            $this->db->limit(20);
            

            $query = $this->db->get();
            return $query;
        }

        public function loadTransaksi($date_from, $date_to){
            $this->db->select('tabungan_transaksi.*, n.username AS nasabah_username, s.username AS staff_username'); // Add more fields as needed
            $this->db->from('tabungan_transaksi');
            $this->db->join('tabungan', 'tabungan_transaksi.id_tabungan = tabungan.id_tabungan');
            $this->db->join('user n', 'tabungan.id_user_nasabah = n.id_user');
            $this->db->join('user s', 'tabungan_transaksi.id_user_staff = s.id_user');
            $this->db->where('tgl_tabungan_transaksi >=', $date_from);
            $this->db->where('tgl_tabungan_transaksi <=', $date_to);


            $query = $this->db->get();
            return $query;
        }

        public function loadDetail($date_from, $date_to){
            $this->db->select('transaksi_sampahdetail.*, jenis_sampah.jenis_sampah'); // Add more fields as needed
            $this->db->from('transaksi_sampahdetail');
            $this->db->join('transaksi_sampah', 'transaksi_sampahdetail.id_transaksi_sampah = transaksi_sampah.id_transaksi_sampah');
            $this->db->join('jenis_sampah', 'jenis_sampah.id = transaksi_sampahdetail.id_jenis_sampah');
            $this->db->where('tgl_transaksi >=', $date_from);
            $this->db->where('tgl_transaksi <=', $date_to);

            $query = $this->db->get();
            return $query;
        }
    
    }
    
    /* End of file m_transaksi.php */
    
?>