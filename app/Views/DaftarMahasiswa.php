<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">
                    <a class="navbar-brand active" href="/mahasiswa">MUHAMMAD NUR WAHID</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/pages/profil">Profil Siswa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/pages/about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/pages/contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>



    <!-- navbar portoflio -->
    <div class="container" id="home">
        <div class="row">
            <div class="col">
                <!-- navbar -->
                <div class="jumbotron text-center">
                    <img src="img/img1.jpg" class="img-circle">
                    <h1>M.Nur Wahid</h1>
                    <p> Pelajar | santri | Web Developer</p>
                </div>

                <section class="about">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2 class="text-center">About</h2>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-1">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo voluptas corrupti cumque quis recusandae in exercitationem dolorum sequi. Ducimus voluptatum laudantium sequi eveniet sit cupiditate fugiat! Aut qui blanditiis optio.
                                </p>
                            </div>
                            <div class="col-sm-6 col-offset">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio eveniet tenetur eum impedit corporis minus officia. Provident deserunt dicta illo. Amet animi veniam ipsum recusandae odio vel iure debitis possimus?
                                </p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="contact">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <h2>Contact</h2>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-6">
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
                                </form>
                            </div>
                            </select>
                            <div class="form-group">
                                <label for="pesan">Pesan</label>
                                <textarea class="form-control" rows="10" placeholder="masukkan pesan"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Kirim pesan</button>
                            </form>
                        </div>
                    </div>
            </div>
            </section>
        </div>
    </div>
    </div>
</body>

</html>