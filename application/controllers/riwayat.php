<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class riwayat extends CI_Controller {

        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('m_riwayat');
        }
        
    
        public function index()
        {
            $id = $this->session->userdata('id');
            $data['riwayat'] = $this->m_riwayat->loadRiwayat($id);
            $this->load->view('banksampah/riwayat', $data);
        }

        public function tesLoad(){
            $this->load->view('banksampah/riwayat');
            
        }


    
    }
    
    /* End of file riwayat.php */
    
?>