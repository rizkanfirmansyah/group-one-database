<?php include 'template/head.php'; ?>

<?php

include 'koneksi.php';

$data = mysqli_query($conn, "SELECT * FROM mahasiswa JOIN matakuliah ON mahasiswa.kd_mk=matakuliah.kd_mk");
// var_dump($data->fetch_all());

// var_dump($_GET['npm']);

?>


<section id="mhs" class="hero-animated d-flex align-items-center">
  <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
    <h2>Data <span>Mahasiswa.</span></h2>
  </div>
</section>

<!-- Table -->
<section class="table">
  <div class="container">
    <div class="card">
      <div class="card-header row">
        <div class="col-xl-3">
          <h3>Tabel Data Mahasiswa</h3>
        </div>
        <div class="col-xl-9 text-end">
          <p>
            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
              Input Data Mahasiswa
            </a>
            <button class="btn btn-secondary" type="button">
              Cetak Data
            </button>
          </p>
          <div class="collapse" id="collapseExample">
            <div class="card card-body text-start">
              <form action="action/add-mahasiswa.php" method="post">
                <div class="row">
                  <div class="col-6">
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label text-black">NPM</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" name="npm" placeholder="NPM">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label text-black">Nama</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" name="nama" placeholder="Nama">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label text-black">Alamat</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" name="alamat" placeholder="Alamat">
                    </div>
                  </div>
                  <div class="col-6">
                    <button class="btn btn-primary" type="submit">Tambah Data</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="card-body">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">NPM</th>
                <th scope="col">Nama Mahasiswa</th>
                <th scope="col">Alamat</th>
                <th scope="col">Mata Kuliah</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>

              <?php foreach ($data as $mahasiswa) : ?>
                <tr>
                  <?php $key = 1;  ?>
                  <th scope="row"><?= $key++ ?></th>
                  <th><?= $mahasiswa['npm'] ?></th>
                  <th><?= $mahasiswa['nama'] ?></th>
                  <th><?= $mahasiswa['alamat'] ?></th>
                  <th><?= $mahasiswa['nama_mk'] ?></th>
                  <th>
                    <a href="#?edit=true&npm=<?= $mahasiswa['npm'] ?>">Edit</a> || <a href="action/delete-mahasiswa.php?npm=<?= $mahasiswa['npm'] ?>">Hapus</a>
                  </th>
                </tr>
              <?php endforeach; ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>
    </secttion>

    <section id="dosen" class="hero-animated d-flex align-items-center">
      <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
        <h2>Data <span>Dosen.</span></h2>
      </div>
    </section>

    <!-- Table -->
    <section class="table">
      <div class="container">
        <div class="card">
          <div class="card-body">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th scope="col">1</th>
                  <th scope="col">KD Dosen</th>
                  <th scope="col">Nama Dosen</th>
                  <th scope="col">Email</th>
                  <th scope="col">No. Handphone</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Test</td>
                  <td>Test</td>
                  <td>Test</td>
                  <td>Test</td>
                  <td><a href="">Edit</a> || <a href="">Hapus</a></td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Test</td>
                  <td>Test</td>
                  <td>Test</td>
                  <td>Test</td>
                  <td><a href="">Edit</a> || <a href="">Hapus</a></td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Test</td>
                  <td>Test</td>
                  <td>Test</td>
                  <td>Test</td>
                  <td><a href="">Edit</a> || <a href="">Hapus</a></td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Test</td>
                  <td>Test</td>
                  <td>Test</td>
                  <td>Test</td>
                  <td><a href="">Edit</a> || <a href="">Hapus</a></td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Test</td>
                  <td>Test</td>
                  <td>Test</td>
                  <td>Test</td>
                  <td><a href="">Edit</a> || <a href="">Hapus</a></td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Test</td>
                  <td>Test</td>
                  <td>Test</td>
                  <td>Test</td>
                  <td><a href="">Edit</a> || <a href="">Hapus</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      </secttion>

      <section id="mk" class="hero-animated d-flex align-items-center">
        <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
          <h2>Data <span>Mata Kuliah.</span></h2>
        </div>
      </section>

      <!-- Table -->
      <section class="table">
        <div class="container">
          <div class="card">
            <div class="card-body">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th scope="col">1</th>
                    <th scope="col">KD Mata Kuliah</th>
                    <th scope="col">Nama Mata Kuliah</th>
                    <th scope="col">SKS</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Test</td>
                    <td>Test</td>
                    <td>Test</td>
                    <td><a href="">Edit</a> || <a href="">Hapus</a></td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Test</td>
                    <td>Test</td>
                    <td>Test</td>
                    <td><a href="">Edit</a> || <a href="">Hapus</a></td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Test</td>
                    <td>Test</td>
                    <td>Test</td>
                    <td><a href="">Edit</a> || <a href="">Hapus</a></td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Test</td>
                    <td>Test</td>
                    <td>Test</td>
                    <td><a href="">Edit</a> || <a href="">Hapus</a></td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Test</td>
                    <td>Test</td>
                    <td>Test</td>
                    <td><a href="">Edit</a> || <a href="">Hapus</a></td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Test</td>
                    <td>Test</td>
                    <td>Test</td>
                    <td><a href="">Edit</a> || <a href="">Hapus</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        </secttion>



        <?php include 'template/foot.php'; ?>