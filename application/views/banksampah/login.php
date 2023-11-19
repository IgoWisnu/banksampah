<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <br>
    <br>
    <div class="container">
    <?php
        if (isset($success)) {
            echo '<div class="alert alert-success">' . $success. '</div>';
        }

        if (isset($error)) {
            echo base_url().'<div class="alert alert-danger">' . $error. '</div>';
        }
    ?>
        <h1>Login</h1>
        <form action="<?=base_url('auth/cekLogin')?>" method="post">
            <table class="table">
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" class="form-control"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" class="form-control"></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" class="btn btn-success">
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>