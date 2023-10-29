<?php
include 'koneksi.php';

$title = $_POST['title'];
$content = $_POST['content'];

$sql = "INSERT INTO post (title, content) VALUES ('$title', '$content')";

if ($koneksi->query($sql)) {
    header("Location: dashboard.php");
}else{
    header("Location: tambah.php?statu=gagal");
}