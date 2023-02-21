<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container-fluid" data-aos="fade-up">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1>Temukan Pilihan Fixed Broadband Sesuai Kebutuhan Anda.</h1>
                <h2>Menggunakan kombinasi metode AHP dan ARAS</h2>
                <div><a href="#about" class="btn-get-started scrollto">Mulai</a></div>
            </div>
            <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
                <img src="/assets/img/home3.svg" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150" style="padding-left:100px;">
                    <img src="/assets/img/home2.svg" class="img-fluid" alt="" style="height:450px;">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" style="margin-top:80px;">
                    <h3>Apakah anda kesulitan mencari WiFi yang sesuai dengan kebutuhan anda?
                    </h3>
                    <p clss="fst-italic">
                        Website ini merupakan solusi dari masalah anda. Dengan menggunakan kombinasi metode Analytical Hierarchy Process (AHP) dan Additive Ratio Assessment (ARAS), anda akan mendapatkan rekomendasi WiFi terbaik hanya dengan mengikuti beberapa langkah singkat.
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> Mudah dan cepat.</li>
                        <li><i class="bi bi-check-circle"></i> Rekomendasi sesuai kebutuhan.</li>
                        <li><i class="bi bi-check-circle"></i> Mendapatkan pilihan dari 30+ penyedia Fixed Broadband</li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="section-title" data-aos="fade-left">
            <a href="/alternatif" class="btn btn-primary mt-2 mb-2">Temukan WiFi Untukmu!</a>
        </div>
    </section><!-- End About Section -->





</main><!-- End #main -->


<?= $this->endSection(); ?>