<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class jenissampah extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('m_jenis_sampah');

            if($this->session->userdata('role') == ''){
                redirect('auth/login');
            }
        }
        
        public function index()
        {
            $data['sampah'] = $this->m_jenis_sampah->loadData();
            $this->load->view('banksampah/tabelsampah', $data);
        }
    
    }
    
    /* End of file jenissampah.php */
    
?>