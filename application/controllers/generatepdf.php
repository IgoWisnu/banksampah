<?php class generatepdf extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_transaksi');
        
        if(!$this->session->userdata('role') == 'admin'){
            redirect('auth');
        }
    }

    public function index(){
        $this->load->model('m_dashboard');
            
        $username = $this->session->userdata('username');
        $top['username'] = $username;
        $top['adminCount'] = $this->m_dashboard->getAdminCount();
        $top['nasabahCount'] = $this->m_dashboard->getNasabahCount();
        $top['transaksiCount'] = $this->m_dashboard->getTransaksiCount();
        $top['artikelCount'] = $this->m_dashboard->getArtikelCount();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar', $top);
        $this->load->view('banksampah/laporan');
        $this->load->view('template/footer');
    }

    function tesview(){
        $date_from = $this->input->post('date_from');
        $date_to = $this->input->post('date_to');

        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;
        $data['laporan'] = $this->m_transaksi->loadTransaksi($date_from, $date_to);
        $data['detail'] = $this->m_transaksi->loadDetail($date_from, $date_to);
        $this->load->view('v_laporan', $data);
        ?><script>console.log('pppp')</script> <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
    }

    function pdftransaksi()
    {
        $date_from = $this->input->post('date_from');
        $date_to = $this->input->post('date_to');

        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;
        $data['laporan'] = $this->m_transaksi->loadTransaksi($date_from, $date_to);
        $data['detail'] = $this->m_transaksi->loadDetail($date_from, $date_to);
        $html = $this->load->view('v_laporan', $data, true);

        $this->load->library('pdfgenerator');
        $data['title'] = "Laporan Transaksi Sampah";
        $file_pdf = $data['title'];
        $paper = 'A4';
        $orientation = "portrait";
        $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
    }


}