<?= $this->extend('layout/template2'); ?>

<?= $this->section('content'); ?>

<main id="main">
    <section id="inner-page" class="pricing section-bg" style="margin-top:30px">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Detail Rangking</h2>

            </div>
            <div class="row">
                <div class="col">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Peringkat</th>
                                <th scope="col">Id</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Kuota</th>
                                <th scope="col">Download</th>
                                <th scope="col">Upload</th>
                                <th scope="col">Jumlah Perangkat</th>
                                <th scope="col">Jangkauan</th>
                                <th scope="col">Utilitas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $urut = 1;
                            foreach ($result as $r) :
                            ?>
                                <tr>
                                    <th scope="row"><?= $urut; ?></th>
                                    <td><?= $r['id']; ?></td>
                                    <td><?= $r['nama']; ?></td>
                                    <td><?= number_format($r['harga'], 0, ',', '.'); ?></td>
                                    <td><?= $r['kuota']; ?></td>
                                    <td><?= $r['download']; ?></td>
                                    <td><?= $r['upload']; ?></td>
                                    <td><?= $r['jumlah_perangkat']; ?></td>
                                    <td><?= $r['jangkauan']; ?></td>
                                    <td><?= $r['nilai']; ?></td>
                                </tr>



                            <?php $urut++;
                            endforeach; ?>
                        </tbody>

                    </table>
                </div>


            </div>
        </div>
    </section>


</main><!-- End #main -->


<?= $this->endSection(); ?>