<body>
    <!-- Nasabah -->
    <div id="nasabah-table-container">
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
                        <!-- Paginate -->
                        <div style='margin-top: 10px;' id='pagination'>
                            ppp
                            <?=$this->pagination->create_links(); ?>
                        </div>
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

        $(document).ready(function(){

            // Detect pagination click
            $('#pagination').on('click','a',function(e){
            e.preventDefault(); 
            var pageno = $(this).attr('data-ci-pagination-page');
            console.log(pageno);
            loadPagination(pageno);
            });

            loadPagination(0);

            // Load pagination
            function loadPagination(pagno){
                console.log('load pagination');
                $.ajax({
                    url: '<?=base_url()?>dashboard/loadTabelNasabah/'+pagno,
                    type: 'get',
                    dataType: 'json', 
                    success: function(response){
                        console.log('Response:', response);
                        $('#pagination').html(response.pagination);
                        createTable(response.result,response.row);
                    },
                    error: function (xhr, status, error) {
                        console.error('AJAX request error:', error);
                    }
                });
            }

        // Create table list
        function createTable(result,sno){
            console.log('create table');
            sno = Number(sno);
            $('#postsList tbody').empty();
            for(index in result){
                var id = result[index].nama_langkap;
                var title = result[index].tanggal_lahir;
                var email = result[index].email;
                sno+=1;

                var tr = "<tr>";
                tr += "<td>"+ nama_langkap +"</td>";
                tr += "<td>"+ tanggal_lahir +"</td>";
                tr += "<td>"+ emai; +"</td>";
                tr += "</tr>";
                $('#postsList tbody').append(tr);
        
            }
        }
    });
    </script>
</body>
</html>