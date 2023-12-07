<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class dashboard extends CI_Controller {
            public function __construct() {
                parent::__construct();
                // Load model BeritaModel
                $this->load->model('m_dashboard');
            }
        
            public function tambahBerita() {
                // Ambil data dari form
                $judulBerita = $this->input->post('judulBerita');
                $deskripsiBerita = $this->input->post('deskripsiBerita');
            
                // Konfigurasi upload
                $config['upload_path'] = "./uploads/up"; // Path to the upload folder
                $config['allowed_types'] = 'gif|jpg|png';  // Allowed file types
                $config['max_size'] = 2048;  // Maximum file size in KB
            
                $this->load->library('upload', $config);
            
                if (!$this->upload->do_upload('gambarBerita')) {
                    // Handle upload error, if any
                    $error = array('error' => $this->upload->display_errors());
                    print_r($error);  // You might want to handle this more gracefully in a production environment
                } else {
                    // Upload successful, get the uploaded file data
                    $upload_data = $this->upload->data();
                    $gambarBerita = $upload_data['file_name'];  // Get the uploaded file name
            
                    // Simpan ke database
                    $data = array(
                        'judul' => $judulBerita,
                        'gambar' => $gambarBerita,
                        'deskripsi' => $deskripsiBerita
                    );
                    $this->m_dashboard->insertBerita($data);
            
                    // Redirect atau tampilkan pesan sukses
                    redirect('dashboard'); // Ganti 'dashboard' dengan nama controller yang sesuai
                }
            }
            

        public function index(){
            $this->load->model('m_dashboard');  // Load the model
            $data['user'] = $this->m_dashboard->getData();  // Fetch data from the model
            $data['adminCount'] = $this->m_dashboard->getAdminCount();
            $data['nasabahCount'] = $this->m_dashboard->getNasabahCount();
            $data['berita'] = $this->m_dashboard->getBerita();
            $data['artikelCount'] = $this->m_dashboard->getArtikelCount();

    
            $this->load->view('banksampah/Lindexx', $data);  // Pass data to the view
        }

        public function deleteb($id){
            $this->m_dashboard->deleteData($id); 
            redirect('dashboard');
        }


    
    }
    
    /* End of file banksampah.php */
    
?>