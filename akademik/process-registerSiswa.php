<?php
//include koneksi database
include('koneksi.php');

//get data dari form
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$category = $_POST['category'];

//query insert data ke dalam database
$query = "INSERT INTO user (nama, username, password, category) VALUES ('$nama', '$username', '$password', '$category')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if ($koneksi->query($query)) {
    //redirect ke halaman index.php 
    header("location: login.php");
} else {
    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";
}
?>