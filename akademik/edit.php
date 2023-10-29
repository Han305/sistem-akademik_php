<?php
include('koneksi.php');
$id = $_GET['id'];
$query = "SELECT * FROM post WHERE id = $id LIMIT 1";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_array($result);
?>

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
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark mb-5">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="post-admin.php">SMKN 17</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="login.php">Post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="select.php">Manage User</a>
                    </li>
                    <li class="nav-item" style="margin-left:880px;">
                        <a class="nav-link text-ligth btn btn-danger"  href="logout.php">logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="card" style="margin:3rem">
        <div class="card-body">
            <form action="proses-update.php" method="post">
                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                <div class="mb-3">
                    <label>Title</label>
                <input type="text" name="title" value="<?php echo $row['title'] ?>" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Content</label>
                    <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3"><?php echo $row['content'] ?></textarea>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
    </div>
</body>
</html>