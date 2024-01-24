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
    min-height: 100%; 
    background: #00926E;
  }

  .topImg{
    width: 100%;
    position: absolute;
    transition: opacity 1000ms ease-in-out;
  }
  
  .wrap{
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

  .img-profile{
    object-fit: cover;
    width: 90px;
    height: 90px;
  }
  
  .layform{
    margin-top: 50px;
  }

  .form-control{

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
    .background{
      height: 100%;
      background: rgb(0,146,110);
      background: linear-gradient(0deg, rgba(0,146,110,1) 0%, rgba(0,146,110,1) 20%, rgba(0,146,110,1) 36%, rgba(29,157,131,1) 52%, rgba(75,176,164,1) 78%, rgba(147,205,217,1) 100%);
      background-attachment: fixed;
    }
    .wrap{
      margin-top: 105px;
      border-bottom-left-radius: 30px ;
      border-bottom-right-radius: 30px ;
    }
    .gap{
      margin-top: 10% ;
    }
  }
</style>
</style>
<body class="background">
  <div class="row justify-content-center">
    <div class="col">
      <img class="topImg" src="<?=base_url()?>img/Waste recycling Vectors & Illustrations for Free Download _ Freepik 1@2x.png" alt="">
    </div>
    <div class="col1">
      <div class="row justify-content-center">
      <?php include('logo.php') ?>
        <div class="wrap">
          <div class="layBtn">
            <a class="btn1" type="button" href="<?=base_url()?>profile">
              <img class="arrow" src="<?=base_url()?>img/aKembali.png" alt="">Kembali
            </a>
            <?php echo form_open_multipart('profile/updateProfile');?>
            <?php foreach($user->result_array() as $key){ ?>
              <div class="layform">
                <div class="layimg mb-3">
                  <a  class="">
                    <img id="blah" src="#" alt="" class="img-profile blah">
                  </a>
                  <!-- old img -->
                  <input type="hidden" name="oldimg" value="<?=$key['profile']?>">
                  <!-- new img -->
                  <input type="file" name="userfile" size="5000" onchange="readURL(this);">
                </div>
                <div class="mb-3">
                  <input type="hidden" class="form-control" id="usrename" name="id_user" value="<?=$key['id_user']?>">
                </div>
                <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" class="form-control" id="usrename" name="username" value="<?=$key['username']?>" disabled>
                </div>
                <div class="mb-3">
                  <label for="username" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control" name="nama_lengkap" value="<?=$key['nama_lengkap']?>">
                </div>
                <div class="mb-3">
                  <label for="username" class="form-label">Tempat Lahir</label>
                  <input type="text" class="form-control" name="tempat_lahir" value="<?=$key['tempat_lahir']?>">
                </div>
                <div class="mb-3">
                  <label for="username" class="form-label">Tanggal Lahir</label>
                  <input type="date" class="form-control" name="tanggal_lahir" value="<?=$key['tanggal_lahir']?>">
                </div>
                <div class="mb-3">
                  <label for="username" class="form-label">Alamat</label>
                  <input type="text" class="form-control" name="alamat" value="<?=$key['alamat']?>">
                </div>
                <div class="mb-3">
                  <label for="username" class="form-label">Email</label>
                  <input type="text" class="form-control" name="email" value="<?=$key['email']?>" disabled>
                </div>
                <div class="">
                  <input type="submit" class="btn btn-success">
                </div>
              </div>
            <?php  } ?>
          </div>
        </div>
        <div class="gap"></div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
</body>
</html>