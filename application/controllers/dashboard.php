<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class dashboard extends CI_Controller {
            public function __construct() {
                parent::__construct();
                // Load model BeritaModel
                $this->load->model('m_dashboard');

                if(!$this->session->userdata('role') == 'admin'){
                    redirect('auth/login');
                }
            }
        
            public function tambahBerita() {
                // Ambil data dari form
                $judulBerita = $this->input->post('judulBerita');
                $deskripsiBerita = $this->input->post('deskripsiBerita');
            
                // Konfigurasi upload
                $config['upload_path'] = "./uploads"; // Path to the upload folder
                $config['allowed_types'] = 'gif|jpg|png';  // Allowed file types
                $config['max_size'] = 204800;  // Maximum file size in KB
            
                $this->upload->initialize($config);
            
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

            public function updateBerita() {
                // Ambil data dari form
                $id = $this->input->post('id');
                $judulBerita = $this->input->post('judulBerita');
                $deskripsiBerita = $this->input->post('deskripsiBerita');
        
                // Konfigurasi upload (jika diperlukan)
                $config['upload_path'] = "./img";
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = 204800;
        
                $this->load->library('upload', $config);
        
                // Cek apakah ada file gambar yang diupload
                if ($_FILES['gambarBerita']['name']) {
                    // Lakukan proses upload gambar
                    if (!$this->upload->do_upload('gambarBerita')) {
                        $error = array('error' => $this->upload->display_errors());
                        print_r($error);
                        return;
                    }
                    
        
                    // Upload successful, get the uploaded file data
                    $upload_data = $this->upload->data();
                    $gambarBerita = $upload_data['file_name'];
                } else {
                    // Jika tidak ada file yang diupload, gunakan gambar yang sudah ada
                    $gambarBerita = $this->input->post('gambarBerita_existing');
                }
        
                // Simpan ke database
                $data = array(
                    'judul' => $judulBerita,
                    'gambar' => $gambarBerita,
                    'deskripsi' => $deskripsiBerita
                );
        
                $this->m_dashboard->updateBerita($id, $data);
        
                // Redirect atau tampilkan pesan sukses
                redirect('dashboard');
            }

            public function tampilkanTabelNasabah() {
                $data['user'] = $this->m_dashboard->getData(); // Mengambil data nasabah dari model
            
                // Load view yang menampilkan tabel nasabah
                $this->load->view('banksampah/tnasabah', $data);
            }
            
            

            public function index(){
                $this->load->model('m_transaksi');
                $username = $this->session->userdata('username');
                $data['username'] = $username;

                $this->load->model('m_dashboard');  // Load the model
                $data['user'] = $this->m_dashboard->getData();  // Fetch data from the model
                $data['adminCount'] = $this->m_dashboard->getAdminCount();
                $data['nasabahCount'] = $this->m_dashboard->getNasabahCount();
                $data['berita'] = $this->m_dashboard->getBerita();
                $data['transaksiCount'] = $this->m_dashboard->getTransaksiCount();
                $data['artikelCount'] = $this->m_dashboard->getArtikelCount();
                $data['transaksi'] = $this->m_transaksi->loadTransaksiAll();

                // Assuming you want to fetch the first article's ID
                $firstArticle = $this->m_dashboard->getBerita()->row_array();
                $data['artikel'] = $this->m_dashboard->getBeritaById($firstArticle['id']);
                
                
                $this->load->view('banksampah/Lindexx', $data);  // Pass data to the view
                $this->load->view('banksampah/v_footer');
                
            }
            

        public function deleteb($id){
            $this->m_dashboard->deleteData($id); 
            redirect('dashboard');
        }
 
        public function editberita($id){
            $data['artikel'] = $this->m_dashboard->getBeritaById($id);
            
            $this->load->view('banksampah/edit_berita', $data);
            
        }
        
        


    
    }
    
    /* End of file banksampah.php */
    
?>