<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row" style="padding : 10px;">
        <div class="col">
            <h3 class="mt-2">Pilihan Fixed Broadband</h3>

            <div class="row row-cols-1 row-cols-md-4 g-4 mt-2 align-items-center">
                <?php foreach ($wifi as $w) : ?>

                    <div class="col">
                        <div class="card text-center h-100 w-60">
                            <div class="card-header">
                                <img src="/assets/img/<?= $w['gambar']; ?>" class="card-img-top" alt="..." style="opacity:0.2;width:200px; height:70px;">
                                <div class="card-img-overlay" style="padding: 0;">
                                    <h5 class="card-title " style="margin-top: 11%;"><?= $w['nama']; ?></h5>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rp <?= number_format($w['harga']); ?></h5>
                                <h6 class="card-title"><?= ($w['kuota'] == 0) ? 'Unlimited' : $w['kuota'] . ' GB'; ?></h6>
                                <h6 class="card-title">Download : <?= $w['download'] . ' GB'; ?></h6>
                                <h6 class="card-title">Upload : <?= $w['upload'] . ' GB'; ?></h6>
                                <h6 class="card-title">Jumlah Perangkat : <?= $w['jumlah_perangkat']; ?></h6>
                                <h6 class="card-title">Jangkauan sinyal : <?= $w['jangkauan']; ?></h6>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</div>
<button type="button" class="btn btn-danger" id="btn-back-to-top">
    <i class='fas fa-chevron-up' style='font-size:20px;color:white'></i>
</button>

<?= $this->endSection(); ?>