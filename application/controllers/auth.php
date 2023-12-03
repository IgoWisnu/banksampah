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
            $this->load->view('banksampah/login');
        }

        public function mail(){
            $rules = $this->m_auth->validation();
            $this->form_validation->set_rules($rules);
            
            if($this->form_validation->run() == FALSE){
                $this->load->view('banksampah/v_register');
            } else{
                $mailCode = $this->m_auth->add();
                $email = $mailCode['email'];
                $kode_verif = $mailCode['kode_verif'];
                $data['verif'] = $this->m_auth->mail($kode_verif, $email);

                $this->load->view('banksampah/Verifikasi', $data);
            }

        }

        public function cekLogin(){
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $where = "username='$username' AND password='$password' AND IsVerif=1";
            $this->db->where($where);
            $data = $this->db->get('user');

            if ($data->num_rows() == 1) {
                $data = $data->result_array();
                $sess = array(
                    'id' => $data[0]['id'],
                    'username' => $data[0]['username'],
                    'role' => $data[0]['role']
                );
                $this->session->set_userdata($sess);
                $this->session->set_flashdata('alert','login berhasil!');
                redirect('home');
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
            if ($verifyCheck){
                $this->session->set_flashdata('alert','Verifikasi berhasil'); 
                redirect('auth/login');
            } else{
                $this->session->set_flashdata('alert','Verifikasi gagal');
                redirect('auth/login');
            }
        }
        
        
    
    }
    
    /* End of file Controllername.php */
    
?>