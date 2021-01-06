<?php

use App\Controllers\pages;
?>
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="my-4">Ubah  Data Siswa</h2>

            <form action="/pages/update/<?= $pages['id']; ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="id" value="<?= $pages['id']; ?>">
                <div class="row mb-3"> 
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" value="<?= $pages['nama']; ?>" autofocus>
                        <div class="invalid-feedback">
                            <?= $validation->getError('nama'); ?>
                        </div>
                    </div>
                </div>
                <fieldset class="row mb-3">
                    <label class="col-form-label col-sm-2 pt-0">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin1" value="Laki-laki" checked>
                            <label class="form-check-label" for="jenis_kelamin1">
                                Laki-laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin2" value="Perempuan">
                            <label class="form-check-label" for="jenis_kelamin2">
                                Perempuan
                            </label>
                        </div>
                    </div>
                </fieldset>
                <div class="row mb-3">
                    <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-10">
                        <div class="mb-3">
                            <input class="form-control <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>" type="file" id="foto" name="foto" value="<?= $pages['foto']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('foto'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="foto_ijazah" class="col-sm-2 col-form-label">Foto Ijazah</label>
                    <div class="col-sm-10">
                        <div class="mb-3">
                            <input class="form-control <?= ($validation->hasError('foto_ijazah')) ? 'is-invalid' : ''; ?>" type="file" id="foto_ijazah" name="foto_ijazah" value="<?= $pages['foto_ijazah']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('foto_ijazah'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Ubah</button>
                <a href="/Mahasiswa" class="btn btn-danger ">Kembali</a>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>