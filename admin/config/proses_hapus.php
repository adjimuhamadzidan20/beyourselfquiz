<?php
require 'connectdb.php';
session_start();

if ($_GET['proses'] == 'hapus_kategori') {
    $id = $_POST['id'];

    $sql = "DELETE FROM kategori WHERE id_kategori = '$id'";
    $res = mysqli_query($connect, $sql);

    if ($res) {
        $_SESSION['pesan'] = 'Kategori berhasil terhapus!';
        $_SESSION['status'] = 'success';
    } else {
        $_SESSION['pesan'] = 'Kategori gagal terhapus!';
        $_SESSION['status'] = 'danger';
    }

    header('Location: ../index.php?hal=kategori&section=kategori');
    exit;
} else if ($_GET['proses'] == 'hapus_soal') {
    $id = $_POST['id'];

    $sql = "DELETE FROM soal WHERE id_soal = '$id'";
    $res = mysqli_query($connect, $sql);

    if ($res) {
        $_SESSION['pesan'] = 'Soal kuis berhasil terhapus!';
        $_SESSION['status'] = 'success';
    } else {
        $_SESSION['pesan'] = 'Soal kuis gagal terhapus!';
        $_SESSION['status'] = 'danger';
    }

    header('Location: ../index.php?hal=soal&section=soal');
    exit;
} else if ($_GET['proses'] == 'hapus_admin') {
    $id = $_POST['id'];

    $dataAdmin = mysqli_query($connect, "SELECT * FROM admin");
    $hasil = mysqli_num_rows($dataAdmin);

    if ($hasil == 1) {
        $_SESSION['pesan'] = 'Default admin tidak diperkenankan dihapus!';
        $_SESSION['status'] = 'warning';
    } else {
        $sql = "DELETE FROM admin WHERE id_admin = '$id'";
        $res = mysqli_query($connect, $sql);

        if ($res) {
            $_SESSION['pesan'] = 'Admin berhasil terhapus!';
            $_SESSION['status'] = 'success';
        } else {
            $_SESSION['pesan'] = 'Admin gagal terhapus!';
            $_SESSION['status'] = 'danger';
        }
    }

    header('Location: ../index.php?hal=admin&section=admin');
    exit;
} else if ($_GET['proses'] == 'hapus_skor') {
    $id = $_POST['id'];

    $sql = "DELETE FROM skor WHERE id_skor = '$id'";
    $res = mysqli_query($connect, $sql);

    if ($res) {
        $_SESSION['pesan'] = 'Hasil kuis berhasil terhapus!';
        $_SESSION['status'] = 'success';
    } else {
        $_SESSION['pesan'] = 'Hasil kuis gagal terhapus!';
        $_SESSION['status'] = 'danger';
    }

    header('Location: ../index.php?hal=skor&section=skor');
    exit;
} else if ($_GET['proses'] == 'hapus_riwayat_skor') {
    $sql = "TRUNCATE TABLE skor";
    $res = mysqli_query($connect, $sql);

    if ($res) {
        $_SESSION['pesan'] = 'Riwayat kuis berhasil terhapus!';
        $_SESSION['status'] = 'success';
    } else {
        $_SESSION['pesan'] = 'Riwayat kuis gagal terhapus!';
        $_SESSION['status'] = 'danger';
    }

    header('Location: ../index.php?hal=skor&section=skor');
    exit;
}
