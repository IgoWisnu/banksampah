<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
  </head>
  
  <style>
    .Container{
        background: #557C55;
    }

    .Panel{
        width: 390px;
        margin-top: 120px;
        background: white;
        border-top-left-radius: 30px; 
        border-top-right-radius: 30px;
        margin-left: auto;
        margin-right: auto;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .SelamatDatangKembali{
        top: 50px; 
        text-align: center;
        position: relative;
        color: white; 
        font-size: 40px; 
        font-weight: 700; 
        word-wrap: normal;
    }

    .SilahkanMasukanUsernameDanPasswordKamu{
        top: 115px;
        color: white;
        text-align: center;
        position: relative;
        font-size: 20px; 
        font-weight: 600; 
        word-wrap: break-word;
    }

    .tLogin{
        top: 35px;
        text-align: center;
        position: relative;
        color: #333333; 
        font-size: 40px; 
        font-weight: 700; 
        word-wrap: break-word;
    }

    .Username{
        top: 90px; 
        position: relative; 
        color: #333333; 
        font-size: 14px; 
        font-weight: 600; 
    }

    .Password{
        top: 120px; 
        position: relative; 
        color: #333333; 
        font-size: 14px;  
        font-weight: 600; 
    }

    .form-control{
        border-width: 2px;
        border-color: black;
        padding: 11px;
        border-radius: 5mm;
        width: 336px;
        margin-left: auto;
        margin-right: auto;
    }
    
    .btn{
        border-radius: 5mm;
        top: 250px;
        background-color: #557C55;
        position: relative;
    }

    .tbLogin{
        background-color: #557C55;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 20px;
    }

    .BelumPunyaAkunSignup{
        top: 300px; 
        position: relative; 
        text-align: center;
    }

    .link{
        text-decoration: none;
    }

  </style>

  <body>
        <div class="Container">
        <?php
        
        ?>
            <div class="SelamatDatangKembali">Selamat Datang Kembali</div>
            <div class="SilahkanMasukanUsernameDanPasswordKamu">Silahkan Masukkan Username dan Password Kamu!</div>

            <div class="Panel col">
                <div class="tLogin">Login</div>
                <form action="<?=base_url('auth/cekLogin') ?>" method="post">
                    <div class="">
                        <div class="Username w-75">Username
                            <input type="text" class="form-control" name="username">
                        </div>
                    </div>
                
                    <div class="">
                        <div class="Password w-75">Password
                            <input type="password" class="form-control " name="password">
                        </div>
                    </div>
    
                    <div class="">
                        <div class="btn">
                            <input type="submit" class="tbLogin">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="BelumPunyaAkunSignup">
                            <div>Belum Punya Akun?</div>
                            <a href="" class="link">SignUp</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>