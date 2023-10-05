<?php
// jadi isset itu untuk kmengecek apakah data yang di submit itu udah di kirim lewat request post atau belum
// jika ! itu di gunakan ketika ingin pindah file setelah submit namu pindahnya itu manual lewat url dan gwehj belum menginputkan nama nah itu harus di redirect ke halaman ini lagi
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nama2 = $_POST['nama2'];

    echo "halo $nama nama tetangga kamu $nama2 ya?";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama">
        <br>
        <label for="namatetangga">Nama Tetangga</label>
        <input type="text" name="nama2" id="namatetangga">
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>

</html>