<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class dashboard extends CI_Controller {
            public function __construct() {
                parent::__construct();
                // Load model BeritaModel
                $this->load->model('m_dashboard');
                $this->load->library('pagination');

                if(!$this->session->userdata('role') == 'admin'){
                    redirect('auth');
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
                    $insert = $this->m_dashboard->insertBerita($data);
            
                    // Redirect atau tampilkan pesan sukses
                    if($insert){
                        $this->session->set_flashdata('success', 'Artikel berhasil ditambahkan');
                    } else{
                        $this->session->set_flashdata('failed', 'Artikel gagal ditambahkan');
                    }
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
        
                $update = $this->m_dashboard->updateBerita($id, $data);
                
                if($update){
                    $this->session->set_flashdata('success', 'Artikel berhasil diupdate');
                } else{
                    $this->session->set_flashdata('failed', 'Artikel gagal diupdate');
                }
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
                $data['adminCount'] = $this->m_dashboard->getAdminCount();
                $data['nasabahCount'] = $this->m_dashboard->getNasabahCount();
                $data['transaksiCount'] = $this->m_dashboard->getTransaksiCount();
                $data['artikelCount'] = $this->m_dashboard->getArtikelCount();
             
                $this->load->view('template/header');
                $this->load->view('template/sidebar');
                $this->load->view('template/topbar', $data);
                $this->load->view('template/footer');
                
         }
            

        public function deleteb($id){
            $delete = $this->m_dashboard->deleteData($id);
            if($delete){
                $this->session->set_flashdata('success', 'Artikel berhasil dihapus');
            } else{
                $this->session->set_flashdata('failed', 'Artikel gagal dihapus');
            }
            redirect('dashboard');
        }
 
        public function editberita($id){
            $data['artikel'] = $this->m_dashboard->getBeritaById($id);
            
            $this->load->view('banksampah/edit_berita', $data);
            
        }

        public function loadNasabah(){
            //search handle
            if($this->input->post('keyword') == ''){
                $data['keyword'] =  null;
                $this->session->unset_userdata('keyword_nasabah');
            }elseif($this->input->post('keyword')){
                $data['keyword'] =  $this->input->post('keyword');
                $this->session->set_userdata('keyword_nasabah', $data['keyword'] );
            }elseif($this->session->userdata('keyword_nasabah')){
                $data['keyword'] = $this->session->userdata('keyword_nasabah');   
            }
            //get data count
            $this->db->where('role', 'user');
            $this->db->where('isVerif', '1');
            if($data['keyword']){
                $this->db->like('username', $data['keyword']);
            }
            $this->db->from('user');

            // Pagination Configuration
            $config['base_url'] = base_url().'dashboard/loadNasabah';
            $config['use_page_numbers'] = TRUE;
            $config['total_rows'] = $this->db->count_all_results();
            $config['per_page'] = 2;

             // Customize pagination settings for Bootstrap
            $file_path = APPPATH . 'views/template/pagination.php';
            include ($file_path);
             
             // Initialize
            $this->pagination->initialize($config);

            // Initialize data Array and pagination
            $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
            $data['user'] = $this->m_dashboard->getUserData($config['per_page'],$page, $data['keyword']);
            $data['pagination'] = $this->pagination->create_links();

            //include the top bar
            $username = $this->session->userdata('username');
            $top['username'] = $username;
            $top['adminCount'] = $this->m_dashboard->getAdminCount();
            $top['nasabahCount'] = $this->m_dashboard->getNasabahCount();
            $top['transaksiCount'] = $this->m_dashboard->getTransaksiCount();
            $top['artikelCount'] = $this->m_dashboard->getArtikelCount();

            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('template/topbar', $top);
            $this->load->view('banksampah/tabelnasabah', $data);
            $this->load->view('template/footer');
            
        }

        public function loadBerita(){
             //get data count
             $beritaCount = $this->m_dashboard->getArtikelCount();

             // Pagination Configuration
             $config['base_url'] = base_url().'dashboard/loadBerita';
             $config['use_page_numbers'] = TRUE;
             $config['total_rows'] = $beritaCount;
             $config['per_page'] = 2;
 
            // Customize pagination settings for Bootstrap
            $file_path = APPPATH . 'views/template/pagination.php';
            include ($file_path);
              
              // Initialize
             $this->pagination->initialize($config);
 
             // Initialize data Array and pagination
             $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
             $data['berita'] = $this->m_dashboard->getBerita($config['per_page'],$page);
             $data['pagination'] = $this->pagination->create_links();
 

            $username = $this->session->userdata('username');
            $top['username'] = $username;
            $top['adminCount'] = $this->m_dashboard->getAdminCount();
            $top['nasabahCount'] = $this->m_dashboard->getNasabahCount();
            $top['transaksiCount'] = $this->m_dashboard->getTransaksiCount();
            $top['artikelCount'] = $this->m_dashboard->getArtikelCount();

            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('template/topbar', $top);
            $this->load->view('banksampah/tabelberita', $data);
            $this->load->view('template/footer');
            
        }

        public function loadTransaksi(){
            //in this case use m_transaksi model
            $this->load->model('m_transaksi');

            //get data count
            $transaksiCount = $this->m_dashboard->getTransaksiCount();

            // Pagination Configuration
            $config['base_url'] = base_url().'dashboard/loadTransaksi';
            $config['use_page_numbers'] = TRUE;
            $config['total_rows'] = $transaksiCount;
            $config['per_page'] = 5;

            // Customize pagination settings for Bootstrap
            $file_path = APPPATH . 'views/template/pagination.php';
            include ($file_path);
             
             // Initialize
            $this->pagination->initialize($config);

            // Initialize data Array and pagination
            $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
            $data['transaksi'] = $this->m_transaksi->loadTransaksiAll($config['per_page'],$page);
            $data['pagination'] = $this->pagination->create_links();

            $username = $this->session->userdata('username');
            $top['username'] = $username;

            $top['adminCount'] = $this->m_dashboard->getAdminCount();
            $top['nasabahCount'] = $this->m_dashboard->getNasabahCount();
            $top['transaksiCount'] = $this->m_dashboard->getTransaksiCount();
            $top['artikelCount'] = $this->m_dashboard->getArtikelCount();

            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('template/topbar', $top);
            $this->load->view('banksampah/tabeltransaksi', $data);
            $this->load->view('template/footer');
            
        }
    
    }
    
    /* End of file banksampah.php */
    
?>