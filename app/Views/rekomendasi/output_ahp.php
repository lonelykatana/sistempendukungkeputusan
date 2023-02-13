<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h3>Hasil AHP</h3>
            <?php
            d($lambdaMax);
            d($consIndex);
            d($consRatio);

            if ($consRatio > 0.1) {
                echo 'tidak konsisten';
            } else echo 'sudah konsisten';
            ?>




        </div>
    </div>
</div>
<?= $this->endSection(); ?>