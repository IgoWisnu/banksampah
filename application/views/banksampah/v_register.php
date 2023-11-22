<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Sign Up Page</title>
    <style>
        body {
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
            width: 300px;
            text-align: left;
            margin: auto;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="date"] {
            width: calc(100% - 10px);
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .c_sign-up-btn {
            background-color: #557C55;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
        }

        .form-check {
            margin-bottom: 10px;
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
                    <label for="username">Username:</label><br>
                    <input type="text" id="username" name="username">
                    <small class="text-danger my-0 py-0"><?= form_error('username') ?></small>
                </div>
                <div>
                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email">
                    <small class="text-danger my-0 py-0"><?= form_error('email') ?></small>
                </div>
                <div>
                    <label for="nama_lengkap">Full Name:</label><br>
                    <input type="text" id="nama_lengkap" name="nama_lengkap">
                    <small class="text-danger my-0 py-0"><?= form_error('nama_lengkap') ?></small>
                </div>
                <div>
                    <label for="tempat_lahir">Tempat lahir:</label><br>
                    <input type="text" id="tempat_lahir" name="tempat_lahir">
                    <small class="text-danger my-0 py-0"><?= form_error('tempat_lahir') ?></small>
                </div>
                <div>
                    <label for="tanggal_lahir">Tanggal lahir:</label><br>
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir">
                    <small class="text-danger my-0 py-0"><?= form_error('tanggal_lahir') ?></small>
                </div>
                <div>
                    <label for="alamat">Alamat:</label><br>
                    <input type="text" id="alamat" name="alamat">
                    <small class="text-danger my-0 py-0"><?= form_error('alamat') ?></small>
                </div>
                <div>
                    <label for="notelp">No telp:</label><br>
                    <input type="text" id="tanggal_lahir" name="notelp">
                    <small class="text-danger my-0 py-0"><?= form_error('notelp') ?></small>
                </div>
                <div>
                    <label for="password">Password:</label><br>
                    <input type="password" id="password" name="password">
                    <small class="text-danger my-0 py-0"><?= form_error('password') ?></small>
                </div>
                <div>
                    <label for="verify_password">Verify Password:</label><br>
                    <input type="password" id="verify_password" name="verify_password">
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