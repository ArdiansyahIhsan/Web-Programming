<?php
session_start();
require 'koneksi.php';

// Cek apakah form pencarian telah di-submit
if (isset($_GET['search'])) {
    $search_query = mysqli_real_escape_string($connection, $_GET['search']);
    
    // Tambahkan kueri pencarian ke kueri utama
    $query = "SELECT * FROM buku WHERE (nama_buku LIKE '%$search_query%' OR kategori LIKE '%$search_query%') AND stok < 20";
} else {
    // Kueri utama jika tidak ada pencarian
    $query = "SELECT * FROM buku WHERE stok < 20";
}

$query_run = mysqli_query($koneksi, $query);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>UNIBOOKSTORE</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">UNIBOOKSTORE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin.php">ADMIN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pengadaan.php">PENGADAAN</a>
                </li>
            </ul>
            <form class="d-flex ms-auto" method="GET" action="index.php">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
<div class="container mt-4">

    <?php include('pesan.php'); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Pengadaan
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID Buku</th>
                            <th>Kategori</th>
                            <th>Nama Buku</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Penerbit</th>
                            <th>Kontrol</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if (mysqli_num_rows($query_run) > 0) {
                            foreach ($query_run as $buku) {
                                ?>
                                <tr>
                                    <td><?= $buku['ID_Buku']; ?></td>
                                    <td><?= $buku['Kategori']; ?></td>
                                    <td><?= $buku['Nama_Buku']; ?></td>
                                    <td><?= $buku['Harga']; ?></td>
                                    <td><?= $buku['Stok']; ?></td>
                                    <td><?= $buku['Penerbit']; ?></td>

                                    <td>
                                        <a href="editBuku.php?id=<?= $buku['ID_Buku']; ?>"
                                           class="btn btn-success btn-sm">Edit</a>
                                        <form action="code.php" method="POST" class="d-inline">
                                            <button type="submit" name="delete_book" value="<?= $buku['ID_Buku']; ?>"
                                                    class="btn btn-danger btn-sm">Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                <?php
                            }
                        } else {
                            echo "<h5> No Record Found </h5>";
                        }
                        ?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>