<?= $this->extend('layout/siswa-layout.php'); ?>

<?= $this->section('content'); ?>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>Tambah Data Siswa</h2>
            <?php
            if (session()->getFlashdata('pesan')) :
            ?>
            <p><?= session()->getFlashdata('pesan'); ?></p>
            <?php endif; ?>
        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

        <div class="container" data-aos="fade-up">

            <div class="col-lg-12 mt-5 mt-lg-0">

                <form action="<?= base_url(); ?>/admin/siswa/save" method="post" class="php-email-form">

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="nama"
                                class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>"
                                id="nama" placeholder="Nama Siswa" autofocus value="<?= old('nama'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama'); ?>
                            </div>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="number"
                                class="form-control <?= ($validation->hasError('nis')) ? 'is-invalid' : ''; ?>"
                                name="nis" id="nis" placeholder="NIS" value="<?= old('nis'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nis'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group mt-3">
                            <input type="text"
                                class="form-control <?= ($validation->hasError('kelas')) ? 'is-invalid' : ''; ?>"
                                name="kelas" id="kelas" placeholder="Kelas Siswa" value="<?= old('kelas'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('kelas'); ?>
                            </div>
                        </div>
                        <div class="col-md-6 form-group mt-3">
                            <input type="text"
                                class="form-control <?= ($validation->hasError('tahun_masuk')) ? 'is-invalid' : ''; ?>"
                                name="tahun_masuk" id="tahun_masuk"
                                placeholder="Tahun Masuk Siswa Format : YYYY-mm-dd (cnth : 2019-07-15)"
                                value="<?= old('tahun_masuk'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('tahun_masuk'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group mt-3">
                            <input type="text"
                                class="form-control <?= ($validation->hasError('ttl')) ? 'is-invalid' : ''; ?>"
                                name="ttl" id="ttl" placeholder="Tempat, Tanggal Lahir Siswa"
                                value="<?= old('ttl'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('ttl'); ?>
                            </div>
                        </div>
                        <div class="col-md-6 form-group mt-3">
                            <input type="text"
                                class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>"
                                name="alamat" id="alamat" placeholder="Alamat Siswa" value="<?= old('alamat'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('alamat'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group mt-3">
                            <input type="text"
                                class="form-control <?= ($validation->hasError('agama')) ? 'is-invalid' : ''; ?>"
                                name="agama" id="agama" placeholder="Agama Siswa" value="<?= old('agama'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('agama'); ?>
                            </div>
                        </div>
                        <div class="col-md-6 form-group mt-3">
                            <input type="text"
                                class="form-control <?= ($validation->hasError('sekolah_asal')) ? 'is-invalid' : ''; ?>"
                                name="sekolah_asal" id="sekolah_asal" placeholder="Sekolah Asal"
                                value="<?= old('sekolah_asal'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('sekolah_asal'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group mt-3">
                            <input type="text"
                                class="form-control <?= ($validation->hasError('ibu')) ? 'is-invalid' : ''; ?>"
                                name="ibu" id="ibu" placeholder="Nama Ibu/Wali Siswa" value="<?= old('ibu'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('ibu'); ?>
                            </div>
                        </div>
                        <div class="col-md-6 form-group mt-3">
                            <input type="text" type="text"
                                class="form-control <?= ($validation->hasError('ayah')) ? 'is-invalid' : ''; ?>"
                                name="ayah" id="ayah" placeholder="Nama Ayah/Wali Siswa" value="<?= old('ayah'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('ayah'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group mt-3">
                            <input type="number"
                                class="form-control <?= ($validation->hasError('hp_wali')) ? 'is-invalid' : ''; ?>"
                                name="hp_wali" id="hp_wali" placeholder="Nomor HP Orang Tua/Wali Siswa (cnth : 081...)"
                                value="<?= old('hp_wali'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('hp_wali'); ?>
                            </div>
                        </div>
                        <div class="col-md-6 form-group mt-3">
                            <input type="text"
                                class="form-control <?= ($validation->hasError('urlfoto')) ? 'is-invalid' : ''; ?>"
                                name="urlfoto" id="urlfoto"
                                placeholder="URL Foto Siswa kelas/nama.jpg (cnth: xi-rpl1/namasiswa.jpg)"
                                value="<?= old('urlfoto'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('urlfoto'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group mt-3">
                            <input type="number"
                                class="form-control <?= ($validation->hasError('sedangsekolah')) ? 'is-invalid' : ''; ?>"
                                name="sedangsekolah" id="sedangsekolah"
                                placeholder="Apakah Masih Dalam Bimbingan? 0 = lulus, 1 = dlm bimbingan, 2 = keluar"
                                value="<?= old('sedangsekolah'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('sedangsekolah'); ?>
                            </div>
                        </div>
                        <div class="col-md-6 form-group mt-3">
                            <input type="text"
                                class="form-control <?= ($validation->hasError('created_by')) ? 'is-invalid' : ''; ?>"
                                name="created_by" id="created_by"
                                placeholder="Nama petugas pengelola data siswa ini (Default : Administrator)"
                                value="<?= old('created_by'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('created_by'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="my-3">
                        <div class="loading">Tunggu Sebentar</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Buat Data Siswa</button></div>
                </form>

            </div>

        </div>

        </div>
    </section><!-- End Contact Section -->

</main>
<!-- End #main --

<?= $this->endSection(); ?>