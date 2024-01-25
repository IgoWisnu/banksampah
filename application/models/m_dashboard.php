<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class m_dashboard extends CI_Model {

    public function getData(){
        $this->db->where('role', 'user');
        $data = $this->db->get('user'); 
        return $data;
    }

    public function getUserData($limit, $offset, $keyword){
        if($keyword){
            $this->db->like('username', $keyword);
        }
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('role', 'user');
        $this->db->where('isVerif', '1');
        $this->db->order_by('id_user', 'desc');
        $this->db->limit($limit, $offset);  
        $query = $this->db->get();

        return $query;
    }

    public function getAdminCount(){
        $this->db->where('role', 'admin');
        $count = $this->db->count_all_results('user');
        return $count;
    }

    public function getNasabahCount(){
        $this->db->where('role', 'user');
        $this->db->where('isVerif', '1');
        $query = $this->db->get('user');

        return $query->num_rows();
    }

    public function getBerita($limit, $offset){
        $this->db->order_by('id', 'desc');
        $this->db->limit($limit, $offset);
        $data = $this->db->get('artikel'); 
        return $data;
    }

    public function getTransaksi($limit, $offset){
        $this->db->limit($limit, $offset);
        $query = $this->db->get('tabungan_transaksi');
        
        return $query;
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
        $result = $this->db->insert('artikel', $data);
        return $result;
    }

    public function deleteData($id){
        $this->db->where('id', $id);
        $result = $this->db->delete('artikel');

        return $result;
    }
    
    public function getBeritaById($id) {
        $this->db->where('id', $id);
        $data = $this->db->get('artikel')->row_array();
        return $data;  
    }

    public function updateBerita($id, $data) {
        // Fungsi untuk mengupdate berita berdasarkan ID
        $this->db->where('id', $id);
        $result = $this->db->update('artikel', $data);

        return $result;
    }
    
    

}

/* End of file ModelName.php */


?>