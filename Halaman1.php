<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</head>

<body>
    <?php include 'Header.php'; ?>

    <section class="h-50">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card card-registration my-4">
                        <div class="row g-0">
                            <div class="col-xl-6 d-none d-xl-block">
                                <img src="https://source.unsplash.com/random/1200×700/?university" alt="Sample photo"
                                    class="img-fluid"
                                    style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem; height: 100%; object-fit: cover;" />
                            </div>
                            <form enctype="multipart/form-data" class="col-xl-6" action="Halaman2.php" method="post">
                                <div class="card-body p-md-5 text-black">
                                    <h3 class="mb-5 text-uppercase">Registrasi Mahasiswa UB</h3>

                                    <div class="row">
                                        <div class="mb-2">
                                            <div class="form-outline">
                                                <label class="form-label " for="form3Example1m">Nama Lengkap</label>
                                                <input name="namaLengkap" type="text"
                                                    class="form-control form-control-sm" />
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">

                                        <div class=" mb-2">
                                            <div class="form-outline">
                                                <label class="form-label" for="form3Example1n">Nama Panggilan</label>
                                                <input type="text" name="namaPanggilan"
                                                    class="form-control form-control-sm" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-outline mb-2">
                                        <label class="form-label" for="form3Example97">Email UB</label>
                                        <input type="email" name="email" class="form-control form-control-sm" />
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <div class="form-outline">
                                                <label class="form-label" for="form3Example1m1">Nama Ibu</label>
                                                <input type="text" name="namaIbu"
                                                    class="form-control form-control-sm" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="form-outline">
                                                <label class="form-label" for="form3Example1n1">Nama Ayah</label>
                                                <input type="text" name="namaAyah"
                                                    class="form-control form-control-sm" />
                                            </div>
                                        </div>
                                    </div>

                                    <label class="form-label" for="form3Example8">Alamat (Di Malang)</label>
                                    <div class="form-outline mb-2">
                                        <input type="text" name="alamat" class="form-control form-control-sm" />
                                    </div>

                                    <div class="d-md-flex justify-content-start align-items-center mb-2 py-2">

                                        <h6 class="mb-0 me-4">Jenis Kelamin : </h6>
                                        <div class="form-check form-check-inline mb-0 me-4">
                                            <label class="form-check-label" for="lakiLaki">Laki Laki</label>
                                            <input class="form-check-input" type="radio" name="jenisKelamin"
                                                id="lakiLaki" value="laki_laki" />
                                        </div>

                                        <div class="form-check form-check-inline mb-0 me-4">
                                            <label class="form-check-label" for="perempuan">Perempuan</label>
                                            <input class="form-check-input" type="radio" name="jenisKelamin"
                                                id="perempuan" value="perempuan" />
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class=" mb-2">

                                            <div class="form-outline">
                                                <label class="form-label" for="form3Example1n1">Fakultas</label>

                                                <select class="select" name="fakultas" id="fakultas">
                                                    <option selected disabled>Pilih Fakultas Mu</option>
                                                    <option value="Fakultas Hukum">Fakultas Hukum Ilmu
                                                        Hukum</option>
                                                    <option value="Fakultas Ekonomi dan Bisnis">Fakultas Ekonomi
                                                        dan
                                                        Bisnis</option>
                                                    <option value="Fakultas Ilmu Administrasi">Fakultas Ilmu
                                                        Administrasi</option>
                                                    <option value="Fakultas Pertanian">Fakultas Pertanian
                                                    </option>
                                                    <option value="Fakultas Peternakan">Fakultas Peternakan

                                                    </option>
                                                    <option value="Fakultas Teknik">Fakultas Teknik</option>
                                                    <option value="Fakultas Kedokteran">Fakultas Kedokteran
                                                    </option>
                                                    <option value="Fakultas Perikanan dan Ilmu Kelautan">Fakultas
                                                        Perikanan dan Ilmu Kelautan</option>
                                                    <option value="Fakultas Matematika dan Ilmu Pengetahuan Alam">
                                                        Fakultas Matematika dan Ilmu Pengetahuan Alam</option>
                                                    <option value="Fakultas Teknologi Pertanian">Fakultas
                                                        Teknologi
                                                        Pertanian</option>
                                                    <option value="Fakultas Ilmu Sosial dan Ilmu Politik">
                                                        Fakultas
                                                        Ilmu Sosial dan Ilmu Politik</option>
                                                    <option value="Fakultas Ilmu Budaya">Fakultas Ilmu Budaya

                                                    </option>
                                                    <option value="Fakultas Kedokteran Hewan">Fakultas Kedokteran
                                                        Hewan</option>
                                                    <option value="Fakultas Ilmu Komputer">Fakultas Ilmu
                                                        Komputer
                                                    </option>
                                                    <option value="Fakultas Kedokteran Gigi">Fakultas Kedokteran
                                                        Gigi
                                                    </option>
                                                    <option value="Fakultas Ilmu Kesehatan">Fakultas Ilmu
                                                        Kesehatan
                                                    </option>
                                                </select>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="form-outline mb-2">
                                        <label class="form-label" for="form3Example9">Program Studi</label>
                                        <input type="text" name="prodi" class="form-control form-control-sm" />
                                    </div>









                                    <div class="form-outline mb-2">
                                        <label for="form3Example1n1">Foto</label>
                                        <input type="file" class="form-control-file" name="foto" id="form3Example1n1">
                                    </div>


                                    <div class="d-flex justify-content-end pt-3">

                                        <button type="submit" class="btn btn-warning btn-lg ms-2">Daftar</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'Footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>