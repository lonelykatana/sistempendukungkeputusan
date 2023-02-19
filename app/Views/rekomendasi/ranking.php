<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h3>Hasil ARAS</h3>
            <?php $ratio = session()->getFlashdata('consRatio'); ?>





            <?php
            //d($cek);
            d($K);
            d($pilih);
            d($ratio);
            //d($nilai);
            // d($alternatif);

            echo "Dari hasil perhitungan dipilih alternatif ke-" . $pilih
                . " ({$alternatif[$pilih]}) <br>dengan nilai keseimbangan optimum "
                . " sebesar " . ($K[$pilih] * 100) . " %" . "<br>";



            // $cek = 0;
            // foreach ($K as $n) {
            //     if ($cek < 4) {
            //         echo "$n" . "<br>";
            //     }
            //     $cek++;
            // }

            $cek2 = 0;
            $n = 1;
            foreach ($K as $key => $value) {

                if ($cek2 < 5) {
                    $mykey = $key;
                    echo "$n" . ". "  . "$alternatif[$mykey]" . " dengan nilai " . $value * 100 . "<br>";
                    next($K);
                    $n++;
                }

                $cek2++;
            }

            if ($ratio > 0.1) {
                echo 'tidak konsisten';
            } else echo 'sudah konsisten';
            ?>


        </div>
    </div>
</div>
<?= $this->endSection(); ?>