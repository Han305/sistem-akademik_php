<?php
include 'koneksi.php';

$id = $_POST['id'];
$title = $_POST['title'];
$content = $_POST['content'];   

$sql = "UPDATE post SET title = '$title', content = '$content' WHERE id = '$id'";

if ($koneksi->query($sql)) {
    header("Location: dashboard.php");
}else {
    echo "Data Gagal Diubah!";
}

?>