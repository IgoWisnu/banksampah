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
    background: #557C55;
}

.wrap{
    height: 800px; 
    top: 185px; 
    position: absolute; 
    background: white; 
    border-top-left-radius: 30px; 
    border-top-right-radius: 30px;
}

.box{
    height: 180px; 
    top: 140px; 
    position: absolute; 
    background: white; 
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); 
    border-radius: 20px;
}

.username{
    top: 10px;
    position: relative;
    font-weight: 700;
}

.gacor{
    top: 10px;
    position: relative;
    font-weight: 1000;
}

.t1{
    top: 50px;
    position: relative;
    font-size: 80%;
    font-weight: 500;
}

.t2{
    top: 160px;
    position: relative;
    font-weight: 750;
    font-size: 20px;
}

.t3{
    top: 205px;
    position: relative;
    font-weight: 750;
    font-size: 20px;
}

.LayBtn1{
    top: 70px;
    position: relative;
}

.btn1{
    height: 50px;
    color: white;
    background-color: #2868E5;
    border-radius: 30px;
    font-weight: 500;
}



.btn2{
    height: 50px;
    color: white;
    background-color: #01C59E;
    border-radius: 30px;
    font-weight: 500;
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
    font-weight: 700;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); 
}

.c1{
    top: 230px;
    position: relative;
    border-radius: 20px;
    height: 100px;
}

@media screen and (max-width: 315px){
    .box{
    height: 190px;
    }

}

@media screen and (max-width: 300px) {
    .username{
    
    font-size: 13px;
    }

    .gacor{
    font-size: 13px;
    }
    
}

@media screen and (min-width: 500px) {
    .wrap{
    width: 500px;
    }
}

@media screen and (min-width: 360px) {
    .box{
    width: 260px;
    }
}

@media screen and (max-width: 490) {
    .t2{
        
    }
    .t3{
        
    }
}

</style>

  <body>

    <div class="background">

      <div class="col">
        <div class="row justify-content-center">
          <div class="wrap">
            <div class="t2 ms-5">Menu</div>
            <div class="layBtn3 row justify-content-center">
              <?php foreach($artikel as $key): ?>
                <a href="<?=base_url("artikel/detailArtikel?id={$key['id']}") ?>" class="btn3 btn col-9 mb-4 text-center">
                  <?=$key['judul'] ?>
                </a>
              <?php endforeach; ?>
            </div>

            <div class="t3 ms-5">Berita Terkini</div>
            <div class="layCard row d-flex justify-content-center border-0">
                <a href="" type="submit" class="c1 card col-3 me-2"></a>
                <a href="" type="submit" class="c1 card col-3 me-2"></a>
                <a href="" type="submit" class="c1 card col-3 me-2"></a>
            </div>
          </div>
        </div>
      </div>
      
      <div class="row justify-content-center">
        <div class="box col-9">

          <div class="row">
            <div class="LayText d-flex justify-content-between">
              <div class="username">Username</div>
              <div class="gacor">Rp100.000</div>
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