<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Sign Up Page</title>
</head>
    <style>
        body {
            overflow-y: auto; 
            background-color: #557C55;
            color: white;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .Container {
            margin-top: auto;
            text-align: center;
        }

        .Signup {
            font-family: Arial;
            font-size: 30px;
            font-weight: 700;
            margin-top: 30px;
            color: white;
        }

        .Signuptext {
            font-family: Arial;
            font-size: 13px;
            font-weight: 600;
            word-wrap: break-word;
            color: white;
        }

        .c_sign-up-frame {
            background: white;
            border-radius: 20px;
            padding: 20px;
            width: 390px;
            text-align: left;
            margin: auto;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="date"] {
            width: calc(100%);
            padding: 10px;
            margin-bottom: 10px;
            margin-left: 10px;
            border-radius: 10px;
            border: 1px solid #333333;
            outline: none;
        }

        .c_sign-up-btn {
            background-color: #557C55;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            margin-top: 20px;
            width: 100%;
        }

        .form-check {
            margin-bottom: 10px;
        }

        .form-check-input {
            margin-right: 10px;
        }

        label {
            color: #557C55;
        }

        .button-container {
            width: 100%;
            display: flex;
            justify-content: center;
            margin-bottom: 10px;
        }

        .c_sign-up-link {
            color: #0066FF;
            font-size: 13px;
            text-decoration: underline;
            font-weight: bold;
            cursor: pointer;
        }

        .punyaakun {
            font-size: 12px;
        }

        .form-check-label {
            font-size: 10px;
        }

        .form-control{
            margin-right: auto;
            border: 2px;
            border-width: 2px;
            border-color: black;
            padding: 11px;
            width: calc(100% - 22px);
        }

        .c_sign-up-frame input[type="text"],
        .c_sign-up-frame input[type="email"],
        .c_sign-up-frame input[type="password"],
        .c_sign-up-frame input[type="date"] {
            width: calc(100% - 22px); 
            padding: 8px; 
            margin-bottom: 10px;
            border: 1px solid #333333;
            border-radius: 8px;
            outline: none;
        }
    </style>
</head>
<body>
    <div class="Container">
        <div class="Signup">Sign Up</div>
        <div class="Signuptext">Silahkan isi data diri untuk menggunakan bank sampah</div>
        <p class="punyaakun">
            Already have an account? <a href="#" class="c_sign-up-link">Login</a>
        </p>

        <div class="c_sign-up-frame">
            <form action="<?=base_url('auth/mail') ?>" method="post">
                <div>
                	<label for="username" style="padding-left: 10px;">Username:</label><br>
                	<input type="text" id="username" class="form-control" name="username" placeholder="Enter your username" style="border-radius: 15px;">
                	<small class="text-danger my-0 py-0"><?= form_error('username') ?></small>
                </div>
                <div>
                	<label for="email" style="padding-left: 10px;">Email:</label><br>
                	<input type="email" id="email" class="form-control" name="email" placeholder="Enter your email address" style="border-radius: 15px;">
                	<small class="text-danger my-0 py-0"><?= form_error('email') ?></small>
                </div>
                <div>
                	<label for="nama_lengkap" style="padding-left: 10px;">Full Name:</label><br>
               	 	<input type="text" id="nama_lengkap" class="form-control" name="nama_lengkap" placeholder="Enter your full name" style="border-radius: 15px;">
                	<small class="text-danger my-0 py-0"><?= form_error('nama_lengkap') ?></small>
                </div>
                <div>
                	<label for="tempat_lahir" style="padding-left: 10px;">Tempat lahir:</label><br>
                	<input type="text" id="tempat_lahir" class="form-control" name="tempat_lahir" placeholder="Enter your place of birth" style="border-radius: 15px;">
                	<small class="text-danger my-0 py-0"><?= form_error('tempat_lahir') ?></small>
                </div>
                <div>
                	<label for="tanggal_lahir" style="padding-left: 10px;">Tanggal lahir:</label><br>
                	<input type="date" id="tanggal_lahir" class="form-control" name="tanggal_lahir" placeholder="Enter your date of birth" style="border-radius: 15px;">
                	<small class="text-danger my-0 py-0"><?= form_error('tanggal_lahir') ?></small>
                </div>
                <div>
                	<label for="alamat" style="padding-left: 10px;">Alamat:</label><br>
                	<input type="text" id="alamat" class="form-control" name="alamat" placeholder="Enter your address" style="border-radius: 15px;">
                	<small class="text-danger my-0 py-0"><?= form_error('alamat') ?></small>
                </div>
                <div>
                	<label for="notelp" style="padding-left: 10px;">No telp:</label><br>
                	<input type="text" id="tanggal_lahir" class="form-control" name="notelp" placeholder="Enter your phone number" style="border-radius: 15px;">
                	<small class="text-danger my-0 py-0"><?= form_error('notelp') ?></small>
                </div>
                <div>
                	<label for="password" style="padding-left: 10px;">Password:</label><br>
                	<input type="password" id="password" class="form-control" name="password" placeholder="Enter your password" style="border-radius: 15px;">
                	<small class="text-danger my-0 py-0"><?= form_error('password') ?></small>
                </div>
                <div>
                	<label for="verify_password" style="padding-left: 10px;">Verify Password:</label><br>
                	<input type="password" id="verify_password" class="form-control" name="verify_password" placeholder="Re-enter your password" style="border-radius: 15px;">
                	<small class="text-danger my-0 py-0"><?= form_error('verify_password') ?></small>
                </div>
                <div class="form-check">
                	<input class="form-check-input" type="checkbox" id="agreementCheck">
                	<label class="form-check-label" for="agreementCheck">
                    Saya menyetujui semua ketentuan yang berlaku
                </label>
                </div>
                <div class="button-container">
                	<button class="c_sign-up-btn" type="submit">Daftar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
