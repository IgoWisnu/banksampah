<body>
    <!-- Nasabah -->
    <div id="nasabah-table-container">
        <div class="row my-5">
            <h3 class="fs-4 mb-3">Nasabah</h3>
            <div class="col">
                <div class="row my-5">
                    <div class="col-5">
                        <form action="<?=base_url()?>dashboard/loadNasabah" method="post">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Enter username/email" id="keyword" name="keyword">
                                <input type="submit" class="btn btn-primary" id="submit" name="submit" value="search"></input>
                            </div>
                        </form>
                    </div>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">username</th>
                                    <th scope="col">Nama Lengkap</th>
                                    <th scope="col">Tanggal Lahir</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Detail</th>
                                    <!-- Tambah kolom untuk tombol/detail -->
                                </tr>
                            </thead>
                            <tbody >
                                <?php foreach ($user->result_array() as $key) { 
                                    if ($key['role'] === 'admin') {
                                        continue;
                                    }
                                ?>

                                <tr>
                                    <td><?php echo $key['username'] ?></td>
                                    <td><?php echo $key['nama_lengkap'] ?></td>
                                    <td><?php echo $key['tanggal_lahir'] ?></td>
                                    <td><?php echo $key['email'] ?></td>
                                    <td>
                                        <button
                                            type="button"
                                            class="btn btn-primary"
                                            data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"
                                            data-profile="<?php echo $key['profile'] ?>"
                                            data-nama="<?php echo $key['nama_lengkap'] ?>"
                                            data-tempat-lahir="<?php echo $key['tempat_lahir'] ?>"
                                            data-tanggal-lahir="<?php echo $key['tanggal_lahir'] ?>"
                                            data-alamat="<?php echo $key['alamat'] ?>"
                                            data-email="<?php echo $key['email'] ?>"
                                            data-telepon="<?php echo $key['notelp'] ?>">
                                            Detail
                                        </button>
                                    </td>

                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                        <!-- Paginate -->
                        <div style='margin-top: 10px;' id='pagination'>
                            <?=$pagination ?>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div
        class="modal fade"
        id="exampleModal"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">User Details</h1>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img
                        id="modal-profile-img"
                        src=""
                        alt="Profile Image"
                        class="img-fluid rounded-circle mx-auto d-block">
                    <p id="modal-nama"></p>
                    <p id="modal-tempat-lahir"></p>
                    <p id="modal-tanggal-lahir"></p>
                    <p id="modal-alamat"></p>
                    <p id="modal-email"></p>
                    <p id="modal-telepon"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $('#exampleModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var modal = $(this);
            var profileImageSrc = '<?= base_url(' img / profile / '); ?>' + button.data(
                'profile'
            );

            modal
                .find('#modal-profile-img')
                .attr('src', profileImageSrc);
            modal
                .find('#modal-nama')
                .text('Nama Lengkap: ' + button.data('nama'));
            modal
                .find('#modal-tempat-lahir')
                .text('Tempat Lahir: ' + button.data('tempat-lahir'));
            modal
                .find('#modal-tanggal-lahir')
                .text('Tanggal Lahir: ' + button.data('tanggal-lahir'));
            modal
                .find('#modal-alamat')
                .text('Alamat: ' + button.data('alamat'));
            modal
                .find('#modal-email')
                .text('Email: ' + button.data('email'));
            modal
                .find('#modal-telepon')
                .text('Nomor Telepon: ' + button.data('telepon'));
        });
    </script>
</body>
</html>