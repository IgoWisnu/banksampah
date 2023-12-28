<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class profile extends CI_Controller {

        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('m_profile');
            
        }
        
    
        public function index()
        {
            $data['profile'] = $this->m_profile->loadProfile(); 
            $this->load->view('banksampah/profile', $data);
            
        }

        public function tesProfile(){
            $this->load->view('banksampah/profile');
        }

        public function editProfile(){
            $id = $this->input->get('id');

            $data['user'] = $this->m_profile->editProfile($id);
            $this->load->view('banksampah/editprofile', $data);
        }

        public function updateProfile(){
            $result = $this->m_profile->update();
            if($result){
                $this->session->set_flashdata('success', 'Profil berhasil di update');
                redirect('profile');
            } else {
                $this->session->set_flashdata('failed', 'Profil gagal di update');
            }
        }
    
    }
    
    /* End of file profile.php */
    
?>