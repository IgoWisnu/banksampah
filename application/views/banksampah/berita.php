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
    height: 1100px; 
    background: #00926E;
  }

  .topImg{
    width: 100%;
    position: absolute;
    transition: opacity 1000ms ease-in-out;
  }

  .wrap{
    height: 800px; 
    top: 255px; 
    position: absolute; 
    background: white; 
    border-top-left-radius: 30px; 
    border-top-right-radius: 30px;
    box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.25); 
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

  .tJudul{
    font-size: 150%;
    font-weight: 600;
  }

  .arrow{
    width: 25%;
    top: -1px;
    position: relative;
    
  }

  .gambar{
    border-radius: 7%;
    position: relative;
  }

  .deskripsi{
    font-size: 20px;
    font-weight: 400;
  }

  @media screen and (min-width: 422px) {
    .wrap{
      width: 422px;
    }
  }


  @media screen and (max-width: 422px){
    .topImg{
      height: 281px;
      width: 100%;
    }
  }
  
  @media screen and (min-width: 700px) {
    .topImg{
        opacity: 0;
    }
    .background{
      background: rgb(0,146,110);
      background: linear-gradient(0deg, rgba(0,146,110,1) 0%, rgba(0,146,110,1) 20%, rgba(0,146,110,1) 36%, rgba(29,157,131,1) 52%, rgba(75,176,164,1) 78%, rgba(147,205,217,1) 100%);
    }
  }

</style>

  <body>

    <div class="background">
      <div class="col">
        <img class="topImg" src="<?=base_url()?>img/Waste_recycling_Vectors___Illustrations_for_Free_Download___Freepik_1-svaecW6Z_-transformed.png" alt="">
      </div>

      <div class="col">
        <div class="row justify-content-center">
          <div class="wrap">

            <div class="layBtn">
                <a class="btn1" type="button" href="">
                  <img class="arrow" src="<?=base_url()?>img/aKembali.png" alt="">Kembali
                </a>
            </div>

            <div class="row justify-content-center mt-5 mb-3">
              <div class="tJudul">
                <?=$artikel['judul']?>
              </div>
            </div>

            <div class=" row justify-content-center">
              <img class="gambar" src="<?=base_url()?>img/<?=$artikel['gambar'] ?>" alt="">
            </div>
            
            <div class="row justify-content-center mt-2">
              <div class="deskripsi">
                <?=$artikel['deskripsi'] ?>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </body>
</html>