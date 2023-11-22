<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>

<body>
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="text-center p-4 bg-primary">
                    <div class="d-flex align-items-center justify-content-center mx-auto" style="width: 400px; height: 100px;">
                        <i class="material-icons text-warning" style="font-size: 48px;">account_circle</i>
                    </div>
                    <h2 class="text-white mt-3">Form Pendaftaran</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2>Formulir Program Magister Periode Genap</h2>
                <br><br>
                <p>Batas Pendaftaran : 26 Januari 2024 23:55</p>
                <p>Seleksi Berkas</p>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <button onclick="toggleDetails()" class="btn btn-primary mt-3">Tampilkan Detail<span id="arrow-icon"> &#9660;</span></button>
            </div>
        </div>
    </div>

    <div id="detail-section" class="container-fluid mt-3 hidden">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h3>Detail</h3>
                <!-- Tambahkan konten detail Anda di sini -->
                <p>Ini adalah konten detail yang bisa dilihat ketika tombol di klik.</p>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <a href="<?= base_url() ?>index.php/Pendaftaran/tambah" class="btn btn-primary mb-2">Daftar</a>
    </div>

    <div class="container-fluid mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2>Formulir PSUD - Reguler</h2>
                <br><br>
                <p>Batas Pendaftaran : 15 Maret 2024 23:55</p>
                <p>Seleksi Berkas</p>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <button onclick="toggleDetails1()" class="btn btn-primary mt-3">Tampilkan Detail<span id="arrow-icon1"> &#9660;</span></button>
            </div>
        </div>
    </div>

    <div id="detail-section1" class="container-fluid mt-3 hidden">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h3>Detail</h3>
                <!-- Tambahkan konten detail Anda di sini -->
                <p>Ini adalah konten detail yang bisa dilihat ketika tombol di klik.</p>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2>Formulir Beasiswa Prestasi YPCR</h2>
                <br><br>
                <p>Batas Pendaftaran : 15 Maret 2024 23:00</p>
                <p>Seleksi Berkas</p>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <button onclick="toggleDetails2()" class="btn btn-primary mt-3">Tampilkan Detail<span id="arrow-icon2"> &#9660;</span></button>
            </div>
        </div>
    </div>

    <div id="detail-section2" class="container-fluid mt-3 hidden">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h3>Detail</h3>
                <!-- Tambahkan konten detail Anda di sini -->
                <p>Ini adalah konten detail yang bisa dilihat ketika tombol di klik.</p>
            </div>
        </div>
    </div>



</body>

</html>