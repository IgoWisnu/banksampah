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
    height: 1237px; 
    background: #557C55;
  }

  .wrap{
    height: 903px; 
    top: 185px; 
    position: absolute; 
    background: white; 
    border-top-left-radius: 30px; 
    border-top-right-radius: 30px;
  }

  .box{
    height: 120px; 
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

  .cards{
    top: 200px;
    position: relative;
  }

  .t1{
    top: 20px;
    position: relative;
    font-size: 13px;
    font-weight: 400;
  }

  .t2{
    top: 130px;
    position: relative;
    font-weight: 750;
    font-size: 20px;
  }
  
  .LayBtn{
    top: 30px;
    position: relative;
  }

  .btn1{
    color: white;
    background-color: #2868E5;
    border-radius: 30px;
    font-weight: 500;
  }

  .btn2{
    color: white;
    background-color: #01C59E;
    border-radius: 30px;
    font-weight: 500;
  }

  .card{
    text-decoration: none;
  }

  @media screen and (max-width: 300px){

    .username{
      
      font-size: 13px;
    }

    .gacor{
      font-size: 13px;
    }

    .box{
      height: 150px;
    }

    .btn1{
      top: 10px;
      position: relative;
    }

    .btn2{
      top: 10px;
      position: relative;
    }
  }

  @media screen and (min-width: 360px) {
    .box{
      width: 260px;
    }

    .wrap{
      width: 400px;
    }
  }

  </style>

  <body>

    <div class="background">

      <div class="col">
        <div class="row justify-content-center">
          <div class="wrap">

            <div class="t2">Menu</div>
            <?php foreach($artikel as $key): ?>
              <div class="cards row justify-content-center">
                <a href="<?=base_url("artikel/detailArtikel?id={$key['id']}") ?>" class="card col-10 my-2" src="">
                    <?=$key['judul'] ?>
                </a>
              </div>
            <?php endforeach; ?>
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
          
          <div class="t1 row justify-content-center">Tukarkan Sampah Kamu Menjadi Uang</div>
          <div class="LayBtn d-flex justify-content-center">
            <input class="btn1 btn col-6 me-1" type="button" value="Setor" src="">
            <input class="btn2 btn col-6" type="button" value="Tarik" src="">
          </div>
            
        </div>
      </div>
    </div>
  </body>
</html>