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

        public function update($data){
            $id = $this->input->post('id_user');

            $this->db->where('id_user', $id);
            $result = $this->db->update('user', $data);

            return $result;
        }

        public function deleteProfile(){
            $id = $this->input->post('id_user');
            $img = $this->input->post('oldimg');

            $path = FCPATH . 'uploads/profile/';

            // Construct the full path to the image file
            $file_path = $path . $img;

            // Check if the file exists before attempting to delete it
            if (file_exists($file_path)) {
                // Attempt to delete the file
                if (unlink($file_path)) {
                    echo 'Image deleted successfully.';
                } else {
                    echo 'Unable to delete the image.';
                }
            } else {
                echo 'The image file does not exist.';
            }
        }
    
    }
    
    /* End of file m_profile.php */
    
?>