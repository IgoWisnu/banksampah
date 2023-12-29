<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Banksampah</title>
</head>
  
<style>
    
  body{
    height: 100%;
    background: #00926E;
  }

  .topImg{
    width: 100%;
    position: absolute;
    transition: opacity 1000ms ease-in-out;
  }
    
  .wrap{
    border-top-left-radius: 30px;
    border-top-right-radius: 30px;
    padding-top: 130px;
    padding-bottom: 100px; 
    top: 255px; 
    position: absolute; 
    background: white; 
    box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.25); 
  }

  .box{
    height: 155px; 
    top: 210px; 
    position: absolute; 
    background: white; 
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); 
    border-radius: 20px;
  }

  .username{
    font-size: 20px;
    top: 10px;
    position: relative;
    font-weight: 650;
  }

  .gacor{
    font-size: 20px;
    top: 10px;
    position: relative;
    font-weight: 650;
  }

  .coin{
    top: 10px;
    position: relative;
    margin-right: 5px;
  }

  .t1{
    top: 35px;
    position: relative;
    font-size: 85%;
    font-weight: 300;
  }
  
  .LayBtn1{
    top: 40px;
    position: relative;
  }

  .t2{
    margin-bottom: 10px;
    position: relative;
    font-weight: 600;
    font-size: 20px;
  }

  .t3{ 
    margin-top: 20px;
    margin-bottom: 20px;
    position: relative;
    font-weight: 600;
    font-size: 20px;
  }

  .btn1{
    height: 50px;
    color: white;
    background-color: #2868E5;
    border-radius: 30px;
    font-weight: 500;
    font-size: 20px;
    position: relative;
  }

  .btn2{
    height: 50px;
    color: white;
    background-color: #01C59E;
    border-radius: 30px;
    font-weight: 500;
    font-size: 20px;
    position: relative;
  }

  .imgTarik{
    width: 25%;
  }

  .imgSetor{
    width: 25%;
  }

  .layBtn3{
    position: relative;
  }

  .btn3{
    position: relative;
    height: 100px;
    background-color: #F5FAE9;
    border-radius: 15px;
    text-align: start;
    font-weight: 600;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); 
  }

  .c1{
    margin-bottom: 15px;
    position: relative;
    border-radius: 20px;
    height: 20%;
    text-decoration: none;
  }

  .tBtn{
    font-weight: 300;
  }

  .judul{
    font-weight: bold;
    font-size: 100%;
  }

  .bBar{
    width: 100%;
    height: 5.5%;
    bottom: 0;
    position: fixed;
    border-top-right-radius: 30px; 
    border-top-left-radius: 30px;
    background-color: white;
    box-shadow: 0px -4px 4px rgba(0, 0, 0, 0.25);
    transition: 1s ease;
    align-items: center;
  }

  .history{
    margin-top: 10px;
    width: 50px;
  }

  .home{
    width: 40px;
  }

  .profile{
    width: 40px;
  }
  @media screen and (max-width: 335px) {
    .box{
      height: 180px;
    }
    .btn3{
      height: 150px;
    }
    .LayBtn1{
      top: 50px;
    }
    .username{
    
      font-size: 13px;
    }
    .gacor{
      font-size: 13px;
    }

  }

  @media screen and (min-width: 422px) {
    .wrap{
      width: 422px;
      transition: all 1s ease;
    } 
    .panel{
      width: 422px
    }  
    .bBar{
      width: 422px;
    }
  }

  @media screen and (min-width: 360px) {
    .box{
      width: 305px;
    }
  }

  @media screen and (max-width: 300px){
    .LayBtn1{
      top: 50px;
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
      transition: 1s ease;
    }
    .bBar{
      position: fixed;
      border-bottom-right-radius: 30px; 
      border-bottom-left-radius: 30px;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      background-color: transparent;
      display: flex;
      align-items: center;
      box-shadow: none;
      bottom: 95%;
      transition: all 1s ease;
    }
    .bBar.ilang {
      background-color: white;
      box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
      transition: all 0.5s ease;
    }
    .wrap{
      border-bottom-right-radius: 30px; 
      border-bottom-left-radius: 30px;
      transition: 1s ease;
    }
  }

</style>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    var bBar = document.querySelector(".bBar");

    function updateTransparency() {
      var scrollPosition = window.scrollY;

      if (scrollPosition > 200) {
        bBar.classList.add("ilang");
      } else {
        bBar.classList.remove("ilang");
      }
    }

    window.addEventListener("scroll", updateTransparency);
  });
</script>
<body>
  <div class="background">
    <div class="col">
      <img class="topImg" src="<?=base_url()?>img/Waste recycling Vectors & Illustrations for Free Download _ Freepik 1@2x.png" alt="">
    </div>
    <div class="col">
      <div class="row justify-content-center">
        <div class="wrap">
          <div class="t2 ms-5">Menu</div>
          <div class="layBtn3 row justify-content-center">
            <a href="<?=base_url()?>jenissampah" class="btn3 btn border-0 col-9 mb-3">List Jenis Sampah <br> <div class="tBtn">
              Sampah apa saja yang bisa ditukar?
            </div></a>
            <a href="" class="btn3 btn border-0 col-9">Cara Menggunakan Bank Sampah <br> <div class="tBtn">
              Bagaimana cara penggunaan aplikasi?
            </div></a>
          </div>

          <div class="t3 ms-5">Artikel Terkini</div>
          <div class="layCard row justify-content-center border-0">
            <?php foreach($artikel as $key): ?>
              <a href="<?=base_url("artikel/detailArtikel?id={$key['id']}")?>" class="c1 col-10">
                <div class="card shadow">
                  <img src="<?=base_url()?>img/<?=$key['gambar'] ?>" class="card-img-top" alt="img">
                  <div class="card-body">
                    <p class="judul" ><?=$key['judul'] ?></p>
                  </div>
                </div>
              </a>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
    
    <div class="row justify-content-center">
      <div class="box col-9">
        <div class="row">
          <div class="LayText d-flex justify-content-between">
            <div class="username ms-2"><?=$username?></div>
            <div class="layCoin d-flex justify-content-between">
              <img class="coin" src="<?=base_url()?>img/coin.png" alt="">
              <div class="gacor me-2"><?=$saldo?></div>
            </div>
          </div>
        </div>
    
        <div class="t1 row justify-content-center text-center">Tukarkan Sampah Kamu Menjadi Uang</div>
        <div class="LayBtn1 d-flex justify-content-center">
          <a class="btn1 btn ms-2 me-1" type="button">Setor
            <img class="imgSetor" src="<?=base_url()?>img/Setor.png" alt="">
          </a>
          <a class="btn2 btn me-2">Tarik
            <img class="imgTarik" src="<?=base_url()?>img/Tarik.png" alt="">
          </a>
        </div>
      </div>
    </div>
    <?php include('menu.php'); ?>
  </div>
</body>
</html>