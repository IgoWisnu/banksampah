<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class tutorial extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('');

            if($this->session->userdata('role') == ''){
                redirect('auth/login');
            }
        }
        
        public function index()
        {
            $this->load->view('banksampah/tutor');
        }
    
    }
    
    /* End of file jenissampah.php */
    
?>