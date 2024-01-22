<div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div
                class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
                <img
                    src="<?= base_url() ?>img/logo green.png"
                    alt="Bank Sampah"
                    class="me-2"
                    style="height: 30px; width: 25px;"/>
                Bank Sampah
            </div>
            <div class="list-group list-group-flush my-3">
                <a
                    href="#"
                    id="dashboard-link"
                    class="list-group-item list-group-item-action bg-transparent second-text active">
                    <i class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a
                    href="<?=base_url()?>dashboard/loadNasabah"
                    id="nasabah-link"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
                    >
                    <i class="fas fa-user fa-beat me-2"></i>Nasabah</a>
                <a
                    href="<?=base_url()?>dashboard/loadBerita"
                    id="berita-link"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
                    >
                    <i class="fas fa-chart-line me-2"></i>Berita</a>
                <a
                    href="<?=base_url()?>dashboard/loadTransaksi"
                    id="transaksi-link"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
                    >
                    <i class="fa fa-credit-card me-2"></i>Transaksi</a>
                <a
                    href="<?=base_url()?>setorSampah"
                    id="setor-link"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
                    >
                    <i class="fas fa-arrow-down me-2"></i>Setor</a>
                <a
                    href="<?=base_url()?>tarik"
                    id="tarik-link"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
                    >
                    <i class="fas fa-arrow-up me-2"></i>Tarik</a>
                <a
                    href="<?=base_url()?>generatepdf"
                    id="pdf-link"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
                    >
                    <i class="fas fa-file-pdf me-2"></i>PDF</a>
                <a
                    href="<?php echo base_url('auth/logout/') ?>"
                    class="list-group-item list-group-item-action bg-transparent text-danger fw-bold">
                    <i class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>