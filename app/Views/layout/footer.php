<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <?php foreach ($datasekolah as $ds) : ?>
                    <h3><?= $ds['nama_sekolah']; ?></h3>
                    <p>
                        <?= $ds['alamat']; ?>
                        <strong>HP:</strong> <?= $ds['notelp']; ?><br>
                        <strong>Email:</strong> <?= $ds['email']; ?><br>
                    </p>
                    <?php endforeach; ?>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Sekolah</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url(); ?>">Beranda</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Sejarah</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Kompetensi Keahlian</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Galeri</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Penghargaan</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Data Umum</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Guru & Staff</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url(); ?>/siswa">Siswa Dalam
                                Bimbingan</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Siswa Lulus</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Kontak</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Login</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Bergabunglah Dengan Buletin Kami</h4>
                    <p>Dapatkan notifikasi terbaru dari kami langsung ke email Anda</p>
                    <form action="" method="post">
                        <input type="email" name="email" placeholder="Email Anda"><input type="submit"
                            value="Bergabung">
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="container d-md-flex py-4">

        <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
                <?php foreach ($datasekolah as $ds) : ?>
                &copy; Copyright <strong><span><?= $ds['nama_sekolah']; ?></span></strong>. All Rights Reserved
                <?php endforeach; ?>
            </div>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
    </div>
</footer><!-- End Footer -->