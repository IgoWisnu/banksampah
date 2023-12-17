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

        public function tesLoadDetail(){
            $this->load->view('banksampah/invoice');
            
        }

        public function invoice(){
            $id_transaksi = $this->input->get('id');
            $data = $this->m_riwayat->getDetail($id_transaksi);
            $this->load->view('banksampah/invoice', $data);
        }


    
    }
    
    /* End of file riwayat.php */
    
?>