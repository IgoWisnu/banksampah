<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>tarik</title>
</head>
<body>
    <h3>Tarik Sampah</h3>
    <br>
    <div class="container">
        <div class="row">
            <div class="input-group col-6">
                <input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" />
            </div>
            <div class="result" id="result"></div>
            <br>
        </div>
        <form action="<?= base_url() ?>setorSampah/kalkulasi" method="post" id="add_form">
                    <div class="row g-3 align-items-center mb-3">
                        <!-- Data User -->
                        <div class="col-4">
                            <label for="userid" class="form-label">ID</label>
                            <input type="text" name="id_user" id="userid" class="form-control" readonly>
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

            // Handle click event on the result items
            $('#result').on('click', '.result-item', function(){
                // Retrieve additional data using the data method
                var userId = $(this).data('user-id');
                var username = $(this).data('username');
                var saldo = $(this).data('saldo');

                // Populate the selected user's information into the 'username' input field
                $('#userid').val(userId);
                $('#username').val(username);
                $('#saldo').val(saldo);

                console.log('Selected User ID:', userId);
                console.log('Selected Username:', username);
                console.log('Selected Saldo:', saldo);
                //change user input background
                var usersText = document.getElementById('userid');
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