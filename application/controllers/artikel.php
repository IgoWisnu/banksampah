<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class artikel extends CI_Controller {
        
        public function __construct()
        {
            parent::__construct();
            if($this->session->userdata('role') == ''){
                redirect('auth');
            }
        }
        
        public function index()
        {
            
        }

        public function detailArtikel(){
            $this->load->model('m_artikel');
            

            $id = $this->input->get('id');
            $data['artikel'] = $this->m_artikel->getDetail($id);

            $this->load->view('banksampah/berita', $data);
            
        }
    
    }
    
    /* End of file artikel.php */
    
?>