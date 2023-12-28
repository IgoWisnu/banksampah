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

        public function editProfile($id){
            $data = $this->db->get_where('user', array('id_user' => $id));
            return $data;
        }

        public function update(){
            $id = $this->input->post('id_user');
            $data = array(
                'nama_lengkap' => $this->input->post('nama_lengkap'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'alamat' => $this->input->post('alamat')
            );

            $this->db->where('id_user', $id);
            $result = $this->db->update('user', $data);

            return $result;
        }
    
    }
    
    /* End of file m_profile.php */
    
?>