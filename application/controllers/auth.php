<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class auth extends CI_Controller {
        
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('m_auth');
            
        }
        

        public function index()
        {
            $this->load->view('banksampah/login');
            
        }

        public function login(){
            $data['success'] = $this->session->flashdata('success');
            $data['error'] = $this->session->flashdata('error');
            $this->load->view('banksampah/login', $data);
        }

        public function mail(){
           $mailCode = $this->m_auth->add();

           $email = $mailCode['email'];
           $kode_verif = $mailCode['kode_verif'];
           $this->m_auth->mail($kode_verif, $email);
        }

        public function cekLogin(){
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $where = "username='$username' AND password='$password'";
            $this->db->where($where);
            $data = $this->db->get('user');

            if ($data->num_rows() == 1) {
                $data = $data->result_array();
                $sess = array(
                    'username' => $data[0]['username'],
                    'password' => $data[0]['password'],
                    'role' => $data[0]['role']
                );
                $this->session->set_userdata($sess);
                redirect('banksampah');
            }else{
                echo 'login failed';
                echo "$username".$password."dasad";
            }
        }

        public function goRegister(){
            $this->load->view('banksampah/v_register');
        }

        public function verify() {
            $token = $this->input->get('token');
            $verifyCheck = $this->m_auth->verify($token);
            if ($verifyCheck == true){
                $this->session->set_flashdata('success', 'Verification successful!');
                redirect('auth/login');
            } else{
                $this->session->set_flashdata('failed', 'Verification failed!');
                redirect('auth/login');
            }
        }
        
        
    
    }
    
    /* End of file Controllername.php */
    
?>