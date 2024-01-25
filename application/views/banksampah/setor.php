<html>
<body>
<style>
        .center {
            text-align: center;
            font-weight: bold;
            font-size: 50px;
        }
    </style>
    <div class="containered px-3 pt-3">
        <h3>Setor Sampah</h3>
        <br>
        <div class="row">
            <div class="input-group col-6">
                <input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" />
            </div>
            <div class="result" id="result"></div>
            <br>
            <h3>Input Sampah</h3>
        </div>
        <div class="input py-3 rounded">
            <form action="<?= base_url() ?>setorSampah/kalkulasi" method="post" id="add_form">
                <div class="row g-3 align-items-center mb-3">
                    <!-- Data User -->
                    <div class="col-auto">
                        <label for="userid" class="form-label">ID</label>
                        <input type="text" name="id_user" id="userid" class="form-control" readonly>
                    </div>
                    <div class="col-auto">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" id="username" class="form-control" readonly>
                    </div>
                </div>

                <!-- Data Sampah -->
                <div class="row my-2" id="show_item">
                    <div class="col-2">
                        <div class="btn btn-success add_btn" name="add_btn" id="add_btn">Add</div>
                    </div>
                </div>
                <div class="">
                    <input type="submit" class="btn btn-primary">
                </div>
            </form>
            <table class="table table-bordered mt-5" id="datatable">
            
        
      </table>
        </div>
    </div>
   <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
   <script>
        $('document').ready(function(){
            $('#search_text').on('keyup', function(){
                console.log('ass')
                $.ajax({
                    url     : '<?= base_url('setorSampah/setor')?>',
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

            $(document).on('change', '.id_jenis_sampah', function(){
                console.log('ganti');
                $(this).closest('.row').find('.berat_sampah').val('');
                $(this).closest('.row').find('.harga_sampah').val('');
            });

            $(document).on('keyup', '.berat_sampah', function(){
                var beratSampah = $(this).val();
                var idSampah = $(this).closest('.row').find('.id_jenis_sampah').val();
                var hargaSampahInput = $(this).closest('.row').find('.harga_sampah');
                console.log(beratSampah);

                $.ajax({
                    url     : '<?= base_url('setorSampah/hitungHarga')?>',
                    type    : 'POST',
                    data    : {
                        berat : beratSampah,
                        id : idSampah
                    },
                    success: function(response) {
                        hargaSampahInput.val(response);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            });



            // Handle click event on the result items
            $('#result').on('click', '.result-item', function(){
                // Retrieve additional data using the data method
                var userId = $(this).data('user-id');
                var username = $(this).data('username');

                // Populate the selected user's information into the 'username' input field
                $('#userid').val(userId);
                $('#username').val(username);

                //change user input background
                var usersText = document.getElementById('userid');
                usersText.style.background = '#B8EAD4';

                var usernameText = document.getElementById('username');
                usernameText.style.background = '#B8EAD4';

                // Log or use the retrieved data as needed
                console.log('Selected User ID:', userId);

                // Clear the result container
                $('#result').html('');
            });

            $("#add_btn").click(function(e){
                console.log('alok');
                e.preventDefault();
                $("#show_item").prepend(`
                    <div class="row my-2" id="show_item">
                    <div class="col-5">
                            <select name="id_jenis_sampah[]" class="form-select id_jenis_sampah">
                                <?php foreach($option->result_array() as $key){ ?>
                                    <option value="<?=$key['id']?>"><?=$key['jenis_sampah']?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-3">
                            <input type="number" name="berat_sampah[]" step="0.01" class="form-control berat_sampah">
                        </div>
                        <div class="col-2 preview">
                            <input type="number" name="harga_sampah[]" class="form-control harga_sampah" readonly>
                        </div>
                        <div class="col-2">
                            <button class="btn btn-danger remove_btn" id="remove_btn" name="remove_btn">Remove</button>
                        </div>
                    </div>`);
            });

            $(document).on('click', '.remove_btn', function(e){
                e.preventDefault();
                let row_item = $(this).parent().parent();
                $(row_item).remove(); 
            })
            
        });
    </script>
</body>
</html>