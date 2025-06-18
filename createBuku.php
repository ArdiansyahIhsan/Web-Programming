<?php
    session_start();
    ?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Book Create</title>
</head>
<body>

<div class="container mt-5">

    <?php include('pesan.php'); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add Book
                        <a href="index.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST">

                        <div class="mb-3">
                            <label>ID Buku</label>
                            <input type="text" name="ID_Buku" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Kategori</label>
                            <input type="text" name="Kategori" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Nama Buku</label>
                            <input type="text" name="Nama_Buku" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Harga</label>
                            <input type="text" name="Harga" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Stok</label>
                            <input type="text" name="Stok" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Penerbit</label>
                            <input type="text" name="Penerbit" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="save_book" class="btn btn-primary">Save Data</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>