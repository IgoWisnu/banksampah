<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $title; ?>/</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2 class="text-center">Laporan Transaksi Banksampah</h2>
        <p class="text-center">Mulia tanggal <?=$date_from ?> hingga tanggal <?=$date_to ?></p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center">Tanggal</th>
                    <th class="text-center">User</th>
                    <th class="text-center">Setor</th>
                    <th class="text-center">Tarik</th>
                    <th class="text-center">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($laporan->result_array() as $key){?>
                <tr>
                    <td><?=$key['tgl_tabungan_transaksi']?></td>
                    <td><?=$key['username'] ?></td>
                    <td><?=$key['debit']?></td>
                    <td><?=$key['kredit']?></td>
                    <td>
                        <?php 
                            foreach($detail->result_array() as $result){ 
                                if($result['id_transaksi_sampah'] == $key['id_transaksi_sampah']){
                                    echo $result['jenis_sampah'].'('.$result['berat_sampah'].'), ';
                                }
                            }
                        ?>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>