<?php
include 'koneksi.php';

$id = $_POST['id'];
$title = $_POST['title'];
$content = $_POST['content'];   

$sql = "SELECT * FROM post WHERE id = '$id'";

if ($koneksi->query($sql)) {
    header("Location: dashboard.php");
}else {
    echo "Data Gagal Diubah!";
}

?>