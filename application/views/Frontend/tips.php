<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- My CSS -->
    <link rel="stylesheet" href="<?php echo base_url ("assets/frontend/style.css")?>" />
    <title>Deteksi Dini Penyimpangan Perkembangan pada Anak</title>
    <style>
    .footer {
        margin-top: 300px;
    }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
        <div class="container">
            <a class="navbar-brand text-primary" href="#">Sistem Pakar KPSP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href=<?php echo base_url("Frontend/index") ?>>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=<?php echo base_url("Frontend/infoperkembangan") ?>>Perkembangan
                            Anak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=<?php echo base_url("Frontend/konsultasi1") ?>>Konsultasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->
    <!-- Panel -->
    <div class="container-fluid">
        <div class="row" style="background-color: #E2F1FF;">
            <div class="container">

                <h5 class="mx-5" style="padding:60px; margin-top:-150px;">Home</h5>
                <br>
                <br>
                <br>
                <br>
                <br>

            </div>
        </div>
    </div>
    <!-- Akhir Panel -->
    <!-- Panel -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 info-panel">
                <div class="row text-center mt-3 text-white fw-bold">
                    <div class="col-lg">
                        <p>TIPS TUMBUH KEMBANG ANAK</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Akhir Panel -->

    <!-- Teks -->
    <div class="container">
        <div class="row justify-content-center info-teks">
            <div class="col-lg-10">
                <h5>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus culpa suscipit laborum ea,
                    consectetur amet fuga placeat delectus neque, numquam molestias quas quos aliquid officia nemo saepe
                    iure dolorem explicabo!
                </h5>
            </div>
        </div>
    </div>

    <!-- Akhir Teks -->

    <!-- footer -->
    <footer class="bg-primary text-white text-center footer">
        <p>Created With Love By <a href="https://www.instagram.com/indahqurrothul__/"
                class="text-white fw-bold">IndahQurrothul</a></p>
    </footer>
    <!-- Akhir Footer -->
</body>

</html>