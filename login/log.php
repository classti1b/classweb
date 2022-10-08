<?php 
include '../koneksi.php';
session_start();

$id = $_POST['id'];
$pass = $_POST['pass'];

$query = mysqli_query($conn, "SELECT * FROM login WHERE uid = '$id' AND pass = '$pass'");
$tampil = mysqli_fetch_array($query);
$cek = mysqli_num_rows($query);

if ($cek > 0) {
	$_SESSION['id'] = $tampil['id'];
	$_SESSION['uid'] = $tampil['uid'];
	$_SESSION['role'] = $tampil['role'];
	header("location:../index.php");
}else{
	header("location:login.php?pesan=Login Gagal");
}

 ?>