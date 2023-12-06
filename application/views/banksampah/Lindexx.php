    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
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
                                            <table class="table bg-white rounded shadow-sm  table-hover">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" width="50">No</th>
                                                        <th scope="col">Username</th>
                                                        <th scope="col">Password</th>
                                                        <th scope="col">Nama Lengkap</th>
                                                        <th scope="col">Tempat Lahir</th>
                                                        <th scope="col">Tanggal Lahir</th>
                                                        <th scope="col">Alamat</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">No Tepl</th>
                                                        <th scope="col">Role</th>
                                                        <th scope="col">Profile</th>
                                                        <th scope="col">Kode Verif</th>
                                                        <th scope="col">Is Verif</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($user->result_array() as $key) { ?>
                                                        <tr>
                                                            <td><?php echo $key['id'] ?></td>
                                                            <td><?php echo $key['username'] ?></td>
                                                            <td><?php echo $key['password'] ?></td>
                                                            <td><?php echo $key['nama_lengkap'] ?></td>
                                                            <td><?php echo $key['tempat_lahir'] ?></td>
                                                            <td><?php echo $key['tanggal_lahir'] ?></td>
                                                            <td><?php echo $key['alamat'] ?></td>
                                                            <td><?php echo $key['email'] ?></td>
                                                            <td><?php echo $key['notelp'] ?></td>
                                                            <td><?php echo $key['role'] ?></td>
                                                            <td><?php echo $key['profile'] ?></td>
                                                            <td><?php echo $key['kode_verif'] ?></td>
                                                            <td><?php echo $key['isVerif'] ?></td>
                                                            
                                                            
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                        
                            </div>
                        </div>
                    </div>

                    <div id="berita-table-container" style="display: none;">
                        <div class="row my-5">
                            <h3 class="fs-4 mb-3">Berita</h3>
                            <div class="d-flex justify-content-start mb-3">
                                <button type="button" class="btn btn-success mb-3">Tambah Berita</button>
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
                                                            <td><?php echo $key['gambar'] ?></td>
                                                            <td><?php echo $key['deskripsi'] ?></td>
                                                            <td>
                                                                <a href="#" class="btn btn-info">Edit</a>
                                                                <a href="#" class="btn btn-danger">Delete</a>
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
                                                        

                    <div id="setor-table-container">
                        <div class="row my-5">
                            <h3 class="fs-4 mb-3">Setor</h3>
                            
                            <!-- Textfield 1 -->
                            <div class="col-md-4 mb-3">
                                <label for="textfield1" class="form-label">ID Nasabah</label>
                                <input type="text" class="form-control" id="textfield1" placeholder="Masukan Nomor">
                            </div>

                            <!-- Textfield 2 -->
                            <div class="col-md-4 mb-3">
                                <label for="textfield2" class="form-label">Nama Nasabah</label>
                                <input type="text" class="form-control" id="textfield2" placeholder="Masukkan Nama">
                            </div>

                            <!-- Textfield 2 -->
                            <div class="col-md-4 mb-3">
                                <label for="textfield2" class="form-label">berat sampah</label>
                                <input type="text" class="form-control" id="textfield2" placeholder="Masukkan berat">
                            </div>

                            <!-- Dropdown -->
                            <div class="col-md-4 mb-3">
                                <label for="dropdown" class="form-label">Pilih Sampah</label>
                                <select class="form-select" id="dropdown">
                                    <option value="option1">Opsi 1</option>
                                    <option value="option2">Opsi 2</option>
                                    <option value="option3">Opsi 3</option>
                                </select>
                            </div>

                            <!-- Tombol Setor -->
                            <div class="col-md-12">
                                <button type="button" class="btn btn-success">Setor</button>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="fs-4 mb-3">Riwayat Setor</h3>
                                <table class="table bg-white rounded shadow-sm  table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID Nasabah</th>
                                            <th>Nama</th>
                                            <th>Jenis Sampah</th>
                                            <th>Total Harga</th>
                                            <th>Invoice</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Data setoran akan ditambahkan di sini -->
                                        <!-- Contoh data setoran -->
                                        <tr>
                                            <td>1</td>
                                            <td>John Doe</td>
                                            <td>Kertas</td> 
                                            <td>Rp.10</td>
                                            <td><a href="#" class="btn btn-info">Lihat</a></td>
                                        </tr>
                                        <!-- End contoh data setoran -->
                                    </tbody>
                                </table>
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
        <script>
            var el = document.getElementById("wrapper");
            var toggleButton = document.getElementById("menu-toggle");
            var dashboardLink = document.getElementById("dashboard-link");
            var nasabahLink = document.getElementById("nasabah-link");
            var beritaLink = document.getElementById("berita-link");
            var setorLink = document.getElementById("setor-link");
            var nasabahTableContainer = document.getElementById("nasabah-table-container");
            var beritaTableContainer = document.getElementById("berita-table-container");
            var setorTableContainer = document.getElementById("setor-table-container");

            toggleButton.onclick = function () {
                el.classList.toggle("toggled");
            };

            nasabahLink.onclick = function () {
                nasabahTableContainer.style.display = "block";
                beritaTableContainer.style.display = "none";
                setorTableContainer.style.display = "none";
            };

            beritaLink.onclick = function () {
                beritaTableContainer.style.display = "block";
                nasabahTableContainer.style.display = "none";
                setorTableContainer.style.display = "none";
            };

            setorLink.onclick = function () {
                setorTableContainer.style.display = "block";
                nasabahTableContainer.style.display = "none";
                beritaTableContainer.style.display = "none";
            };

            nasabahTableContainer.style.display = "none";
            beritaTableContainer.style.display = "none";
            setorTableContainer.style.display = "none";

            dashboardLink.onclick = function () {
                nasabahTableContainer.style.display = "none";
                beritaTableContainer.style.display = "none";
                setorTableContainer.style.display = "none";
            };
            
    
        </script>

    </body>

    </html>