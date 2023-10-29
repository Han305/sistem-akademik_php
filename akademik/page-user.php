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
    <?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['category']==""){
		header("location:login.php?pesan=gagal");
	}

	?>
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="post.php">SMKN 17</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">                    
                    <li class="nav-item" style="margin-left:1100px;">
                        <a class="nav-link text-ligth btn btn-danger"  href="logout.php">logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php 
        include('koneksi.php');
        $id = $_GET['id'];
$query = "SELECT * FROM post WHERE id = $id LIMIT 1";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_array($result);
    ?>
    <div class="mb-4 card">
        <div class="card-body small">
            <a class="text-decoration-none" href="post.php">Back </a> / <span class="text-muted"><?php echo $row['title'] ?></span>
        </div>
    </div>
    <h3 class="pt-2" style="padding-left:15px;"><?php echo $row['title'] ?></h3>
    <p class="pt-4" style="padding-left:15px;"><?php echo $row['content'] ?></p>    
</body>
</html>