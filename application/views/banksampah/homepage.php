<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
  
<style>
    
    .background{
    height: 1000px; 
    background: #00926E;
}

.topImg{
    width: 100%;
    position: absolute;
}

.wrap{
    height: 800px; 
    top: 255px; 
    position: absolute; 
    background: white; 
    border-top-left-radius: 30px; 
    border-top-right-radius: 30px;
    box-shadow: 0px px 10px rgba(0, 0, 0, 0.25); 
}

.box{
    height: 195px; 
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
    font-size: 30px;
    top: 16px;
    position: relative;
    font-weight: 650;
}

.t1{
    top: 35px;
    position: relative;
    font-size: 85%;
    font-weight: 500;
}

.t2{
    top: 160px;
    position: relative;
    font-weight: 600;
    font-size: 20px;
}

.t3{
    top: 205px;
    position: relative;
    font-weight: 600;
    font-size: 20px;
}

.LayBtn1{
    top: 40px;
    position: relative;
}

.btn1{
    height: 50px;
    color: white;
    background-color: #2868E5;
    border-radius: 30px;
    font-weight: 500;
    font-size: 20px;
}

.btn2{
    height: 50px;
    color: white;
    background-color: #01C59E;
    border-radius: 30px;
    font-weight: 500;
    font-size: 20px;
}

.layBtn3{
    top: 180px;
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
  top: 230px;
  position: relative;
  border-radius: 20px;
  height: 170px;
}

.tBtn{
  font-weight: 300;
}

@media screen and (max-width: 335px) {
  .box{
    height: 180px;
  }
  .btn3{
    height: 150px;
  }
  .LayBtn1{
    top: 60px;
  }
  .username{
  
    font-size: 13px;
  }

  .gacor{
    font-size: 13px;
  }

  .t1{
    font-size: 65%;
  }

}

@media screen and (min-width: 422px) {
    .wrap{
    width: 422px;
    }
}

@media screen and (min-width: 360px) {
    .box{
    width: 305px;
    }
}

@media screen and (max-width: 422px){
  .topImg{
    height: 281px;
    width: 100%;
  }
}
@media screen and (max-width: 300px){
  .LayBtn1{
    top: 50px;
  }
  
}

</style>

  <body>

    <div class="background">
      <div class="col">
        <img class="topImg" src="Waste recycling Vectors & Illustrations for Free Download _ Freepik 1.png" alt="">
      </div>

      <div class="col">
        <div class="row justify-content-center">
          <div class="wrap">

            <div class="t2 ms-5">Menu</div>
            <div class="layBtn3 row justify-content-center">
              <a href="" class="btn3 btn border-0 col-9 mb-3">List Jenis Sampah <br> <div class="tBtn">
                Sampah apa saja yang bisa ditukar?
              </div></a>
              <a href="" class="btn3 btn border-0 col-9">Cara Menggunakan Bank Sampah <br> <div class="tBtn">
                Bagaimana cara penggunaan aplikasi?
              </div></a>
            </div>

            <div class="t3 ms-5">Artikel Terkini</div>
            <div class="layCard row d-flex justify-content-start border-0 ms-5">
              <?php foreach($artikel as $key): ?>
                <a href="<?=base_url("artikel/detailArtikel?id={$key['id']}") ?>" class="c1 card col-3 me-2">
                  <img src="<?=base_url()?>img/email.png" alt="">
                  <p class="text-small"><?=$key['judul'] ?></p>
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
              <div class="username"><?=$username ?></div>
              <div class="gacor"><?=$saldo?></div>
            </div>
          </div>
          
          <div class="t1 row justify-content-center text-center">Tukarkan Sampah Kamu Menjadi Uang</div>
          <div class="LayBtn1 d-flex justify-content-center">
            <input class="btn1 btn col-6 me-1" type="button" value="Setor" src="">
            <input class="btn2 btn col-6" type="button" value="Tarik" src="">
          </div>
            
        </div>
      </div>
    </div>
  </body>
</html>