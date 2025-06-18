<?php
session_start();
require 'koneksi.php';

if (isset($_POST['delete_book'])) {
    $ID_Buku = mysqli_real_escape_string($koneksi, $_POST['delete_book']);

    $query = "DELETE FROM buku WHERE ID_Buku='$ID_Buku' ";
    $query_run = mysqli_query($koneksi, $query);

    if ($query_run) {
        $_SESSION['pesan'] = "Book Deleted Successfully";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['pesan'] = "Book Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if (isset($_POST['update_book'])) {
    $ID_Buku = mysqli_real_escape_string($koneksi, $_POST['ID_Buku']);
    $Kategori = mysqli_real_escape_string($koneksi, $_POST['Kategori']);
    $Nama_Buku = mysqli_real_escape_string($koneksi, $_POST['Nama_Buku']);
    $Harga = mysqli_real_escape_string($koneksi, $_POST['Harga']);
    $Stok = mysqli_real_escape_string($koneksi, $_POST['Stok']);
    $Penerbit = mysqli_real_escape_string($koneksi, $_POST['Penerbit']);

    $query = "UPDATE buku SET ID_Buku='$ID_Buku', Kategori='$Kategori', Nama_Buku='$Nama_Buku', Harga='$Harga', Stok='$Stok', Penerbit='$Penerbit' WHERE ID_Buku='$ID_Buku' ";
    $query_run = mysqli_query($koneksi, $query);

    if ($query_run) {
        $_SESSION['pesan'] = "Book Updated Successfully";
        header("Location: editBuku.php");
        exit(0);
    } else {
        $_SESSION['pesan'] = "Book Not Updated";
        header("Location: editBuku.php");
        exit(0);
    }

}


if (isset($_POST['save_book'])) {
    $ID_Buku = mysqli_real_escape_string($koneksi, $_POST['ID_Buku']);
    $Kategori = mysqli_real_escape_string($koneksi, $_POST['Kategori']);
    $Nama_Buku = mysqli_real_escape_string($koneksi, $_POST['Nama_Buku']);
    $Harga = mysqli_real_escape_string($koneksi, $_POST['Harga']);
    $Stok = mysqli_real_escape_string($koneksi, $_POST['Stok']);
    $Penerbit = mysqli_real_escape_string($koneksi, $_POST['Penerbit']);

    $query = "INSERT INTO buku (ID_Buku,Kategori,Nama_Buku,Harga,Stok,Penerbit) VALUES ('$ID_Buku','$Kategori','$Nama_Buku',$Harga,$Stok,'$Penerbit')";

    $query_run = mysqli_query($koneksi, $query);
    if ($query_run) {
        $_SESSION['pesan'] = "Book Created Successfully";
        header("Location: createBuku.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Book Not Created";
        header("Location: createBuku.php");
        exit(0);
    }
}

if (isset($_POST['delete_penerbit'])) {
    $ID_Penerbit = mysqli_real_escape_string($koneksi, $_POST['delete_penerbit']);

    $query = "DELETE FROM penerbit WHERE ID_Penerbit='$ID_Penerbit' ";
    $query_run = mysqli_query($koneksi, $query);

    if ($query_run) {
        $_SESSION['pesan'] = "Penerbit Deleted Successfully";
        header("Location: viewPenerbit.php");
        exit(0);
    } else {
        $_SESSION['pesan'] = "Book Not Deleted";
        header("Location: viewPenerbit.php");
        exit(0);
    }
}

if (isset($_POST['update_penerbit'])) {
    $ID_Penerbit = mysqli_real_escape_string($koneksi, $_POST['ID_Penerbit']);
    $Nama = mysqli_real_escape_string($koneksi, $_POST['Nama']);
    $Alamat = mysqli_real_escape_string($koneksi, $_POST['Alamat']);
    $Kota = mysqli_real_escape_string($koneksi, $_POST['Kota']);
    $Telepon = mysqli_real_escape_string($koneksi, $_POST['Telepon']);

    $query = "UPDATE penerbit SET ID_Penerbit='$ID_Penerbit', Nama='$Nama', Alamat='$Alamat', Kota='$Kota', Telepon='$Telepon' WHERE ID_Penerbit='$ID_Penerbit' ";
    $query_run = mysqli_query($koneksi, $query);

    if ($query_run) {
        $_SESSION['pesan'] = "Penerbit Updated Successfully";
        header("Location: editPenerbit.php");
        exit(0);
    } else {
        $_SESSION['pesan'] = "Book Not Updated";
        header("Location: editPenerbit.php");
        exit(0);
    }

}

if (isset($_POST['save_penerbit'])) {
    $ID_Penerbit = mysqli_real_escape_string($koneksi, $_POST['ID_Penerbit']);
    $Nama = mysqli_real_escape_string($koneksi, $_POST['Nama']);
    $Alamat = mysqli_real_escape_string($koneksi, $_POST['Alamat']);
    $Kota = mysqli_real_escape_string($koneksi, $_POST['Kota']);
    $Telepon = mysqli_real_escape_string($koneksi, $_POST['Telepon']);

    $query = "INSERT INTO penerbit (ID_Penerbit,Nama,Alamat,Kota,Telepon) VALUES ('$ID_Penerbit','$Nama','$Alamat','$Kota',$Telepon)";

    $query_run = mysqli_query($koneksi, $query);
    if ($query_run) {
        $_SESSION['pesan'] = "Penerbit Created Successfully";
        header("Location: createPenerbit.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Penerbit Not Created";
        header("Location: createPenerbit.php");
        exit(0);
    }
}
?>