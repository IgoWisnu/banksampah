<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class dashboard extends CI_Controller {
    
        public function index(){
            $this->load->model('m_dashboard');  // Load the model
            $data['user'] = $this->m_dashboard->getData();  // Fetch data from the model
            $data['adminCount'] = $this->m_dashboard->getAdminCount();
            $data['nasabahCount'] = $this->m_dashboard->getNasabahCount();
            $data['berita'] = $this->m_dashboard->getBerita();
            $data['artikelCount'] = $this->m_dashboard->getArtikelCount();

    
            $this->load->view('banksampah/Lindexx', $data);  // Pass data to the view
        }
    
    }
    
    /* End of file banksampah.php */
    
?>