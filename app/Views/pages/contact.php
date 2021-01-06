<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
    <section class="contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>Contact</h2>
                    <hr>
                </div> 
            </div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <form>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" id="nama" class="form-control" placeholder="masukkan nama">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control" placeholder="masukkan email">
                        </div>
                        <div class="form-group">
                            <label for="password">Pasword</label>
                            <input type="password" id="password" class="form-control" placeholder="masukkan password">
                        </div>
                        <div class="form-group">
                            <label for="telp">No Telepone</label>
                            <input type="tel" id="telp" class="form-control" placeholder="masukkan no Telepone">
                        </div>
                        <select class="form-control">
                            <option>--pilih kategori--</option>
                            <option>Web Developement</option>
                            <option>Web Design</option>
                </div>
                </select>
                <div class="form-group">
                    <label for="pesan">Pesan</label>
                    <textarea class="form-control" rows="10" placeholder="masukkan pesan"></textarea>
                </div>
                <form action="" class="d-inline">
                    <button type="submit" class="btn btn-primary ">Kirim pesan</button>

                    <a href="/Mahasiswa/index" class="btn btn-danger">Kembali</a>
                </form>
            </div>
        </div>
        </div>
    </section>
<?= $this->endSection(); ?>