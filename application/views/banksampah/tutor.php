<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
  
<style> 
  body{
    min-height: 50%; 
    background: #00926E;
  }

  .layImg{
    display: flex;
    justify-content: center;
  }

  .topImg{
    width: 430px;
    position: absolute;
    transition: opacity 1000ms ease-in-out;
  }

  .wrap{
    padding-right: 40px;
    min-height: 650px;
    margin-top: 255px;
    padding-bottom: 70px;
    position: absolute; 
    background: white; 
    border-top-left-radius: 30px; 
    border-top-right-radius: 30px;
    box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.25); 
    transition: all 1s ease;
  }

  .btn1{
    font-weight: 500;
    padding: 2%;
    width: 110px;
    top: 12px;
    position: relative;
    background: #00926E;
    border-radius: 30px;
    color: white ;
    text-decoration: none;
  }

  .arrow{
    width: 25%;
    top: -1px;
    position: relative;
    
  }

  .laytext{
    margin-left: 20px;
    margin-top: 50px;
    padding-bottom: 50px;
  }
  
  .t{
    margin-top: 30px;
    margin-left: -20px;
    font-size: 20px;
    font-weight: 700;
  }

  .isi{
    margin-left: -10px;
    font-weight: 450;
    font-size: 80%;
  }

  .isi3{
    margin-left: 35px;
    font-weight: 450;
    font-size: 80%;
  }

  @media screen and (min-width: 422px) {
    .wrap{
      width: 422px;
    }
  }
  @media screen and (min-width: 700px) {
  .topImg{
    opacity: 0;
  }
  body{
    background: rgb(0,146,110);
    background: linear-gradient(0deg, rgba(0,146,110,1) 0%, rgba(0,146,110,1) 20%, rgba(0,146,110,1) 36%, rgba(29,157,131,1) 52%, rgba(75,176,164,1) 78%, rgba(147,205,217,1) 100%);
    background-attachment: fixed;
  }
  .wrap{
    border-bottom-right-radius: 30px; 
    border-bottom-left-radius: 30px;
    margin-top: 105px;
    transition: all 1s ease;
  }
  .gap{
    margin-top: 10% ;
  }
}

</style>
  <body class="background">
    <div class="layImg">
      <img class="topImg" src="<?=base_url()?>img/Waste recycling Vectors & Illustrations for Free Download _ Freepik 1@2x.png" alt="">
    </div>

    <div class="row justify-content-center">
      <?php include('logo.php') ?>
      <div class="wrap">

        <div class="layBtn">
          <a class="btn1" type="button" href="">
            <img class="arrow" src="<?=base_url()?>img/aKembali.png" alt="">Kembali
          </a>
        </div>

        <div class="laytext">
          <ol class="t">
            1. Register
            <ol class="isi">
              Daftarkan akun untuk mulai menggunakan aplikasi Bank Sampah. 
            </ol>
          </ol>
  
          <ol class="t">
            2. Login
            <ol class="isi">
              Masuk ke akun yang sudah ada atau yang telah dibuat sebelumnya.
            </ol>
          </ol>
  
          <ol class="t">
            3. Setor Sampah
            <li class="isi3">
              Setorkan sampah pada staff banksampah pada lokasi
            </li>
            <li class="isi3">
              Admin akan menghitung jumlah sampah yang kamu berikan.Tunjukan username/ id/ email kamu kepada staff banksampah
            </li>
            <li class="isi3">
              Pastikan saldo sudah bertambah
            </li>
          </ol>
  
          <ol class="t">
            4. Kumpulkan Poin
            <ol class="isi">
              Kumpulkan sampah, hasilkan poin, dan tukarkan menjadi uang.
            </ol>
          </ol>
        </div>

      </div>
    </div>
  </body>
</html>