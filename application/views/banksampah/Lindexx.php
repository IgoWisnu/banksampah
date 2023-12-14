        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
            <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">
            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
            <title>Admin Dashboard</title>
        </head>

        <style>
            :root {
            --main-bg-color: #009d63;   
            --main-text-color: #009d63;
            --second-text-color: #bbbec5;
            --second-bg-color: #c1efde;
            }

            .primary-text {
            color: var(--main-text-color);
            }

            .second-text {
            color: var(--second-text-color);
            }

            .primary-bg {
            background-color: var(--main-bg-color);
            }

            .secondary-bg {
            background-color: var(--second-bg-color);
            }

            .rounded-full {
            border-radius: 100%;
            }

            #wrapper {
            overflow-x: hidden;
            background-image: linear-gradient(
                to right,
                #557c55,
                #668d66,
                #77a077,
                #88b388,
                #99c699
            );
            }

            #sidebar-wrapper {
            min-height: 100vh;
            margin-left: -15rem;
            -webkit-transition: margin 0.25s ease-out;
            -moz-transition: margin 0.25s ease-out;
            -o-transition: margin 0.25s ease-out;
            transition: margin 0.25s ease-out;
            }

            #sidebar-wrapper .sidebar-heading {
            padding: 0.875rem 1.25rem;
            font-size: 1.2rem;
            }

            #sidebar-wrapper .list-group {
            width: 15rem;
            
            }

            #page-content-wrapper {
            min-width: 100vw;
            } 

            #wrapper.toggled #sidebar-wrapper {
            margin-left: 0;
            }

            #menu-toggle {
            cursor: pointer;
            color: black;
            }

            .list-group-item {
            border: none;
            padding: 20px 30px;
            }

            .list-group-item.active {
            background-color: transparent;
            color: var(--main-text-color);
            font-weight: bold;
            border: none;
            }

            @media (min-width: 768px) {
            #sidebar-wrapper {
                margin-left: 0;
            }

            #page-content-wrapper {
                min-width: 0;
                width: 100%;
            }

            #wrapper.toggled #sidebar-wrapper {
                margin-left: -15rem;
            }

            .popup-container {
                display: none;
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background-color: white;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                z-index: 1000;
            }

            .ql-editor {
                background-color: white !important;
                border: 1px solid #ccc; /* Optional: Add a border for better visibility */
                min-height: 150px; /* Adjust the height as needed */
            }

            /* Add this style to set the background of the Quill toolbar to white */
            .ql-toolbar {
                background-color: white !important;
            }

            /* Additional styling for better appearance */
            #editor {
                border: 1px solid #ccc;
                border-radius: 10px;
                margin-top: 8px;
                margin-bottom: 16px;
            }


            
        }
        </style>

        <body>
            <div class="d-flex" id="wrapper">
                <div class="bg-white" id="sidebar-wrapper">
                    <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">Bank Sampah</div>
                    <div class="list-group list-group-flush my-3">
                        <a href="#" id="dashboard-link" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                                class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                        <a href="#" id="nasabah-link" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                                class="fas fa-user fa-beat me-2"></i>Nasabah</a>
                        <a href="#" id="berita-link" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                                class="fas fa-chart-line me-2"></i>Berita</a>
                        <a href="#" id="setor-link" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i 
                                class="fas fa-arrow-up me-2"></i>Setor</a>                        
                        <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                                class="fas fa-arrow-down me-2"></i>Tarik</a>
                        <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                                class="fas fa-power-off me-2"></i>Logout</a>
                    </div>
                </div>

                <div id="page-content-wrapper">
                    <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                            <h2 class="fs-2 m-0">Dashboard Admin</h2>
                        </div>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-user me-2"></i>John Doe
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Profile</a></li>
                                        <li><a class="dropdown-item" href="#">Settings</a></li>
                                        <li><a class="dropdown-item" href="#">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>

                    <div class="container-fluid px-4">
                        <div class="row g-3 my-2">
                            <div class="col-md-3">
                                <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                    <div>
                                        <h3 class="fs-2"><?php echo $adminCount; ?></h3>
                                        <p class="fs-5">Admin</p>
                                    </div>
                                    <i class="fas fa-user-tie fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                    <div>
                                    <h3 class="fs-2"><?php echo $nasabahCount; ?></h3>
                                        <p class="fs-5">Nasabah</p>
                                    </div>
                                    <i
                                        class="fas fa-user fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                    <div>
                                        <h3 class="fs-2">0</h3>
                                        <p class="fs-5">Transaksi</p>
                                    </div>
                                    <i class="fas fa-piggy-bank fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                    <div>
                                        <h3 class="fs-2"><?php echo $artikelCount; ?></h3>
                                        <p class="fs-5">Berita</p>
                                    </div>
                                    <i class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                                </div>
                            </div>
                        </div>

                        <div id="nasabah-table-container" style="display: none;">
                            <div class="row my-5">
                                <h3 class="fs-4 mb-3">Nasabah</h3>
                                <div class="col">
                                <div class="row my-5">
                                            <div class="col">
                                            <table class="table bg-white rounded shadow-sm table-hover">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Nama Lengkap</th>
                                                        <th scope="col">Tanggal Lahir</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Detail</th> <!-- Tambah kolom untuk tombol/detail -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($user->result_array() as $key) { 
                                                        if ($key['role'] === 'admin') {
                                                                
                                                            continue;
                                                        }
                                                        ?>
                                                        
                                                        <tr>
                                                            <td><?php echo $key['nama_lengkap'] ?></td>
                                                            <td><?php echo $key['tanggal_lahir'] ?></td>
                                                            <td><?php echo $key['email'] ?></td>
                                                            <td>
                                                            <a href="#" id="nasabahd-link" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                                                                class="fas fa-user fa-beat me-2"></i>Detail</a>
                                                            </td>

                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                            </div>
                                        </div>
                                            
                                </div>
                            </div> 
                        </div>

                        <div id="nasabah-modal-container">
                            <div class="modal fade" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Modal title</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Modal body text goes here.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="berita-table-container" style="display: none;">
                            <div class="row my-5">
                                <h3 class="fs-4 mb-3">Berita</h3>
                                <div class="d-flex justify-content-start mb-3">
                                    <button type="button" class="btn btn-success mb-3" onclick="tampilkanFormTambahBerita()">Tambah Berita</button>
                                </div>
                                
                                <div id="form-tambah-berita" style="display: none;">
                                    <form action="<?= base_url('dashboard/tambahberita') ?>" method="post" enctype="multipart/form-data">

                                        <div class="mb-3">
                                            <label for="judulBerita" class="form-label">Judul Berita</label>
                                            <input type="text" class="form-control" id="judulBerita" name="judulBerita" placeholder="Masukkan Judul Berita">
                                        </div>
                                        <div class="mb-3">
                                            <label for="gambarBerita" class="form-label">Upload Gambar Berita</label>
                                            <input type="file" class="form-control" id="gambarBerita" name="gambarBerita" accept="image/*">
                                        </div>
                                        <div class="mb-3">
                                            <label for="deskripsiBerita" class="form-label">Deskripsi Berita</label>
                                            <div id="editor"></div>
                                            <input type="hidden" id="deskripsiBerita" name="deskripsiBerita">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Tambah</button>
                                    </form>
                                </div>

                                <div id="form-edit-berita" style="display: none;">
                                    <form action="<?= base_url('dashboard/tambahberita') ?>" method="post" enctype="multipart/form-data">

                                        <div class="mb-3">
                                            <label for="judulBerita" class="form-label">Judul Berita</label>
                                            <input type="text" class="form-control" id="judulBerita" name="judulBerita" placeholder="Masukkan Judul Berita">
                                        </div>
                                        <div class="mb-3">
                                            <label for="gambarBerita" class="form-label">Upload Gambar Berita</label>
                                            <input type="file" class="form-control" id="gambarBerita" name="gambarBerita" accept="image/*">
                                        </div>
                                        <div class="mb-3">
                                            <label for="deskripsiBerita" class="form-label">Deskripsi Berita</label>
                                            <div id="editor"></div>
                                            <input type="hidden" id="deskripsiBerita" name="deskripsiBerita">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Tambah</button>
                                    </form>
                                </div>

                                <div class="col">
                                <div class="row my-1">
                                            <div class="col">
                                                <table class="table bg-white rounded shadow-sm  table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" width="50">No</th>
                                                            <th scope="col">Judul</th>  
                                                            <th scope="col">Gambar</th>
                                                            <th scope="col">deskripsi</th>
                                                            <th scope="col">Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php foreach ($berita->result_array() as $key) { ?>
                                                            <tr>
                                                                <td><?php echo $key['id'] ?></td>
                                                                <td><?php echo $key['judul'] ?></td>
                                                                <td>
                                                                    <img src="<?php echo base_url('uploads/' . $key['gambar']); ?>" alt="Gambar Berita" width="50">
                                                                </td>
                                                                <td><?php echo $key['deskripsi'] ?></td>
                                                                <td>
                                                                    <a href="<?php echo base_url('dashboard/editberita/' . $key['id']) ?>" class="btn btn-info">Edit</a>
                                                                    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#myModal">Modal</button>
                                                                    <a href="<?php echo base_url('dashboard/deleteb/' . $key['id']) ?>" class="btn btn-danger">Delete</a>
                                                                </td> 
                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                            
                                </div>
                            </div>
                        </div>
                            <div id="berita-modal-container">
                                <div id="myModal" class="modal fade" tabindex="-1">
                                 <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Modal title</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        

                        <div id="beritmake-table-container" style="display: none;">
                            
                        </div>

                    </div>
                </div>
            </div>
            </div>

            
            
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script>
                var el = document.getElementById("wrapper");
                var toggleButton = document.getElementById("menu-toggle");
                var dashboardLink = document.getElementById("dashboard-link");
                var nasabahLink = document.getElementById("nasabah-link");
                var beritaLink = document.getElementById("berita-link");
                var nasabahdLink = document.getElementById("nasabahd-link");
                var nasabahTableContainer = document.getElementById("nasabah-table-container");
                var beritaTableContainer = document.getElementById("berita-table-container");
                var nasabahmodalcontainer = document.getElementById("nasabah-modal-container");
                

                toggleButton.onclick = function () {
                    el.classList.toggle("toggled");
                };

                nasabahLink.onclick = function () {
                    nasabahTableContainer.style.display = "block";
                    beritaTableContainer.style.display = "none";
                };

                beritaLink.onclick = function () {
                    beritaTableContainer.style.display = "block";
                    nasabahTableContainer.style.display = "none";
                };

                nasabahdLink.onclick = function () {
                    var myModal = new bootstrap.Modal(document.getElementById('nasabah-modal-container'));
                    myModal.show();
                };


                nasabahTableContainer.style.display = "none";
                beritaTableContainer.style.display = "none";

                dashboardLink.onclick = function () {
                    nasabahTableContainer.style.display = "none";
                    beritaTableContainer.style.display = "none";
                };

                function tampilkanFormTambahBerita() {
                    var formTambahBerita = document.getElementById("form-tambah-berita");
                    formTambahBerita.style.display = "block";
                }

                function tampilkanFormEditBerita() {
                    var formTambahBerita = document.getElementById("form-edit-berita");
                    formTambahBerita.style.display = "block";
                }

                function tambahBerita() {
                    // Ambil nilai dari input form tambah berita
                    var judulBerita = document.getElementById("judulBerita").value;
                    var gambarBerita = document.getElementById("gambarBerita").value;
                    var deskripsiBerita = document.getElementById("deskripsiBerita").value;

                    // Lakukan sesuatu dengan data berita, misalnya simpan ke database

                    // Sembunyikan kembali form tambah berita
                    var formTambahBerita = document.getElementById("form-tambah-berita");
                    formTambahBerita.style.display = "none";
                }
                
                    var quill = new Quill('#editor', {
                        theme: 'snow',
                        placeholder: 'Masukkan Deskripsi',
                    });

                    // Add an event listener to update the hidden input when the content changes
                    quill.on('text-change', function() {
                        var htmlContent = quill.root.innerHTML;
                        document.getElementById('deskripsiBerita').value = htmlContent;

                });

                
                
                // Fungsi untuk menampilkan/menyembunyikan sidebar
                function toggleSidebar() {
                    var el = document.getElementById("wrapper");
                    el.classList.toggle("toggled");
                    // Simpan status sidebar ke localStorage
                    localStorage.setItem("sidebarToggled", el.classList.contains("toggled"));
                }   

                // Fungsi untuk menampilkan tabel Dashboard
                function showDashboard() {
                    document.getElementById("nasabah-table-container").style.display = "none";
                    document.getElementById("berita-table-container").style.display = "none";
                    // Simpan tab aktif ke localStorage
                    localStorage.setItem("activeTab", "dashboard");
                }

                // Fungsi untuk menampilkan tabel Nasabah
                function showNasabahTable() {
                    document.getElementById("nasabah-table-container").style.display = "block";
                    document.getElementById("berita-table-container").style.display = "none";
                    // Simpan tab aktif ke localStorage
                    localStorage.setItem("activeTab", "nasabah");
                }

                // Fungsi untuk menampilkan tabel Berita
                function showBeritaTable() {
                    document.getElementById("berita-table-container").style.display = "block";
                    document.getElementById("nasabah-table-container").style.display = "none";
                    // Simpan tab aktif ke localStorage
                    localStorage.setItem("activeTab", "berita");
                }

                // Fungsi untuk menginisialisasi status halaman berdasarkan localStorage
                function initializePageState() {
                    var sidebarToggled = localStorage.getItem("sidebarToggled");
                    var activeTab = localStorage.getItem("activeTab");

                    // Mengembalikan status sidebar
                    var el = document.getElementById("wrapper");
                    if (sidebarToggled === "true") {
                        el.classList.add("toggled");
                    } else {
                        el.classList.remove("toggled");
                    }

                    // Mengembalikan tab aktif
                    if (activeTab === "nasabah") {
                        showNasabahTable();
                    } else if (activeTab === "berita") {
                        showBeritaTable();
                    } else if (activeTab === "dashboard") {
                        showDashboard();
                    }
                }


                // Mendengarkan peristiwa untuk tombol toggle sidebar
                document.getElementById("menu-toggle").addEventListener("click", toggleSidebar);

                // Mendengarkan peristiwa untuk tautan tab
                document.getElementById("dashboard-link").addEventListener("click", showDashboard);
                document.getElementById("nasabah-link").addEventListener("click", showNasabahTable);
                document.getElementById("berita-link").addEventListener("click", showBeritaTable);

                // Menginisialisasi status halaman
                initializePageState();
                
                
            </script>

        </body>

        </html>