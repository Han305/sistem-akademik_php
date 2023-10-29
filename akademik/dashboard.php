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
                        <a class="nav-link text-light" href="post-admin.php">Post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="manage-user.php">Manage User</a>
                    </li>
                    <li class="nav-item" style="margin-left:880px;">
                        <a class="nav-link text-ligth btn btn-danger"  href="logout.php">logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="card-body">
        <a href="tambah.php" class="btn btn-primary">+ Tambah</a>
        <table class="table table-striped">
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Content</th>
                <th>Aksi</th>
            </tr>
            <tr>
                <?php 
                      include('koneksi.php');
                      $no = 1;
                      $query = mysqli_query($koneksi,"SELECT * FROM post");
                      while($row = mysqli_fetch_array($query)){
                  ?>
                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['title'] ?></td>
                      <td><?php echo $row['content'] ?></td>
                      <td class="text-center">
                        <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="hapus.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>
                <?php } ?>
            </tr>
        </table>
    </div>
</body>

</html>