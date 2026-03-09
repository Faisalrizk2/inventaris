<?php
include "koneksi.php";

$kode = $_POST['kode_barang'];
$nama = $_POST['nama_barang'];
$satuan = $_POST['satuan'];
$hb = $_POST['harga_beli'];
$hj = $_POST['harga_jual'];
$jumlah = $_POST['jumlah'];
$tgl = $_POST['tanggal_masuk'];
$ket = $_POST['keterangan'];

$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

move_uploaded_file($tmp,"upload/".$foto);

mysqli_query($koneksi,"INSERT INTO barang VALUES(
'',
'$kode',
'$nama',
'$satuan',
'$hb',
'$hj',
'$jumlah',
'$tgl',
'$ket',
'$foto'
)");

header("location:index.php");
?>