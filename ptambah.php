<?php
include 'konek.php';
$nama = htmlspecialchars($_POST["barang"]);
$warna = htmlspecialchars($_POST["wr"]);
$stok = htmlspecialchars($_POST["stk"]);


$query = "INSERT INTO tb_data values(
		'','$nama','$warna','$stok'
	)";

$ngen = mysqli_query($konek, $query);

// var_dump($query);

// untuk mengecek ada baris yang berubah atau nggak jika berhasil maka nilai nya 1 jika tidak maka nilainya itu -1
// kenapa kalau berhasil itu nilai nya 1 itu karena jika berhasil berarti ada 1 baris yang yang berubah dalam database
// jadi nge ceknya itu $konek itu lebih besar dari $konek gak? kan jika berhasil itu kan nilai nya 1 jadi harus menggunakan > 1
if (mysqli_affected_rows($konek) > 0) {
	echo "<script>alert('berhasil mengisi data'); window.location.href = 'tampil.php'</script>";
} else {
	echo "haha gagal";
}

?>

<!-- ngecek berhasil nggak nya itu menggunakan mysqli_affected_rows -->