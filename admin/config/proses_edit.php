<?php
require 'connectdb.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_GET['proses'] == 'edit_kategori') {
        $id = $_GET['id'];
        $namaKategori = $_POST['kategori'];

        $sql = "UPDATE kategori SET kategori = '$namaKategori' WHERE id_kategori = '$id'";
        $res = mysqli_query($connect, $sql);

        if ($res) {
            $_SESSION['pesan'] = 'Kategori berhasil terubah!';
            $_SESSION['status'] = 'success';
        } else {
            $_SESSION['pesan'] = 'Kategori gagal terubah!';
            $_SESSION['status'] = 'danger';
        }

        header('Location: ../index.php?hal=kategori&section=kategori');
        exit;
    } else if ($_GET['proses'] == 'edit_soal') {
        $id = $_GET['id'];
        $namaKategori = $_POST['kategori'];
        $pertanyaan = $_POST['pertanyaan'];
        $opsiA = $_POST['opsi_a'];
        $opsiB = $_POST['opsi_b'];
        $opsiC = $_POST['opsi_c'];
        $opsiD = $_POST['opsi_d'];
        $jawaban = $_POST['jawaban'];

        $sql = "UPDATE soal SET id_kategori = '$namaKategori', pertanyaan = '$pertanyaan', opsi_1 = '$opsiA', 
        opsi_2 = '$opsiB', opsi_3 = '$opsiC', opsi_4 = '$opsiD', jawaban = '$jawaban' WHERE id_soal = '$id'";
        $res = mysqli_query($connect, $sql);

        if ($res) {
            $_SESSION['pesan'] = 'Soal kuis berhasil terubah!';
            $_SESSION['status'] = 'success';
        } else {
            $_SESSION['pesan'] = 'Soal kuis gagal terubah!';
            $_SESSION['status'] = 'danger';
        }

        header('Location: ../index.php?hal=soal&section=soal');
        exit;
    } else if ($_GET['proses'] == 'edit_admin') {
        $id = $_GET['id'];
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $namaAdmin = $_POST['nama_admin'];
        $jenisKelamin = $_POST['jenis_kelamin'];
        $email = $_POST['email'];

        $sql = "UPDATE admin SET username = '$username', password = '$password', nama_admin = '$namaAdmin', 
        jenis_kelamin = '$jenisKelamin', email = '$email' WHERE id_admin = '$id'";
        $res = mysqli_query($connect, $sql);

        if ($res) {
            $_SESSION['pesan'] = 'Admin berhasil terubah!';
            $_SESSION['status'] = 'success';
        } else {
            $_SESSION['pesan'] = 'Admin gagal terubah!';
            $_SESSION['status'] = 'danger';
        }

        header('Location: ../index.php?hal=admin&section=admin');
        exit;
    }
}
