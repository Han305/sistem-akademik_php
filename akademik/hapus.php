<?php
include 'koneksi.php';

$id = $_GET['id'];

$sql = "DELETE FROM post where id = $id";

if ($koneksi->query($sql)) {
    header("Location: dashboard.php");
}else {
    echo "Data gagal dihapus";
}

?>