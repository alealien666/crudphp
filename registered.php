<?php
include 'konek.php';
$username = $_POST['username'];
$password = $_POST['password'];

$hashed_pass = password_hash($password, PASSWORD_BCRYPT);

$query = mysqli_query($konek, "INSERT INTO user (username, password) values ('$username', '$hashed_pass')");

if ($query) {
	echo "<script>alert('berhasil melakukan registrasi'); window.location.href = 'index.php'</script>";
} else {
	echo "<script>alert('gagal melakukan registrasi'); window.location.href = 'register.php'</script>";

}

?>