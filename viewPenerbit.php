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

    <title>Tabel Penerbit</title>
</head>
<body>

<div class="container mt-4">

    <?php include('pesan.php'); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Tabel Buku
                        <a href="createPenerbit.php" class="btn btn-primary float-end">Add Penerbit</a>
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID Penerbit</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Kota</th>
                            <th>Telepon</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $query = "SELECT * FROM penerbit";
                        $query_run = mysqli_query($koneksi, $query);

                        if (mysqli_num_rows($query_run) > 0) {
                            foreach ($query_run as $penerbit) {
                                ?>
                                <tr>
                                    <td><?= $penerbit['ID_Penerbit']; ?></td>
                                    <td><?= $penerbit['Nama']; ?></td>
                                    <td><?= $penerbit['Alamat']; ?></td>
                                    <td><?= $penerbit['Kota']; ?></td>
                                    <td><?= $penerbit['Telepon']; ?></td>
                                    <td>
                                        <a href="editPenerbit.php?id=<?= $penerbit['ID_Penerbit']; ?>"
                                           class="btn btn-success btn-sm">Edit</a>
                                        <form action="code.php" method="POST" class="d-inline">
                                            <button type="submit" name="delete_penerbit" value="<?= $penerbit['ID_Penerbit']; ?>"
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