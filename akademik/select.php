<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark mb-5">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="index.php">SMKN 17</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="select.php">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Register Sebagai</h5>
                <div class="d-grid gap-3 mx-auto">
                    <div class="pt-4">
                        <a class="btn btn-primary" href="registerGuru.php" style="padding-left:105px; padding-right:105px;">Guru</a>
                    </div>
                    <div class="py-3">
                        <a class="btn btn-primary" href="registerSiswa.php" style="padding-left:105px; padding-right:105px;">Siswa</a>
                    </div>
                    <h6 style="font-size:13px;" class="card-subtitle mb-2 text-secondary pt-2">Kembali ke <a href="login.php">Login</a></h6>
                </div>
            </div>
        </div>
    </div>
</body>

</html>