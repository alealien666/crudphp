<?php
include 'konek.php';

session_start();
// jadi ! di sini itu merepresentasikan jika variabel sesi login tidak ada maka user akan di redirect ke halama index.php
if (!isset($_SESSION['plogin'])) {
  header('Location:index.php');
}

$keyword = $_POST['keyword'] ?? '';
if ($keyword == null) {
  $query = mysqli_query($konek, "SELECT * FROM tb_data ORDER BY id DESC");
  $haha = mysqli_fetch_all($query, MYSQLI_ASSOC);
} else {
  $query = mysqli_query($konek, "SELECT * FROM tb_data where nama_barang like '%$keyword%' ");
  $haha = mysqli_fetch_all($query, MYSQLI_ASSOC);
}

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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <style>
    .containerr {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    footer {
      background: orange;
      padding: 20px;
      margin-top: 30%;
    }

    p {
      text-align: center;
      color: white;
    }

    table {
      width: 80%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    th,
    td {
      border: 1px solid orange;
      width: 300px;
    }
  </style>
  <title>index</title>
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
            <a class="nav-link active" href="tampil.php">TAMPILAN DATA</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              LAINNYA
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="tambah.php">Tambah Data</a></li>
              <li><a class="dropdown-item" href="tampil.php">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="keluar.php" onclick="return confirm('MAU KELUAR NAK?')">LOGOUT</a></li>
            </ul>
        </ul>
        <form class="d-flex" action="" method="POST">
          <input class="form-control me-2" name="keyword" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light" type="submit" name="cari">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <!-- akhir navbar -->

  <div class="containerr">
    <table border="1" cellpadding="10" cellspacing="0">
      <tr>
        <th>ID</th>
        <th>NAMA</th>
        <th>WARNA</th>
        <th>STOK</th>
      </tr>
      <?php foreach ($haha as $haha): ?>
        <tr>
          <td>
            <?php echo $haha['id'] ?>
          </td>
          <td>
            <?php echo $haha['nama_barang'] ?>
          </td>
          <td>
            <?php echo $haha['warna'] ?>
          </td>
          <td>
            <?php echo $haha['stok'] ?>
          </td>
          <td>
            <a href="edit.php?id=<?php echo $haha['id'] ?>"><i class="bi bi-pencil bg-primary text-light"
                style="padding: 5px; border-radius: 5px;"></i></a> |
            <a href="hapus.php?id=<?php echo $haha['id'] ?>" onclick="return confirm('YAKIN MAU MENGHAPUSNYA? :(')"><i
                class="bi bi-trash3 bg-danger text-light" style="padding: 5px; border-radius: 5px;"></i></a>
          </td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>

  <footer>
    <p>COPYRIGHT &copy alealien 2022-2500</p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>