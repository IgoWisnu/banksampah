<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Jenis Sampah</title>
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

  .t1{
    top: 55px;
    font-size: 30px;
    font-weight: 700;
    position: relative;
  }

  .lCheck{
    top: 40px;
    width: 20%;
    position: relative;
  }

  .date{
    
  }

  .tTotalBayar{
    font-weight: 600;
    font-size: 20px;
  }

  .tDetailTransaksi{
    font-weight: 600;
    margin-top: 1%;
    margin-bottom: 1%;
  }
  
  .c1{
    top: 60px;
    border-top: none;
    border-left: none;
    border-right: none;
    border-radius: 0px;
    position: relative;
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
    transition: opacity 1000ms ease-in-out;
    text-decoration: none;
  }

  .arrow{
    width: 25%;
    top: -1px;
    position: relative;
    
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
  @media screen and (max-width: 300px){
    .LayBtn1{
      top: 50px;
    }
    
  }
  @media screen and (min-width: 700px) {
    .topImg{
        opacity: 0;
    }
    .background{
        background: linear-gradient(white,#00926E,#00926E );
    }
  }
</style>
<body class="background">
    <div class="row justify-content-center">
        <div class="col">
          <img class="topImg" src="<?=base_url()?>img/Waste recycling Vectors & Illustrations for Free Download _ Freepik 1@2x.png" alt="">
        </div>
        <div class="col1">
            <div class="row justify-content-center">
                <div class="wrap">
                    <div class="layBtn">
                        <a class="btn1" type="button" href="<?=base_url()?>home/loadArtikel">
                            <img class="arrow" src="<?=base_url()?>img/aKembali.png" alt="">Kembali
                        </a>
                        <div class="table-responsive">
                          <table class="table mt-4">
                              <?php foreach($sampah->result_array() as $key){ ?>
                              
                              <tr>
                                  <td><?=$key['id'] ?></td>
                                  <td><?=$key['jenis_sampah'] ?></td>
                                  <td><?=$key['kategori_sampah'] ?></td>
                                  <td><?=$key['sub_kategori_sampah'] ?></td>
                                  <td><?=$key['harga_sampah'] ?></td>
                              </tr>
                              <?php } ?>
                          </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>