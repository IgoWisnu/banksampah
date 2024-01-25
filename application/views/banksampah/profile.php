<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">    <title>Document</title>
</head>
  
<style>
    body{
        min-height: 50%; 
        background: #00926E;
    }

    .layImg{
        display: flex;
        justify-content: center;
    }

    .topImg{
        width: 430px;
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

    .box{
        margin-top: 30px;
        position: relative;
        border-radius: 30px;
        background-color: #CDEAE6;
        box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.25); 
    }

    .box2{
        overflow: hidden;
        border-radius: 30px;
        position: relative;
        height: 150px;
        background-color: #3EA195;
        background-attachment: fixed;
        box-shadow: 0px 3px 3px rgba(0, 0, 0, 0.25); 
    }

    .laybox{
        margin-right: 20px;
        margin-left: 20px;
        justify-content: center;
    }

    .layUsernameEmail{
        padding-top: 30px;
        padding-left: 120px;
    }

    .username{
        word-wrap:break-word;
        font-size: 20px;
        font-weight: 700;
    }

    .email{
        font-size: 100%;
        word-wrap: break-word;
        color: #727272;
        font-weight: 500;
    }

    .img{
        border: 5px  solid;
        top: 30px;
        margin-left: 20px;
        position: absolute;
        border-radius: 15px;
        object-fit: cover;
        width: 90px;
        height: 90px;
        box-shadow: 0px 3px 3px rgba(0, 0, 0, 0.25);
    }

    .wLogo{
        top: 20px;
        position: relative;
        object-fit: cover;
        opacity: 20%;
        width: 254px;
    }

    .tdetail{
        font-size: 20px;
        color: white;
        font-weight: 700;
        margin-top: 15px;
        margin-right: 30px;
    }

    .layout2{
        bottom: 35px;
        position: absolute;
        font-size: 20px;
    }

    .tId,.tSaldo{
        color: white;
        font-weight: 625;
    }

    .editProfile,.gantiPassword,.kontak,.logout{
        border-bottom: 2px solid silver;
        margin-left: 20px;
        margin-top: 10px;
        margin-right: 20px;
    }

    .editImg,.passImg,.kontakImg,.logoutImg{
        top: 9px;
        position: relative;
        margin-bottom: 20px;
        margin-right: 10px;
        width: 10%;
    }

    .btns{
        font-weight: 500;
        padding: 2%;
        width: 110px;
        margin-top: 12px;
        position: relative;
        background: #00926E;
        border-radius: 30px;
        color: white ;
        box-shadow: 0px 3px 3px rgba(0, 0, 0, 0.25);
    }
    
    .arrow{
        width: 25%;
        top: -1px;
        position: relative;
    }

    .link{
        color: black;
        text-decoration: none;
    }

    .linklogout{
        color: red;
        text-decoration: none; 
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
        body{
            height: 100%;
            background: rgb(0,146,110);
            background: linear-gradient(0deg, rgba(0,146,110,1) 0%, rgba(0,146,110,1) 20%, rgba(0,146,110,1) 36%, rgba(29,157,131,1) 52%, rgba(75,176,164,1) 78%, rgba(147,205,217,1) 100%);
            background-attachment: fixed;
        }
        .wrap{
            border-bottom-right-radius: 30px; 
            border-bottom-left-radius: 30px;
            margin-top: 105px;
            transition: all 1s ease;
        }
        .gap{
            margin-top: 10% ;
        }
    }
</style>
<body>
    <div class="layImg">
        <img class="topImg" src="<?=base_url()?>img/Waste recycling Vectors & Illustrations for Free Download _ Freepik 1@2x.png" alt="">
    </div>
    <div class="row justify-content-center">
        <?php include('logo.php') ?>
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
            <?php if($this->session->userdata('role') == 'admin'): ?>
                <a href="home/loadArtikel">
                    <div class="btns">
                        <img src="<?=base_url()?>img/aKembali.png" alt="" class="arrow">Kembali
                    </div>
                </a>
            <?php else: ?>
                <a href="home/loadArtikel">
                    <div class="btns">
                        <img src="<?=base_url()?>img/aKembali.png" alt="" class="arrow">Kembali
                    </div>
                </a>
            <?php endif; ?>

            <div class="laybox">
                <div class="box">
                    <div class="layout">
                        <div class="layUsernameEmail">
                            <?php foreach($profile->result_arraY() as $key){ ?>
                            <div class="username">
                                <?=$key['username'] ?>
                            </div>
                            <div class="email">
                                <?=$key['email'] ?>
                            </div>
                        </div>
                    </div>

                    <div class="box2"> 
                        <div class="row justify-content-center">
                            <div class="laywLogo row justify-content-center">
                                <img src="<?=base_url()?>img/logo white.png" alt="" class="wLogo">
                            </div>
                            <div class="tdetail row justify-content-end">
                                Detail Tabungan
                            </div>
                            <div class="layout2 row">
                                <div class="tId d-flex justify-content-between">ID Tabungan
                                    <div class="id"><?=$key['id_tabungan']?></div>
                                </div>
                                <div class="tSaldo d-flex justify-content-between">Saldo
                                    <div class="saldo"><?=$key['saldo'] ?></div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="layImg">
                        <img src="<?=base_url()?>uploads/profile/<?=$key['profile']?>" alt="" class="img">
                    </div>
                </div>    
            </div>

            <div class="editProfile">
                <a href="<?=base_url()?>profile/editprofile?id=<?=$key['id_user']?>" class="link"><img src="<?=base_url()?>img/mode_edit_24px.png" alt="" class="editImg">Edit Profile</a>
            </div>
            <div class="gantiPassword">
                <a href="" class="link"><img src="<?=base_url()?>img/lock.png" alt="" class="passImg">Ganti Password</a>
            </div>
            <div class="kontak">
                <a href="" class="link"><img src="<?=base_url()?>img/phone.png" alt="" class="kontakImg">Kontak kami</a>
            </div>
            <div class="logout">
                <div type="button" onclick="logoutModal()" class="linklogout"><img src="<?=base_url()?>img/Mask group.png" alt="" class="logoutImg">Keluar</div>
            </div>
            </div>
        </div>
        <div class="gap"></div>
        <?php include('menu.php'); ?>
    </div>

    <!-- Logout Modal -->
    <div
        class="modal fade"
        id="logoutModal"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Logout Dashboard Admin</h1>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah anda yakin ingin logout?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button
                        type="button"
                        class="btn btn-danger"
                        id="logout"
                        onclick="logout()">Logout</button>
                </div>
            </div>
        </div>
    </div>

    <script>
         // Function to handle the confirmed deletion
         function logout() {
            console.log('action :');
            // Call your controller method to delete the item
            window.location.href = "<?php echo site_url('auth/logout'); ?>"
        };
                
        function logoutModal() {
            $('#logoutModal').modal('show');
            console.log('confirm : ');
            // Set the 'id' data to the confirm button
        };
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</body>
</html>