<?php
include 'konek.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$warna = $_POST['warna'];
$stok = $_POST['stok'];

$query = "UPDATE tb_data SET 
	nama_barang = '$nama',
	warna = '$warna',
	stok = '$stok' 
	WHERE id = '$id'
";

$result = mysqli_query($konek, $query);

if (mysqli_affected_rows($konek) > 0) {
	echo "<script>alert('berhasil mengubah data'); window.location.href = 'tampil.php'</script>";
} else {
	echo "<script>alert('aokwoakow gagal'); window.location.href = 'edit.php'</script>";
}
?>