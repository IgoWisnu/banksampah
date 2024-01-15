<!-- Berita -->
<div id="berita-table-container">
    <div class="row my-5">
        <h3 class="fs-4 mb-3">Berita</h3>
        <div class="d-flex justify-content-start mb-3">
            <button
                type="button"
                class="btn btn-success mb-3 ms-0 p-2"
                data-bs-toggle="modal"
                data-bs-target="#tambahBeritaModal">
                Tambah Berita
            </button>
        </div>

        <!-- Modal Tambah -->
        <div
            class="modal fade"
            id="tambahBeritaModal"
            tabindex="-1"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Berita</h1>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form
                            action="<?= base_url('dashboard/tambahberita') ?>"
                            method="post"
                            enctype="multipart/form-data">

                            <div class="mb-3">
                                <label for="judulBerita" class="form-label">Judul Berita</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="judulBerita"
                                    name="judulBerita"
                                    placeholder="Masukkan Judul Berita">
                            </div>
                            <div class="mb-3">
                                <label for="gambarBerita" class="form-label">Upload Gambar Berita</label>
                                <input
                                    type="file"
                                    class="form-control"
                                    id="gambarBerita"
                                    name="gambarBerita"
                                    accept="image/*">
                            </div>
                            <div class="mb-3">
                                <label for="deskripsiBerita" class="form-label">Deskripsi Berita</label>
                                <!-- Sembunyikan elemen input teks asli -->
                                <input
                                    type="text"
                                    style="display: none;"
                                    id="deskripsiBerita"
                                    name="deskripsiBerita">
                                <!-- Gantikan dengan elemen textarea untuk Quill -->
                                <div id="deskripsiQuilli" style="min-height: 150px;"></div>
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit Modal -->
        <div
            class="modal fade"
            id="editBeritaModal"
            tabindex="-1"
            aria-labelledby="editBeritaModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="editBeritaModalLabel">Edit Berita</h1>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form
                            id="editForm"
                            action="<?= base_url('dashboard/updateBerita') ?>"
                            method="post"
                            enctype="multipart/form-data">
                            <input type="hidden" name="id" id="editBeritaId">
                            <input type="hidden" name="gambarBerita_existing" id="editGambarBeritaExisting">

                            <div class="mb-3">
                                <label for="editJudulBerita" class="form-label">Judul Berita</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="editJudulBerita"
                                    name="judulBerita"
                                    placeholder="Masukkan Judul Berita">
                            </div>
                            <div class="mb-3">
                                <label for="editGambarBerita" class="form-label">Upload Gambar Berita</label>
                                <input
                                    type="file"
                                    class="form-control-file"
                                    id="editGambarBerita"
                                    name="gambarBerita"
                                    accept="image/*">
                                <img id="editGambarPreview" style="max-width: 200px;" alt="Current Image">
                            </div>
                            <div class="mb-3">
                                <label for="editDeskripsiBerita" class="form-label">Deskripsi Berita</label>
                                <div id="editEditor" style="min-height: 150px;"></div>
                                <input type="hidden" id="editDeskripsiBerita" name="deskripsiBerita">
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
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
                                    <img
                                        src="<?php echo base_url('uploads/' . $key['gambar']); ?>"
                                        alt="Gambar Berita"
                                        width="50">
                                </td>
                                <td><?php echo $key['deskripsi'] ?></td>
                                <td>
                                    <button
                                        class="btn btn-warning"
                                        onclick="openEditModal('<?php echo $key['id']; ?>', '<?php echo $key['judul']; ?>', '<?php echo $key['gambar']; ?>', '<?php echo htmlspecialchars($key['deskripsi']); ?>')">Edit</button>
                                    <!--<a href="<?php echo base_url('dashboard/editberita/' . $key['id']) ?>"
                                    class="btn btn-info">Edit</a>-->
                                    <a
                                        href="<?php echo base_url('dashboard/deleteb/' . $key['id']) ?>"
                                        class="btn btn-danger">Delete</a>
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
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script>
    var quill = new Quill('#deskripsiQuilli', {theme: 'snow'});

    // Handle form submission within the modal
    var modalForm = document.querySelector('#tambahBeritaModal form');
    modalForm.onsubmit = function () {
        document
            .getElementById('deskripsiBerita')
            .value = quill.root.innerHTML;
        // You may want to add additional validation logic here before allowing the form
        // to be submitted
        return true; // Allow the form to be submitted
    };
    var editQuill = new Quill('#editEditor', {theme: 'snow'});

    // Handle form submission within the edit modal
    var editModalForm = document.querySelector('#editForm');
    editModalForm.addEventListener('submit', function () {
        document
            .getElementById('editDeskripsiBerita')
            .value = editQuill.root.innerHTML;
        // Additional validation logic can be added here before allowing the form to be
        // submitted
        return true; // Allow the form to be submitted
    });

    // Open the edit modal with data when the edit button is clicked
    function openEditModal(id, judul, gambar, deskripsi) {
        document
            .getElementById('editBeritaId')
            .value = id;
        document
            .getElementById('editJudulBerita')
            .value = judul;
        document
            .getElementById('editGambarBeritaExisting')
            .value = gambar;
        document
            .getElementById('editGambarPreview')
            .src = '<?= base_url("img/") ?>' + gambar;
        editQuill.root.innerHTML = deskripsi;
        $('#editBeritaModal').modal('show');
    }
</script>