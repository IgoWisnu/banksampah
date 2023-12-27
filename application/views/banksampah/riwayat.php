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
  height: 100%; 
  background: #00926E;
}

.topImg{
  width: 100%;
  position: absolute;
  transition: opacity 1000ms ease-in-out;
}

.wrap{
  padding-bottom: 15%;
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
  width: 40px;
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

@media screen and (min-width: 422px) {
    .wrap{
    width: 422px;
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
    height: 100%;
    background: rgb(0,146,110);
    background: linear-gradient(0deg, rgba(0,146,110,1) 0%, rgba(0,146,110,1) 20%, rgba(0,146,110,1) 36%, rgba(29,157,131,1) 52%, rgba(75,176,164,1) 78%, rgba(147,205,217,1) 100%);
    background-attachment: fixed;
  }
  .bBar{
    position: fixed;
    border-bottom-right-radius: 30px; 
    border-bottom-left-radius: 30px;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    background-color: transparent;
    box-shadow: none;
    bottom: 95%;
    transition: all 1s ease;
  }
  .bBar.ilang {
    background-color: white;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    transition: all 0.5s ease;
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
        <div class="layBtn">
          <a class="btn" type="button" href="<?=base_url()?>home/loadArtikel">
            <img class="arrow" src="<?=base_url()?>img/aKembali.png" alt="">Kembali
          </a>
        </div>
        <div class="t1 row justify-content-center">Riwayat Transaksi</div>
        <br>

        <div class="row justify-content-center mt-5">
          <div class="row justify-content-center mt-5">
              <?php foreach($riwayat->result_array() as $key){ ?>
                <?php 
                  if($key['kredit'] == 0){
                    $img = base_url()."img/gSetor.png";
                    $nominal = '+'.$key['debit'];
                  } else{
                    $img = base_url()."img/gTarik.png";
                    $nominal = '-'.$key['kredit'];
                  }
                ?>
                <div class="row justify-content-center">
                  <a href="<?=base_url()?>riwayat/invoice?id=<?=$key['id_tabungan_transaksi'] ?>" class="laycard2 card col-10" type="button">

                    <div class="d-flex justify-content-between">
                      <div class="d-flex align-items-center">
                        <img class="arrow2" src=<?=$img?> alt="">
                        <div class="date"><?=$key['tgl_tabungan_transaksi'] ?></div>
                      </div>
                      <div class="layText1">
                        <div class="nominal"><?=$nominal ?></div>
                        <div class="keterangan">Cash Bank Sampah PNB</div>
                      </div>
                    </div>
                  </a>
                </div>

              <?php } ?>
            </a>
          </div>
        </div>
        <div class="row justify-content-end">
          <a class="btn1 btn me-4" href="" type="button">Hapus Transaksi</a>
        </div>
      </div>
    </div>
  </div>
  <?php include('menu.php') ?>
</div>
</body>
</html>
