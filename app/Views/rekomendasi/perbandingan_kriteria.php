<?= $this->extend('layout/template2'); ?>

<?= $this->section('content'); ?>

<main id="main">
    <!-- ======= Pricing Section ======= -->
    <section id="inner-page" class="pricing section-bg" style="margin-top:30px">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>PERBANDINGAN KRITERIA</h2>
                <p>Pilihlah kriteria yang menurut anda lebih penting sesuai dengan kebutuhan anda. Kemudian, tentukan tingkat kepentingannya.</p>

            </div>
            <div class="row">
                <div class="col">
                    <?php if (session()->getFlashdata('mauApa')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= session()->getFlashdata('mauApa'); ?>
                        </div>
                    <?php endif; ?>
                    <form action="/kriteria/proses" method="post">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" colspan="2">Kriteria</th>
                                    <th scope="col">Tingkat Kepentingan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $urut = 0;
                                for ($x = 0; $x <= ($n - 2); $x++) {
                                    for ($y = ($x + 1); $y <= ($n - 1); $y++) {
                                        $urut++;

                                ?>

                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="pilih<?php echo $urut ?>" value="1" class="hidden" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        <?php echo $pilihan[$x] ?>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="pilih<?php echo $urut ?>" value="2" class="hidden" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        <?php echo $pilihan[$y] ?>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <select class="form-select" aria-label="Default select example" name="bobot<?php echo $urut ?>">

                                                    <option value="1">Sama penting</option>
                                                    <option value="3">Sedikt lebih penting </option>
                                                    <option value="5">Kuat pentingnya</option>
                                                    <option value="7">Sangat kuat pentingnya</option>
                                                    <option value="9">Mutlak pentingnya</option>
                                                </select>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                } ?>
                            </tbody>
                        </table>
                        <button type="submit" name="btnSubmit" class="btn btn-primary">Proses</button>
                    </form>

                </div>

            </div>
        </div>
    </section><!-- End Pricing Section -->


</main><!-- End #main -->


<?= $this->endSection(); ?>