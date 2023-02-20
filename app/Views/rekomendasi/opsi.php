<?= $this->extend('layout/template2'); ?>

<?= $this->section('content'); ?>

<main id="main">
    <!-- ======= Pricing Section ======= -->
    <section id="inner-page" class="pricing section-bg" style="margin-top:30px">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>OPSI FIXED BROADBAND</h2>
                <a href="/kriteria/preferensi" class="btn btn-primary mt-2 mb-2">Mulai proses</a>
            </div>
            <div class="row">
                <?php foreach ($wifi as $w) : ?>
                    <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="50">
                        <div class="box">
                            <h3><?= $w['nama']; ?></h3>
                            <h4><sup>Rp </sup><?= number_format($w['harga']); ?><span> / bulan</span></h4>
                            <ul>
                                <li class><?= ($w['kuota'] == 0) ? 'Unlimited' : $w['kuota'] . ' GB'; ?></li>
                                <li>Download : <?= $w['download'] . ' GB'; ?></li>
                                <li>Upload : <?= $w['upload'] . ' GB'; ?></li>
                                <li>Jumlah Perangkat : <?= $w['jumlah_perangkat']; ?></li>
                                <li class>Jangkauan sinyal : <?= $w['jangkauan']; ?></li>
                            </ul>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section><!-- End Pricing Section -->


</main><!-- End #main -->


<?= $this->endSection(); ?>