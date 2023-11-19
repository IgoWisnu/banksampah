<?php

    defined('BASEPATH') OR exit('No direct script access allowed');
    
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require 'vendor/autoload.php';

    class m_auth extends CI_Model {
    
        
        public function __construct()
        {
            parent::__construct();
            
        }

        public function verify($token) {
            $this->db->where('kode_verif', $token)
                     ->update('user', ['isVerif' => 1]);
            $istrue = false;       
            if ($this->db->affected_rows() > 0) {
                $istrue = true;
            }
            return $istrue;
        }

        public function add(){
            $kode = random_string('alnum', 20);
            $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'nama_lengkap' => $this->input->post('nama_lengkap'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'alamat' => $this->input->post('alamat'),
                'notelp' => $this->input->post('notelp'),
                'kode_verif' => $kode,
                'email' => $this->input->post('email'),
                'isVerif' => 0
            );
            $result = $this->db->insert('user', $data);
            if ($result){
                $mailAddress  = array(
                    'email' => $data['email'],
                    'kode_verif' => $data['kode_verif']
                );
                return $mailAddress;
            }
        }

        public function mail($token, $email){
             //link
             $verificationLink = "localhost/mailtest/banksampah/auth/verify?token={$token}"; // Replace with your actual verification link
             $message = "Click the link below to verify your email:<br><a href='{$verificationLink}'>Verify Email</a>";
 
             //config
             $config['useragent'] = "Codeigniter";
             $config['mailpath'] = "usr/bin/sendmail";
             $config['protocol'] = "smtp";
             $config['smtp_host'] = "smtp.gmail.com";
             $config['smtp_port'] = "465";
             $config['smtp_user'] = "igowisnuchannel@gmail.com";
             $config['smtp_pass'] = "envz xfke agmy mnqa";
             $config['smtp_crypto'] = "ssl";
             $config['charset'] = "utf-8";
             $config['mailtype'] = "html";
             $config['newline'] = "\r\n";
             $config['smtp_timeout'] = 30;
             $config['wordwrap'] = TRUE;
 
             //set
             $this->email->initialize($config);
             $this->email->from('no-replay@igowisnuchannel@gmail.com','BANK SAMPAH');
             $this->email->to($email);
             $this->email->subject("verifikasi email");
             $this->email->message($message);
 
             //check
             if($this->email->send()){
                 echo "email terkirim ke $email";
             } else{
                 echo "email gagal terkirim";
             }
        }
        
    
    }
    
    /* End of file m_auth.php */
    
?>