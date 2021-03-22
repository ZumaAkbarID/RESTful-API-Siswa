<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <?php foreach ($datasekolah as $ds) : ?>
        <h1 class="logo me-auto"><a href="index.html"><?= $ds['nama_sekolah']; ?></a></h1>
        <?php endforeach; ?>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a href="<?= base_url(); ?>">Beranda</a></li>
                <li><a href="courses.html">Kompetensi Keahlian</a></li>
                <li class="dropdown"><a href="#"><span>Sekolah</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                    class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                            </ul>
                        </li> -->
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Pengumuman</a></li>
                        <li><a href="#">Agenda</a></li>
                        <li><a href="#">Penghargaan</a></li>
                        <li><a href="#">Galeri</a></li>
                        <li><a href="#">Sejarah</a></li>
                    </ul>
                </li>
                <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                                <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                    class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                        <li><a href="#">Drop Down 2</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li> -->
                <li class="dropdown"><a href="#"><span>Data Umum</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Guru &amp; Staff</a></li>
                        <li class="dropdown"><a href="#"><span>Siswa</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a class="active" href="<?= base_url(); ?>/siswa">Data Siswa</a></li>
                                <li><a href="<?= base_url(); ?>/siswalulus">Data Siswa Lulus</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Karyawan</a></li>
                    </ul>
                </li>
                <?php if ($admin == true) {
                    echo "<li class='dropdown'><a href='#'><span>Admin</span> <i class='bi bi-chevron-down'></i></a>
                    <ul>
                        <li><a href='#'>Kelola Guru &amp; Staff</a></li>
                        <li class='dropdown'><a href=" . base_url('/admin/siswa') . "><span>Kelola Siswa</span> <i
                                    class='bi bi-chevron-right'></i></a>
                            <ul>
                                <li><a class='active' href=" . base_url('/admin/siswa') . ">Kelola Data Siswa</a></li>
                <li><a href=" . base_url('/admin/siswa') . ">Kelola Data Siswa Lulus</a></li>
            </ul>
            </li>
            <li><a href='#'>Kelola Karyawan</a></li>
            </ul>
            </li>";
                } ?>
                <li><a href="contact.html">Kontak</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <a href="courses.html" class="get-started-btn">Login</a>

    </div>
</header><!-- End Header -->