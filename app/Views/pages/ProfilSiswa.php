<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="col-my-6 my-3">KUMPULAN DATA-DATA SISWA</h1>
            <a href="/mahasiswa" class="btn btn-danger mb-4 mr-2">Kembali</a>
            <a href="/pages/tambah" class="btn btn-primary mb-4">Tambahkan</a>
            <?php if (session()->getFlashData('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashData('pesan'); ?>
                </div>
            <?php endif; ?> 
            <table class="table table-hover">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Foto</th>
                        <th>Foto Ijazah</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    <?php foreach ($siswa as $s) : ?>
                        <tr>
                            <th scope="row"><?= $i++ ?></th>
                            <td><?= $s['nama'] ?></td>
                            <td><?= $s['jenis_kelamin'] ?></td>
                            <td><img src="/img/foto/<?= $s['foto'] ?>" class="foto"> </td>

                            <td><img src="/img/ijazah/<?= $s['foto_ijazah'] ?>" class="foto"></td>
                            <td>
                                <a href="/pages/edit/<?= $s['id']; ?>" class="btn btn-primary">Edit</a>




                                <form action="/pages/<?= $s['id']; ?>" method="post" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin');">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>