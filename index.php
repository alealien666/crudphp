<?php
include 'konek.php';
?>
<!DOCTYPE html>
<html>

<head>
	<title>LOGIN NAK</title>
	<style>
		body {
			padding: 0;
			margin: 0;
			font-family: arial;
			background: #34495e;
		}

		.haha {
			width: 300px;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			text-align: center;
			padding: 40px;
			margin: 20px auto;
			background: #191919;
			border-radius: 24px;
		}

		h2 {
			font-weight: 500px;
			color: white;
			text-transform: uppercase;
		}

		.input {
			background: none;
			border: 0;
			display: block;
			width: 200px;
			text-align: center;
			margin: 20px auto;
			padding: 10px 14px;
			outline: none;
			color: white;
			border-radius: 24px;
			border: 2px solid #3498db;
			transition: 0.25s;
		}

		.input:focus {
			width: 280px;
			border-color: #2ecc71;
		}

		.btn {
			background: none;
			border: 0;
			display: block;
			text-align: center;
			margin: 20px auto;
			padding: 10px 40px;
			outline: none;
			color: white;
			border-radius: 24px;
			border: 2px solid #2ecc71;
			transition: 0.25s;
			cursor: pointer;
		}

		.btn:hover {
			color: white;
			background: #2ecc71;
		}

		h3 a {
			color: white;
			text-decoration: none;
		}

		h3 a:hover {
			color: #2ecc71;
		}

		.cook {
			color: white;
		}
	</style>
</head>

<body>
	<div class="haha">
		<h2>LOGIN NAK</h2>
		<form action="plogin.php" method="post">
			<input type="text" name="username" placeholder="username" class="input">
			<input type="password" name="password" placeholder="password" class="input">
			<input type="checkbox" name="remember" id="remember">
			<label for="remember" class="cook">Remember me</label>
			<button type="submit" class="btn">LOGIN</button>
			<h3><a href="register.php">REGISTRASI NAK</a></h3>
		</form>
	</div>
</body>

</html>