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

.t1{
    top: 55px;
    font-size: 30px;
    font-weight: 700;
    position: relative;
}

.btn{
  font-weight: 500;
  padding: 2%;
  width: 110px;
  top: 12px;
  position: relative;
  background: #00926E;
  border-radius: 30px;
  color: white ;
}

.btn1{
  margin-top: 5%;
  font-weight: 500;
  padding: 2%;
  width: 150px;
  position: relative;
  background: #FA4242;
  border-radius: 30px;
  color: white ;
}

.laycard{
  margin-top: 25%;
  border-radius: 0px;
  border-left: 0px;
  border-right: 0px;
  position: relative;
  text-decoration: none;
}

.laycard2{
  border-radius: 0px;
  border-left: 0px;
  border-right: 0px;
  position: relative;
  text-decoration: none;
}

.arrow{
  width: 25%;
  top: -1px;
  position: relative;
  
}

.arrow2{
  width: 50px;
  background-color: #01C59E;
  position: relative;
  margin-left: -20px;
  margin-top: 10%;
  margin-bottom: 10%;
  border-radius: 30px;
}

.arrow3{
  width: 50px;
  background-color: #2868E5;
  position: relative;
  border-radius: 30px;
  margin-left: -20px;
  margin-top: 10%;
  margin-bottom: 10%;
}

.date{
  position: relative;
  font-size: 12px;
  margin-left: 10px;
  font-weight: 450;
}

.nominal{
  font-size: 15px;
  font-weight: 700;
}

.keterangan{
  position: relative;
  font-size: 12px;
}

.nominal2{
  font-size: 15px;
  font-weight: 700;
}

.keterangan2{
  position: relative;
  font-size: 12px;
}

.layText1{
  text-align: end;
  position: relative;
}

.layText2{
  text-align: end;
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

  <body>

    <div class="background">
        <div class="col">
            <img class="topImg" src="<?=base_url()?>img/Waste recycling Vectors & Illustrations for Free Download _ Freepik 1@2x.png" alt="">
        </div>

        <div class="col">
            <div class="row justify-content-center">
                <div class="wrap">
                  <div class="layBtn">
                    <a class="btn" type="button" href="">
                      <img class="arrow" src="<?=base_url()?>img/aKembali.png" alt="">Kembali
                    </a>
                  </div>
                  <div class="t1 row justify-content-center">Riwayat Transaksi</div>
                  


                  <div class="row justify-content-center">
                    <a href="" class="laycard card col-10" type="button">

                      <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                          <img class="arrow2" src="<?=base_url()?>img/aTarik.png" alt="">
                          <div class="date">21 Nov 2023</div>
                        </div>
                        <div class="layText1">
                          <div class="nominal">-Rp.10.000</div>
                          <div class="keterangan">Cash Bank Sampah PNB</div>
                        </div>
                      </div>


                    </a>
                  </div>

                  <div class="row justify-content-center">
                    <a href="" class="laycard2 card col-10" type="button">

                      <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                          <img class="arrow3" src="<?=base_url()?>img/aSetor.png" alt="">
                          <div class="date">21 Nov 2023</div>
                        </div>
                        <div class="layText2">
                          <div class="nominal2">+Rp.100.000</div>
                          <div class="keterangan2">Kertas <br> Kulkas <br> Beton</div>
                        </div>
                      </div>
                      
                      
                    </a>
                  </div>

                  <div class="row justify-content-end">
                    <a class="btn1 btn me-4" href="" type="button">Hapus Transaksi</a>
                  </div>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>