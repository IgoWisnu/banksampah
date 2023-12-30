<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laporan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2 class="text-center">Data Transaksi Banksampah</h2>
        <form method="post" action="<?= base_url('generatepdf/pdftransaksi'); ?>">
            <div class="form-group">
                <label for="date_from">Date From:</label>
                <input type="date" class="form-control" id="date_from" name="date_from" required>
            </div>
            <div class="form-group">
                <label for="date_to">Date To:</label>
                <input type="date" class="form-control" id="date_to" name="date_to" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <p></p>
        <table class="table table-bordered">
            <!-- ... -->
        </table>
    </div>
</body>
</html>
