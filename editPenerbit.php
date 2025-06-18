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
                    <h4>Penerbit Edit
                        <a href="Admin.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <?php
                    if (isset($_GET['ID_Penerbit'])) {
                        $ID_Penerbit = mysqli_real_escape_string($koneksi, $_GET['ID_Penerbit']);
                        $query = "SELECT * FROM penerbit WHERE ID_Penerbit='$ID_Penerbit' ";
                        $query_run = mysqli_query($koneksi, $query);

                        if (mysqli_num_rows($query_run) > 0) {
                            $penerbit = mysqli_fetch_array($query_run);
                            ?>
                            <form action="code.php" method="POST">
                            <input type="hidden" name="ID_Penerbit" value="<?= $penerbit['ID_Penerbit']; ?>">
                                <div class="mb-3">
                                    <label>Nama</label>
                                    <input type="text" name="Nama" value="<?= $penerbit['Nama']; ?>" class="form-control">
                                           
                                </div>
                                <div class="mb-3">
                                    <label>Alamat</label>
                                    <input type="text" name="Alamat" value="<?= $penerbit['Alamat']; ?>" class="form-control">
                                           
                                </div>
                                <div class="mb-3">
                                    <label>Kota</label>
                                    <input type="text" name="Kota" value="<?= $penerbit['Kota']; ?>" class="form-control">
                                           
                                </div>
                                <div class="mb-3">
                                    <label>Telepon</label>
                                    <input type="text" name="Telepon" value="<?= $penerbit['Telepon']; ?>" class="form-control">"
                                           
                                </div>
                                <div class="mb-3">
                                    <button type="submit" name="update_penerbit" class="btn btn-primary">
                                        Update Penerbit
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