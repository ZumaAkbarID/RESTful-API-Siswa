<?= $this->extend('layout/siswa-layout.php'); ?>

<?= $this->section('content'); ?>
<main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">
            <h2>Siswa</h2>
            <?php foreach ($datasiswa as $ds) : ?>
            <p>Berikut adalah detail siswa <b><?= $ds['nama']; ?></b></p>
        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Siswa Section ======= -->
    <section id="trainers" class="trainers">
        <div class="container" data-aos="fade-up">

            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-lg-12 col-md-12 d-flex align-items-stretch">
                    <div class="member">
                        <img src="<?= base_url(); ?>/data/siswa/img/<?= $ds['urlfoto']; ?>" class="img-fluid" alt="">
                    </div>
                    <div class="member-content-detail">
                        <h4>Nama : <?= $ds['nama']; ?></h4>
                        <span><i class="bx bx-chevron-right"></i>NIS : <?= $ds['nis']; ?></span>
                        <span><i class="bx bx-chevron-right"></i>Kelas : <?= $ds['kelas']; ?></span>
                        <span><i class="bx bx-chevron-right"></i>Tahun Masuk : <?= $ds['tahun_masuk']; ?></span>
                        <span><i class="bx bx-chevron-right"></i>Tempat, Tanggal Lahir : <?= $ds['ttl']; ?></span>
                        <span><i class="bx bx-chevron-right"></i>Alamat : <?= $ds['alamat']; ?></span>
                        <span><i class="bx bx-chevron-right"></i>Agama : <?= $ds['agama']; ?></span>
                        <span><i class="bx bx-chevron-right"></i>Sekolah Asal : <?= $ds['sekolah_asal']; ?></span>
                        <?php
                        if (!$admin == false) {
                            echo "<span><i class='bx bx-chevron-right'></i>Ibu : {$ds['ibu']}</span>
                            <span><i class='bx bx-chevron-right'></i>Ayah : {$ds['ayah']}</span>
                            <span><i class='bx bx-chevron-right'></i>No. HP Wali : {['hp_wali']}</span>
                            <span><i class='bx bx-chevron-right'></i>URL Foto : {$ds['urlfoto']}</span>";
                        }
                        ?>
                        <span><i class="bx bx-chevron-right"></i>Dalam Bimbingan : <?php
                                                                                    if ($ds['sedangsekolah'] == 1) {
                                                                                        echo  'Ya';
                                                                                    } else if ($ds['sedangsekolah'] == 2) {
                                                                                        echo 'Dikeluarkan';
                                                                                    } else if ($ds['sedangsekolah'] == 3) {
                                                                                        echo 'Dikeluarkan';
                                                                                    } else {
                                                                                        echo 'Lulus';
                                                                                    }
                                                                                    ?></span>
                        <!-- <p>
                                KataKata
                            </p> -->
                        <div class="action">
                            <a href="/siswa" class="btn btn-detail">Kembali</a>
                            <?php
                            if (!$admin == false) {
                                echo "<a href='/admin/siswa/{$ds['nis']}/edit' class='btn btn-detail'>Edit</a>
                                    <a href='/admin/siswa/{$ds['nis']}/delete' class='btn btn-detail delete'>Hapus</a>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section><!-- End Trainers Section -->

</main><!-- End #main -->

<?= $this->endSection(); ?>