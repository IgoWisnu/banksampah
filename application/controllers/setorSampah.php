<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class setorSampah extends CI_Controller {

        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('m_setor');
            
        }
        
    
        public function index()
        {
            $this->load->view('banksampah/setor');
            
        }

        public function setor(){
            $input = $this->input->post('cari');
            $output = '';

            if($input) {
                $data = $this->m_setor->cariUser($input);
                if($data->num_rows() > 0){
                    $output = '<div class="table-responsive">
                    <table class="table table-bordered table-striped">';
                    foreach($data->result() as $row){
                        $output .= '
                        <tr class="result-item" data-user-id="'.$row->id_user.'" data-username="'.$row->username.'">
                                <td>'.$row->id_user.'</td>
                                <td>'.$row->username.'</td>
                                <td>'.$row->email.'</td>
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
    
    /* End of file setorSampah.php */
    
?>