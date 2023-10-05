<?php
include 'konek.php';
session_start();
if (!isset($_SESSION['plogin'])) {
  header('Location:index.php');
}
$id = $_GET["id"];
$query = mysqli_query($konek, "SELECT * FROM tb_data WHERE id = $id");
$haha = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Hello, world!</title>
  <style>
    .pitik {
      border: 3px solid orange;
      margin-left: 30%;
      width: 600px;
      padding-top: 80px;
      padding-left: 150px;
      box-sizing: border;
      height: 900px;
      margin-top: 40px;
    }

    .input {
      border: 0;
      width: 300px;
      outline: none;
      border: 2px solid orange;
      border-radius: 24px;
      text-align: center;
    }

    .bton {
      border: 2px solid orange;
      padding: 10px 40px;
      cursor: pointer;
      outline: none;
      background: white;
      margin-left: 70px;
      border-radius: 24px;
    }

    .bton:hover {
      color: white;
      background: orange;
    }

    footer {
      background: orange;
      padding: 20px;
      margin-top: 10%;
    }

    h5 {
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
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="mugiwara.php">DASHBOARD</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tampil.php">TAMPILAN DATA</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button"
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
  <h2 style="margin-left: 37%;">SILAHKAN UBAH DATA</h2>
  <div class="pitik">
    <form action="pedit.php" method="post">
      <input type="hidden" name="id" value=<?php echo $haha[0]['id'] ?>>
      <label>NAMA</label><br>
      <input type="text" name="nama" value="<?php echo $haha[0]['nama_barang'] ?>" class="input">
      <br>
      <br>
      <label>WARNA</label><br>
      <input type="text" name="warna" value="<?php echo $haha[0]['warna'] ?>" class="input">
      <br>
      <br>
      <label>STOK</label><br>
      <input type="text" name="stok" value="<?php echo $haha[0]['stok'] ?>" class="input">
      <br>
      <br>
      <button type="submit" class="bton">EDIT</button>
    </form>
  </div>
  <footer>
    <h5>COPYRIGHT &copy alealien 2022-2500</h5>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>


</body>

</html>