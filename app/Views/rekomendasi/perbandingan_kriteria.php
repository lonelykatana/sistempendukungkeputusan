<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h3 class="mt-2">Perbandingan Kriteria</h3>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <?php
            d($pilihan);
            d($n) ?>


            <form action="/kriteria/proses" method="post">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">Pilih kriteria yang lebih penting</th>
                            <th scope="col">Seberapa Penting</th>
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
                <button type="submit" class="btn btn-primary">Proses</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>