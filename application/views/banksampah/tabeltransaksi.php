<body>
    <!-- Transaksi -->
    <div id="transaksi-table-container">
        <div class="row my-5">
            <h3 class="fs-4 mb-3">Transaksi</h3>
            <div class="col">
                <div class="row my-5">
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Tanggal Transaksi</th>
                                    <th scope="col">User</th>
                                    <th scope="col">Admin</th>
                                    <th scope="col">Setor</th>
                                    <th scope="col">Tarik</th>
                                    <th scope="col">Invoice</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($transaksi->result_array() as $key) { ?>
                                <tr>
                                    <td><?php echo $key['tgl_tabungan_transaksi'] ?></td>
                                    <td><?php echo $key['nasabah_username'] ?></td>
                                    <td><?php echo $key['staff_username'] ?></td>
                                    <td><?php echo $key['debit'] ?></td>
                                    <td><?php echo $key['kredit'] ?></td>
                                    <td>
                                        <a href="" class="btn btn-primary">Invoice</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>