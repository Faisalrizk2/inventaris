<?php
include "koneksi.php";

$id = $_POST['id'];
$kode = $_POST['kode_barang'];
$nama = $_POST['nama_barang'];
$jumlah = $_POST['jumlah'];

mysqli_query($koneksi,"UPDATE barang SET
kode_barang='$kode',
nama_barang='$nama',
jumlah='$jumlah'
WHERE id_barang='$id'");

header("location:index.php");
?>