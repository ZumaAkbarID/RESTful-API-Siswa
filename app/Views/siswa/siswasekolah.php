<?= $this->extend('layout/siswa-layout.php'); ?>

<?= $this->section('content'); ?>
<main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">
            <h2>Siswa</h2>
            <?php foreach ($datasekolah as $ds) : ?>
            <p>Berikut adalah siswa siswi yang masih dalam bimbingan sekolah <b><?= $ds['nama_sekolah']; ?></b></p>
            <?php endforeach; ?>
        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Siswa Section ======= -->
    <section id="trainers" class="trainers">
        <div class="container" data-aos="fade-up">

            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                <?php foreach ($datasiswa as $ds) : ?>
                <div class="col-lg-1 col-md-1 d-flex align-items-stretch">
                    <div class="member">
                        <img src="<?= base_url(); ?>/data/siswa/img/<?= $ds['urlfoto']; ?>" class="img-fluid" alt="">
                        <div class="member-content">
                            <h4><?= $ds['nama']; ?></h4>
                            <span><?= $ds['kelas']; ?></span>
                            <span><?= $ds['ttl']; ?></span>
                            <!-- <p>
                                KataKata
                            </p> -->
                            <div class="action">
                                <a href="/siswa/<?= $ds['nis']; ?>" class="btn btn-detail">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section><!-- End Trainers Section -->

</main><!-- End #main -->

<?= $this->endSection(); ?>