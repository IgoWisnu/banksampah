<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class home extends CI_Controller {
    
        public function index()
        {
            $this->load->view('banksampah/homepage');   
        }

        public function berita(){
            $this->load->view('banksampah/berita');
        }

        public function loadArtikel(){
            $this->load->model('m_artikel');
            $data['artikel'] = $this->m_artikel->getData();
            
            $this->load->view('banksampah/homepage', $data);
        }
    
    }
    
    /* End of file home.php */
    
?>