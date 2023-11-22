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
        height: 1000px;
    }

    .Panel{
        width: 340px;
        height: 550px; 
        background: white;
        border-top-left-radius: 30px; 
        border-top-right-radius: 30px;
        border-bottom-left-radius: 30px;
        border-bottom-right-radius: 30px;
    }

    .SelamatDatangKembali{
        top: 30px; 
        text-align: center;
        position: relative;
        color: white; 
        font-size: 40px; 
        font-weight: 700; 
        word-wrap: break-word;
    }

    .SilahkanMasukanUsernameDanPasswordKamu{
        top: 80px;
        margin-bottom: 100px;
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
        top: 70px; 
        position: relative; 
        color: #333333; 
        font-size: 14px; 
        font-weight: 600; 
    }

    .Password{
        top: 100px; 
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
    }
    
    .btn{
        border-radius: 5mm;
        top: 180px;
        position: relative;
        background-color: #557C55;
    }

    .btn:hover{
        background-color: #557C55;
    }

    .tbLogin{
        color: white;
        font-weight: 700;
        font-size: 5mm;
    }

    .BelumPunyaAkunSignup{
        top: 210px; 
        position: relative; 
        text-align: center;
    }

    .link{
        text-decoration: none;
    }
  </style>

  <body>
        <?php

        ?>
            <div class="Container col justify-content-center">
                
                <div class="row justify-content-center">
                    <div class="SelamatDatangKembali">
                        Selamat Datang <br> Kembali
                    </div>
                    <div class="SilahkanMasukanUsernameDanPasswordKamu w-75">
                        Silahkan Masukkan Username <br> dan Password Kamu!
                    </div>
                </div>

            <form action="<?=base_url('auth/cekLogin') ?>" method="post">
                <div class="row justify-content-center">
                    <div class="Panel">
                        <div class="tLogin">Login</div>
        
                        <div class="row justify-content-center">
                            <div class="Username w-75">Username
                                <input type="text" class="form-control" name="username">
                            </div>
                        </div>
                    
                        <div class="row justify-content-center">
                            <div class="Password w-75">Password
                                <input type="password" class="form-control" name="password">
                            </div>
                        </div>
        
                        <div class="row justify-content-center">
                            <div class="">
                                <input type="submit" class="tbLogin btn w-50 " name=""></input>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="BelumPunyaAkunSignup">
                                <div>Belum Punya Akun?</div>
                                <a href="auth/goRegister" class="link">SignUp</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            </div>
  </body>
</html>