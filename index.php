<?php
include "koneksi.php";
$data = mysqli_query($koneksi,"SELECT * FROM barang");
?>

<h2>Data Inventaris</h2>
<a href="tambah.php">Tambah Data</a>

<table border="1" cellpadding="10">
<tr>
<th>No</th>
<th>Kode</th>
<th>Nama</th>
<th>Satuan</th>
<th>Harga Beli</th>
<th>Jumlah</th>
<th>Foto</th>
<th>Aksi</th>
</tr>

<?php
$no=1;
while($d=mysqli_fetch_array($data)){
?>

<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $d['kode_barang']; ?></td>
<td><?php echo $d['nama_barang']; ?></td>
<td><?php echo $d['satuan']; ?></td>
<td><?php echo $d['harga_beli']; ?></td>
<td><?php echo $d['jumlah']; ?></td>
<td><img src="upload/<?php echo $d['foto']; ?>" width="80"></td>
<td>
<a href="edit.php?id=<?php echo $d['id_barang']; ?>">Edit</a>
<a href="hapus.php?id=<?php echo $d['id_barang']; ?>">Hapus</a>
</td>
</tr>

<?php } ?>
</table>