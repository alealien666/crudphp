<?php
include 'konek.php';
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($konek, "SELECT * FROM user WHERE 
    username = '$username'");

if ($username == null && $password == null) {
    header('Location:index.php');
} else if (mysqli_num_rows($query) === 1) {
    $row = mysqli_fetch_assoc($query);

    if (password_verify($password, $row['password'])) {
        $_SESSION['plogin'] = true;

        // cek remember me / cookie
        if (isset($_POST['remember'])) {
            //ini mengatur cookie yang biasa yang gampang ke colong
            // setcookie('plogin', 'true', time() + 60, '/');
            // yang bener itu di set menggunakan id user dan username yang di hash
            setcookie('id', $row['id'], time() + 60, '/'); //ini id
            setcookie('key', hash('sha256', $row['username']), time() + 60, '/'); //ini aslinya username tapi tak ganti menjadi key agar tidak ketahuan di console. sha256 itu bawaan php 
        }
        echo "<script>alert('berhasil melakukan login..'); window.location = 'mugiwara.php'</script>";

    }

} else {
    echo "<script>alert('gagal melakukan login.. periksa username atau password anda'); window.location = 'index.php'</script>";
}

?>