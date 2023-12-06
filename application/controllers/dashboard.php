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
                $gambarBerita = !empty($_FILES['gambarBerita']['name']) ? $_FILES['gambarBerita']['name'] : NULL;
                $deskripsiBerita = $this->input->post('deskripsiBerita');
        
                // Simpan ke database (gunakan method model)
                $data = array(
                    'judul' => $judulBerita,
                    'gambar' => $gambarBerita,
                    'deskripsi' => $deskripsiBerita
                );
                $this->m_dashboard->insertBerita($data);
        
                // Redirect atau tampilkan pesan sukses
                redirect('dashboard'); // Ganti 'dashboard' dengan nama controller yang sesuai
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