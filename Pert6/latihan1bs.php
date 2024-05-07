<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="logo-toko.webp" class="rounded-pill" style="width:50px">
    </a>
  </div>

  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">Login</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item">Login</a></li>
          <li><a class="dropdown-item">Logout</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">Master</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" id="listbarang" type="button">Barang</a></li>
          <li><a class="dropdown-item" id="listkaryawan" type="button">Karyawan</a></li>
          <li><a class="dropdown-item" id="listsupplier" type="button">Supplier</a></li>
          <li><a class="dropdown-item" id="listkonsumen" type="button">Konsumen</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">Transaksi</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item">Penjualan</a></li>
          <li><a class="dropdown-item">Pembelian</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">Laporan</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item">Laba Rugi</a></li>
          <li><a class="dropdown-item">Persediaan</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>

<div class="container-fluid">
  <div id="isiutama">

  </div>
</div>

<script>
  $(document).ready(function(){
    $("#listbarang").click(function(){
      $('#isiutama').load('Master/listbarang.php');    
    });
  });
</script>

</body>
</html>
