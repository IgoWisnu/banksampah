
<style>

    input:focus {
        color: #000;
    }
    
</style>
<body>
    <div class="containered py-3 px-3">
        <div class="row">
        <h3 class="mb-5">Tarik Sampah</h3>
            <div class="input-group col-6">
                <input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" />
            </div>
            <div class="result" id="result"></div>
            <br>
        </div>
        <form action="<?= base_url() ?>tarik/tarikTabungan" method="post" id="add_form">
                    <div class="row g-3 align-items-center mb-3">
                        <!-- Data User -->
                        <div class="col-4">
                            <label for="id_tabungan" class="form-label">ID</label>
                            <input type="text" name="id_tabungan" id="id_tabungan" class="form-control" readonly>
                        </div>
                        <div class="col-4">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" id="username" class="form-control" readonly>
                        </div>
                        <div class="col-4">
                            <label for="saldo" class="form-label">Saldo</label>
                            <input type="text" name="saldo" id="saldo" class="form-control" readonly>
                        </div>
                    </div>
    
                    <!-- Tarik saldo -->
                    <div class="row">
                        <div class="col-8">
                            <label for="tariksaldo" class="form-label">Jumlah Tarik</label>
                            <input type="number" name="tariksaldo" id="tariksaldo" class="form-control">
                        </div>
                        <div class="col-4">
                            <input type="submit" name="submit" class="btn btn-success mt-4">
                        </div>
                    </div>
                    <div class="keterangan" id="keterangan">

                    </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
   <script>
        $('document').ready(function(){
            //search user function
            $('#search_text').on('keyup', function(){
                console.log('ass')
                $.ajax({
                    url     : '<?= base_url('tarik/cariUser')?>',
                    type    : 'POST',
                    data    : {
                        cari : $(this).val()
                    },
                    success : function(data){
                        if (data.error) {
                            console.error('Error:', data.error);
                        } else {
                            $('#result').html(data);
                        }
                    }
                });
            });

            $('#tariksaldo').on('keyup', function(){
                console.log('ass')
                $('#keterangan').html('');

                var saldo =  document.getElementById('saldo').value;
                $.ajax({
                    url     : '<?= base_url('tarik/cekSaldo')?>',
                    type    : 'POST',
                    data    : {
                        cari : $(this).val(),
                        saldo : saldo
                    },
                    success : function(data){
                        if (data.error) {
                            console.error('Error:', data.error);
                        } else {
                            $('#keterangan').html(data);
                        }
                    }
                });
            });

            // Handle click event on the result items
            $('#result').on('click', '.result-item', function(){
                // Retrieve additional data using the data method
                var idTabungan = $(this).data('tabungan-id');
                var username = $(this).data('username');
                var saldo = $(this).data('saldo');

                // Populate the selected user's information into the 'username' input field
                $('#id_tabungan').val(idTabungan);
                $('#username').val(username);
                $('#saldo').val(saldo);

                //change user input background
                var usersText = document.getElementById('id_tabungan');
                usersText.style.background = '#B8EAD4';

                var usernameText = document.getElementById('username');
                usernameText.style.background = '#B8EAD4';

                var saldoText = document.getElementById('saldo');
                saldoText.style.background = '#B8EAD4';

                // Log or use the retrieved data as needed
                console.log('Selected User ID:', userId);

                // Clear the result container
                $('#result').html('');
            });
            
        });

        
    </script>
</body>
</html>