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

    <title>Penerbit Create</title>
</head>
<body>

<div class="container mt-5">

    <?php include('pesan.php'); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Penerbit Add
                        <a href="Admin.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST">

                        <div class="mb-3">
                            <label>ID Penerbit</label>
                            <input type="text" name="ID_Penerbit" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Nama</label>
                            <input type="text" name="Nama" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Alamat</label>
                            <input type="text" name="Alamat" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Kota</label>
                            <input type="text" name="Kota" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Telepon</label>
                            <input type="text" name="Telepon" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="save_penerbit" class="btn btn-primary">Save Data</button>
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