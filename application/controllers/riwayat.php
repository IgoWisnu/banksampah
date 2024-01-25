<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class riwayat extends CI_Controller {

        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('m_riwayat');

            if($this->session->userdata('role') == ''){
                redirect('auth');
            } elseif($this->session->userdata('role') == 'guest'){
                redirect('auth/regisGuest');
            }
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
            $data['detail'] = $this->m_riwayat->getDetail($id_transaksi);
            $data['sampah'] = $this->m_riwayat->getDetailSampah($id_transaksi);
            $this->load->view('banksampah/invoice', $data);
        }


    
    }
    
    /* End of file riwayat.php */
    
?>