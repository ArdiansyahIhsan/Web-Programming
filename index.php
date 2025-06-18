<?php
session_start();
require 'koneksi.php';
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Tabel Buku</title>
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
                        Tabel Buku
                        <a href="createBuku.php" class="btn btn-primary float-end">Add Book</a>
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
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $keyword = isset($_GET['search']) ? $_GET['search'] : '';
                        $query = "SELECT * FROM buku";
                        
                        if ($keyword != '') {
                            $query = $query . " WHERE Nama_Buku LIKE '%$keyword%' ";
                        }
                        

                        
                        $query_run = mysqli_query($koneksi, $query);

                        if (mysqli_num_rows($query_run) > 0) {
                            foreach ($query_run as $data_bk) {
                                ?>
                                <tr>
                                    <td><?= $data_bk['ID_Buku']; ?></td>
                                    <td><?= $data_bk['Kategori']; ?></td>
                                    <td><?= $data_bk['Nama_Buku']; ?></td>
                                    <td><?= $data_bk['Harga']; ?></td>
                                    <td><?= $data_bk['Stok']; ?></td>
                                    <td><?= $data_bk['Penerbit']; ?></td>
                                    <td>
                                    <a href="editBuku.php?ID_Buku=<?= $data_bk['ID_Buku']; ?>" 
                                    class="btn btn-success btn-sm">Edit</a>


                                        <form action="code.php" method="POST" class="d-inline">
                                            <button type="submit" name="delete_book" value="<?= $data_bk['ID_Buku']; ?>"
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