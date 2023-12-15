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
                        <tr class="result-item" data-user-id="'.$row->id_user.'" data-username="'.$row->username.'" data-saldo="'.$row->saldo.'">
                                <td>'.$row->id_user.'</td>
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