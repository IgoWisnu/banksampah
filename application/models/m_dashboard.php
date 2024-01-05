<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class m_dashboard extends CI_Model {

    public function getData(){
        $data = $this->db->get('user'); 
        return $data;
    }

    public function getAdminCount(){
        $this->db->where('role', 'admin');
        $count = $this->db->count_all_results('user');
        return $count;
    }

    public function getNasabahCount(){
        $count = $this->db->count_all('user');
        return $count;
    }

    public function getBerita(){
        $data = $this->db->get('artikel'); 
        return $data;
    }

    public function getTransaksiCount(){
        $data = $this->db->count_all('tabungan_transaksi'); 
        return $data;
    }

    public function getArtikelCount(){
        $count = $this->db->count_all('artikel');
        return $count;
    }

    public function insertBerita($data) {
        // Masukkan data ke dalam tabel artikel
        $this->db->insert('artikel', $data);
    }

    public function deleteData($id){
        $this->db->where('id', $id);
        $this->db->delete('artikel');
    }
    
    public function getBeritaById($id) {
        $this->db->where('id', $id);
        $data = $this->db->get('artikel')->row_array();
        return $data;  
    }

    public function updateBerita($id, $data) {
        // Fungsi untuk mengupdate berita berdasarkan ID
        $this->db->where('id', $id);
        $this->db->update('artikel', $data);
    }
    
    

}

/* End of file ModelName.php */


?>