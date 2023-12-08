<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
</head>
<body>
    <h2 class="center">Live Data Search in Codeigniter using Ajax JQuery</h2><br />
    <div class="container">
        <div class="row">
         <div class="input-group col-6">
         
          <input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" />
         </div>
         <div class="result" id="result">
      
         </div>
         <br>
        </div>
        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label for="userid" class="form-label">ID</label>
                <input type="text" name="userid" id="userid" class="form-control" disabled>
            </div>
            <div class="col-auto">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" id="username" class="form-control" disabled>
            </div>
            
        </div>

    </div>
   <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
   <script>
        $('document').ready(function(){
            $('#search_text').on('keyup', function(){
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

            
        });
    </script>
</body>
</html>