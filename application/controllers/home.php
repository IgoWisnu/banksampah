<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class home extends CI_Controller {

        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('m_home');
            
        }
        
    
        public function index()
        {
            redirect('home/loadArtikel');
        }

        public function berita(){
            $this->load->view('banksampah/berita');
        }

        public function loadArtikel(){
            //user data
            $username = $this->session->userdata('username');
            $data['username'] = $username;

            //load artikel
            $this->load->model('m_artikel');
            $data['artikel'] = $this->m_artikel->getData();

            //load balance saldo
            $id = $this->session->userdata('id');
            $data['saldo'] = $this->m_home->loadData($id);

            $this->load->view('banksampah/homepage', $data);
        }
    
    }
    
    /* End of file home.php */
    
?>