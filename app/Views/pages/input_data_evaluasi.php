<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h3>Input Data Evaluasi</h3>
            <?php d($harga) ?>

            <form action="/pages/inputEvaluasi" method="post">
                <button type="submit" class="btn btn-success">Evaluasi Harga</button>
            </form>
            <br>
            <form action="" method="post">
                <button type="submit" class="btn btn-success">Evaluasi Kuota</button>
            </form>
            <br>
            <form action="" method="post">
                <button type="submit" class="btn btn-success">Evaluasi Download</button>
            </form>
            <br>
            <form action="" method="post">
                <button type="submit" class="btn btn-success">Evaluasi Upload</button>
            </form>
            <br>
            <form action="" method="post">
                <button type="submit" class="btn btn-success">Evaluasi Perangkat</button>
            </form>
            <br>
            <form action="" method="post">
                <button type="submit" class="btn btn-success">Evaluasi Jangkauan</button>
            </form>
            <br>


        </div>
    </div>
</div>
<?= $this->endSection(); ?>