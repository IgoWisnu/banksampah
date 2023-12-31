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
        width: 370px;
        height: 700px;
        background: white;
        border-radius: 30px; 
    }

    .img1{
        top: 120px;
        position: relative;
    }

    .resend{
        top: 400px;
        position: relative;
    }

    .t1{
        top: 180px; 
        text-align: center;
        position: relative;
        color: #557C55; 
        font-size: 55px; 
        font-weight: 700; 
        word-wrap: break-word;
    }

    .t2{
        top: 170px;
        color: #557C55;
        text-align: center;
        position: relative;
        font-size: 20px; 
        font-weight: 600; 
        word-wrap: break-word;
    }
   
    .link{
        text-decoration: none;
    }

</style>

<body>
    <div class="Container col">
        <div class="row t1 justify-content-center">
            <div class="Verifikasi">
                Verifikasi
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="Panel">                    
                <div class="img1 row justify-content-center">
                    <img class="w-50 bg-dark" src="<?=base_url()?>img/email.png" alt="">
                </div>
                <div class="row justify-content-center">
                    <div class="t2 w-75 mt-3">
                        <?=$verif ?>
                    </div>
                </div>
                
                <div class="resend row justify-content-center">
                    Belum mendapat link verifikasi?<a href="" class="link row justify-content-center">Re-Send</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>