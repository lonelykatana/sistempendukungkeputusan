<?= $this->extend('layout/template2'); ?>

<?= $this->section('content'); ?>

<main id="main">

    <section id="inner-page" class="pricing section-bg" style="margin-top:30px">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>PERINGKAT</h2>
                <p>Berdasarkan kriteria yang anda pilih, fixed broadband yang terbaik untuk anda adalah : </p>
            </div>
            <div class="row">
                <div class="col d-flex justify-content-center" data-aos="fade-up" data-aos-delay="50">
                    <div class="box" style="width:300px">
                        <span class="advanced">Terbaik</span>
                        <h3><?= $harga[$pilih][0]; ?></h3>
                        <h4><sup>Rp </sup><?= number_format($harga[$pilih][1]); ?><span> / month</span></h4>
                        <ul>
                            <li><?= ($harga[$pilih][2] == 0) ? 'Unlimited' : $harga[$pilih][2] . ' GB'; ?></li>
                            <li>Download : <?= $harga[$pilih][3] . ' Mbps'; ?></li>
                            <li>Upload : <?= $harga[$pilih][4] . ' Mbps'; ?></li>
                            <li>Jumlah Perangkat : <?= $harga[$pilih][5]; ?></li>
                            <li>Jangkauan : <?= $harga[$pilih][6] . ' meter'; ?></li>
                        </ul>
                    </div>

                </div>

            </div>
            <br>
            <div class="section-title">
                <p>Yang diikuti dengan : </p>
            </div>

            <div class="row">
                <?php
                $cek = 0;
                $n = 2; ?>
                <?php foreach ($K as $key => $value) : ?>
                    <?php if ($cek < 5) : ?>
                        <?php $mykey = $key ?>
                        <?php if ($mykey != $pilih) : ?>
                            <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="50">
                                <div class="box">
                                    <span class="advanced"><?= $n; ?></span>
                                    <h3><?= $harga[$mykey][0]; ?></h3>
                                    <h4><sup>Rp </sup><?= number_format($harga[$mykey][1]); ?><span> / month</span></h4>
                                    <ul>
                                        <li><?= ($harga[$mykey][2] == 0) ? 'Unlimited' : $harga[$mykey][2] . ' GB'; ?></li>
                                        <li>Download : <?= $harga[$mykey][3] . ' GB'; ?></li>
                                        <li>Upload : <?= $harga[$mykey][4] . ' GB'; ?></li>
                                        <li>Jumlah Perangkat : <?= $harga[$mykey][5]; ?></li>
                                        <li>Jangkauan : <?= $harga[$mykey][6] . ' meter'; ?></li>
                                    </ul>
                                </div>

                            </div>
                            <?php
                            next($K);
                            $n++;
                            ?>
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php $cek++ ?>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="containerbutton text-center cl-1">
            <a href="/kriteria/preferensi" class="btn btn-primary">Kriteria</a>
            <a href="/pages/detail" class="btn btn-primary">Detail</a>
        </div>
    </section>


</main><!-- End #main -->



<?= $this->endSection(); ?>