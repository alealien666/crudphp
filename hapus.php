<?php
include 'konek.php';
$id = $_GET['id'];

$query = mysqli_query($konek, "DELETE FROM tb_data WHERE id='$id' ");

header('location:tampil.php');
?>