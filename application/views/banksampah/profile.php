<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Profile</title>
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

  .card{
    background: #00926E;
  }

  .profile{
    width: 50px;
    height: 50px;
    
  }

  .img-profile{
    width: 50px;
    height: 50px;
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
            <?php 
                $success = $this->session->flashdata('success');
                $failed = $this->session->flashdata('failed');

                if($success){
                  echo '<div class="alert alert-success" role="alert">'.$success.'</div>';
                } elseif($failed){
                  echo '<div class="alert alert-danger" role="alert">'.$failed.'</div>';
                }
            ?>
            <div class="layBtn">
              <a class="btn1" type="button" href="<?=base_url()?>home/loadArtikel">
                <img class="arrow" src="<?=base_url()?>img/aKembali.png" alt="">Kembali
              </a>
              <br>
              <br>
              <div class="row justify-content-center">
                <?php foreach($profile->result_arraY() as $key){ ?>
                <div class="card rounded shadow col-10 justify-content-between">
                  <p class="mt-2"><?=$key['username'] ?></p>
                  <div class="bg-dark profile rounded">
                      <img src="<?=base_url()?>uploads/profile/<?=$key['profile']?>" alt="" class="img-profile img-fluid rounded">
                  </div>
                </div>
                <div class="card rounded shadow col-10 mt-2">
                  <p class="mt-2">Detail Tabungan</p>
                  <p><?=$key['id_tabungan'] ?></p>
                  <p><?=$key['saldo'] ?></p>
                  <p>Dibuka pada <?=$key['tgl_buka_rekening']?></p>
                </div>
                <?php } ?>
                <div class="table-responsive">
                  <table class="table mt-4">
                    <tr>
                      <td>
                        <a href="<?=base_url()?>profile/editprofile?id=<?=$key['id_user']?>" class="">
                          Edit Profile
                        </a>
                      </td>
                      </tr>
                      <tr>
                        <td>
                            <a href="">Ganti Password</a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <a href="<?=base_url()?>auth/logout">Logout</a>
                        </td>
                    </tr>
                  </table>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>