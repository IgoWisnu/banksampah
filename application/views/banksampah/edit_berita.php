    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Berita</title>
        <!-- Add Bootstrap CSS link -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>
    <body>
    <div class="container mt-5">
        <h1>Edit Berita</h1>
        <form action="<?php echo base_url('dashboard/updateBerita') ?>" method="post">  
            <input type="hidden" name="id" value="<?php echo $artikel['id']; ?>">
            <input type="hidden" name="gambarBerita_existing" value="<?php echo $artikel['gambar']; ?>">


            <div class="form-group">
                <label for="judulBerita">Judul Berita:</label>
                <input type="text" class="form-control" id="judulBerita" name="judulBerita" value="<?php echo $artikel['judul']; ?>">
                <?php echo form_error('judulBerita', '<div class="text-danger">', '</div>'); ?>
            </div>

            
            <div class="form-group">
                <label for="gambarBerita">Upload Gambar Berita:</label>
                <input type="file" class="form-control-file" id="gambarBerita" name="gambarBerita" accept="image/*">
                <img src="<?= base_url('uploads/' . $artikel['gambar']); ?>" alt="Current Image" style="max-width: 200px;">
                <?php echo form_error('gambarBerita', '<div class="text-danger">', '</div>'); ?>
            </div>

            <div class="form-group">
                <label for="deskripsiBerita">Deskripsi Berita:</label>
                <div id="editor"><?php echo $artikel['deskripsi']; ?></div>
                <input type="hidden" id="deskripsiBerita" name="deskripsiBerita" value="<?php echo $artikel['deskripsi']; ?>">
                <?php echo form_error('deskripsiBerita', '<div class="text-danger">', '</div>'); ?>
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>

    <!-- Add QuillJS CSS -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <!-- Add QuillJS script -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <!-- Add Bootstrap JS and Popper.js before closing body tag -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script></body>


    <script>
        var quill = new Quill('#editor', {
            theme: 'snow' // pilih tema yang diinginkan
        });
        
        // Set nilai awal dari konten Quill
        quill.root.innerHTML = '<?php echo addslashes($artikel['deskripsi']); ?>';

        var fileInput = document.getElementById('gambarBerita');
        fileInput.value = '<?php echo $artikel['gambar']; ?>';

        // Menangkap perubahan pada Quill dan memperbarui nilai input tersembunyi
        quill.on('text-change', function () {
            document.getElementById('deskripsiBerita').value = quill.root.innerHTML;
        });
    </script>

    </html>
