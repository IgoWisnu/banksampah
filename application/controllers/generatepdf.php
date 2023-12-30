<?php class generatepdf extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_transaksi');
        
    }

    public function laporan(){
        $this->load->view('banksampah/laporan');
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