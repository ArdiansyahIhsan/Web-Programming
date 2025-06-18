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

    <title>Edit</title>
</head>
<body>

<div class="container mt-5">

    <?php include('pesan.php'); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Book Edit
                        <a href="Admin.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <?php
                    if (isset($_GET['ID_Buku'])) {
                        $ID_Buku = mysqli_real_escape_string($koneksi, $_GET['ID_Buku']);
                        $query = "SELECT * FROM buku WHERE ID_Buku='$ID_Buku' ";
                        $query_run = mysqli_query($koneksi, $query);

                        if (mysqli_num_rows($query_run) > 0) {
                            $data_bk = mysqli_fetch_array($query_run);
                            ?>
                            <form action="code.php" method="POST">
                                <input type="hidden" name="ID_Buku" value="<?= $data_bk['ID_Buku']; ?>">

                                <div class="mb-3">
                                    <label>Kategori</label>
                                    <input type="text" name="Kategori" value="<?= $data_bk['Kategori']; ?>"
                                           class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Nama Buku</label>
                                    <input type="text" name="Nama_Buku" value="<?= $data_bk['Nama_Buku']; ?>"
                                           class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Harga</label>
                                    <input type="text" name="Harga" value="<?= $data_bk['Harga']; ?>"
                                           class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Stok</label>
                                    <input type="text" name="Stok" value="<?= $data_bk['Stok']; ?>"
                                           class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Penerbit</label>
                                    <input type="text" name="Penerbit" value="<?= $data_bk['Penerbit']; ?>"
                                           class="form-control">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" name="update_book" class="btn btn-primary">
                                        Update Book
                                    </button>
                                </div>

                            </form>
                            <?php
                        } else {
                            echo "<h4>No Such Id Found</h4>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>