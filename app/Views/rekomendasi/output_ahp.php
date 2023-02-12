<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h3>Hasil AHP</h3>
            <?php
            d(round($lambdaMax, 5));
            d(round($consIndex, 5));
            d(round($consRatio, 5));

            if (round($consRatio, 5) > 0.1) {
                echo 'tidak konsisten';
            } else echo 'sudah konsisten';
            ?>




        </div>
    </div>
</div>
<?= $this->endSection(); ?>