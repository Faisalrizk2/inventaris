<?php
include "koneksi.php";

$id = $_GET['id'];
$data = mysqli_query($koneksi,"SELECT * FROM barang WHERE id_barang='$id'");
$d = mysqli_fetch_array($data);
?>

<h2>Edit Barang</h2>

<form action="update.php" method="POST">

<input type="hidden" name="id" value="<?php echo $d['id_barang']; ?>">

Kode Barang <br>
<input type="text" name="kode_barang" value="<?php echo $d['kode_barang']; ?>"><br><br>

Nama Barang <br>
<input type="text" name="nama_barang" value="<?php echo $d['nama_barang']; ?>"><br><br>

Jumlah <br>
<input type="number" name="jumlah" value="<?php echo $d['jumlah']; ?>"><br><br>

<button type="submit">Update</button>

</form>