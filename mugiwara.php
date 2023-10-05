<?php
include 'konek.php';
session_start();
// cek cookie
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
	$id = $_COOKIE['id'];
	$key = $_COOKIE['key'];
	// ambil username berdasarkan id
	$result = mysqli_query($konek, "SELECT username FROM user WHERE id = $id");
	$row = mysqli_fetch_assoc($result);

	// cek cookie dan username
	if ($key === hash('sha256', $row['username'])) {
		$_SESSION['plogin'] = true;
	}

}
if (!isset($_SESSION['plogin'])) {
	header('Location:index.php');
}
?>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<title>SOBAT GURUN AIRLINE</title>
	<style>
		.haha ul li {
			display: inline-block;
			margin: 95px;
			text-align: center;
			font-size: 20px;
			font-weight: 500px;
		}

		.haha {
			margin-left: 15%;
		}

		.hehe {
			background: hotpink;
			padding: 20px;
			border-radius: 24px;
			color: white;
		}

		.huhu {
			background: green;
			padding: 20px;
			border-radius: 24px;
			color: white;
		}

		.hihi {
			background: tomato;
			padding: 20px;
			border-radius: 24px;
			color: white;
		}

		.pitik ul li {
			display: inline-block;
			margin: 95px;
			text-align: center;
			font-size: 20px;
			font-weight: 500px;
		}

		.pitik {
			margin-left: 12%;
		}

		.a {
			background: red;
			padding: 20px;
			border-radius: 24px;
			color: white;
			width: 263px;
		}

		.b {
			background: blue;
			padding: 20px;
			border-radius: 24px;
			color: white;
			width: 300px;
		}

		.c {
			background: lightskyblue;
			padding: 20px;
			border-radius: 24px;
			color: white;
			width: 350px;
		}

		footer {
			background: orange;
			padding: 20px;
			margin-top: 6%;
		}

		p {
			text-align: center;
			color: white;
		}
	</style>
</head>

<body>
	<!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-warning">
		<div class="container">
			<a class="navbar-brand" href="mugiwara.php">SOBAT GURUN AIRLINE</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="mugiwara.php">DASHBOARD</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="tampil.php">TAMPILAN DATA</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
							data-bs-toggle="dropdown" aria-expanded="false">
							LAINNYA
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="tambah.php">Tambah Data</a></li>
							<li><a class="dropdown-item" href="tampil.php">Another action</a></li>
							<li>
								<hr class="dropdown-divider">
							</li>
							<li><a class="dropdown-item" href="keluar.php"
									onclick="return confirm('ANDA YAKIN MAU KELUAR NAK')">LOGOUT</a></li>
						</ul>
				</ul>
				<form class="d-flex">
					<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-light" type="submit">Search</button>
				</form>
			</div>
		</div>
	</nav>
	<!-- akhir navbar -->

	<!-- vruyfgu4 -->
	<div class="haha">
		<ul>
			<li class="hehe ms-4"><i class="bi bi-person-check fs-1 me-3"></i>JUMLAH KARYAWAN
				<hr>1000++ MAKHLUK
			</li>
			<li class="huhu"><i class="bi bi-truck fs-1 me-3"></i>JUMLAH TRANSPORTASI
				<hr>BANYAK
			</li>
			<li class="hihi"><i class="bi bi-currency-dollar fs-1 me-3"></i>PENDAPATAN PERTAHUN
				<hr>100 M
			</li>
		</ul>
	</div>
	<!-- bpiyubxuw -->
	<div class="pitik mb-1">
		<ul>
			<li class="a"><i class="bi bi-instagram fs-1"></i>
				<hr><a href="#" style="color: white; text-decoration: none;">INSTAGRAM</a>
			</li>
			<li class="b"><i class="bi bi-facebook fs-1"></i>
				<hr><a href="#" style="color: white; text-decoration: none;">FACEBOOK</a>
			</li>
			<li class="c"><i class="bi bi-twitter fs-1"></i>
				<hr><a href="#" style="color: white; text-decoration: none;">TWITTER</a>
			</li>
		</ul>
	</div>

	<!-- footer -->
	<footer>
		<p>COPYRIGHT &copy ALEALIEN 2022-2500</p>
	</footer>
	<!-- akhir footer -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
		crossorigin="anonymous"></script>
</body>

</html>