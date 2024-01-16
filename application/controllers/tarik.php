<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class tarik extends CI_Controller {
    
        public function index()
        {
            $this->load->view('banksampah/tarik');
            
        }

        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('m_tarik');
            
            if(!$this->session->userdata('role') == 'admin'){
                redirect('auth/login');
            }
        }

        public function cekSaldo(){
            $input = floatval($this->input->post('cari'));
            $saldo = floatval($this->input->post('saldo'));

            if($input <= $saldo){
                $output = '<p class="text-success">Saldo Mencukupi Ditari</p>';
            } else{
                $output = '<p class="text-danger">Saldo tidak mencukupi</p>';
            }
            echo $output;
        }

        public function tarikTabungan(){
            $saldo = floatval($this->input->post('saldo'));
            $jumlahTarik = floatval($this->input->post('tariksaldo'));

            if($jumlahTarik <= $saldo){
                $setor = $this->m_tarik->insertTrTarik();
                $this->m_tarik->updateSaldo();

                if($setor){
                    $this->session->set_flashdata('success', 'Tarik saldo berhasil');
                    redirect('dashboard');
                } else{
                    $this->session->set_flashdata('failed', 'Tarik saldo gagal');
                    redirect('dashboard');
                }
            } else{
                $this->session->set_flashdata('failed', 'Saldo tidak mencukupi');
                redirect('dashboard');
            }
        }
        
        
        public function cariuser(){
            $input = $this->input->post('cari');
            $output = '';

            if($input) {
                $data = $this->m_tarik->cariUserSaldo($input);
                if($data->num_rows() > 0){
                    $output = '<div class="table-responsive">
                    <table class="table table-bordered table-striped">';
                    foreach($data->result() as $row){
                        $output .= '
                        <tr class="result-item" data-tabungan-id="'.$row->id_tabungan.'" data-username="'.$row->username.'" data-saldo="'.$row->saldo.'">
                                <td>'.$row->id_tabungan.'</td>
                                <td>'.$row->username.'</td>
                                <td>'.$row->saldo.'</td>
                                </tr>
                        ';
                    }
                $output .= '</table>
                </div>';
                }
                else{
                    $output .= '<tr>
                            <td colspan="5">No Data Found</td>
                        </tr>';
                }
            }
            echo $output;
        }
    }
    
    /* End of file tarik.php */
    

?>