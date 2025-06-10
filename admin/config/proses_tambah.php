<?php
require 'connectdb.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_GET['proses'] == 'kategori') {
        $namaKategori = $_POST['kategori'];

        $dataKategori = mysqli_query($connect, "SELECT * FROM kategori WHERE kategori = '$namaKategori'");
        $hasil = mysqli_num_rows($dataKategori);

        if ($hasil == 1) {
            $_SESSION['pesan'] = 'Kategori sudah ada!';
            $_SESSION['status'] = 'info';
        } else {
            $sql = "INSERT INTO kategori (kategori) VALUES ('$namaKategori')";
            $res = mysqli_query($connect, $sql);

            if ($res) {
                $_SESSION['pesan'] = 'Kategori berhasil ditambahkan!';
                $_SESSION['status'] = 'success';
            } else {
                $_SESSION['pesan'] = 'Kategori gagal ditambahkan!';
                $_SESSION['status'] = 'danger';
            }
        }

        header('Location: ../index.php?hal=kategori&section=kategori');
        exit;
    } else if ($_GET['proses'] == 'soal') {
        $namaKategori = $_POST['kategori'];
        $pertanyaan = $_POST['pertanyaan'];
        $opsiA = $_POST['opsi_a'];
        $opsiB = $_POST['opsi_b'];
        $opsiC = $_POST['opsi_c'];
        $opsiD = $_POST['opsi_d'];
        $jawaban = $_POST['jawaban'];
        $admin = $_SESSION['id_admin'];

        $dataSoal = mysqli_query($connect, "SELECT * FROM soal WHERE pertanyaan = '$pertanyaan'");
        $hasil = mysqli_num_rows($dataSoal);

        if ($hasil == 1) {
            $_SESSION['pesan'] = 'Soal kuis sudah ada!';
            $_SESSION['status'] = 'info';
        } else {
            $sql = "INSERT INTO soal (id_kategori, pertanyaan, opsi_1, opsi_2, opsi_3, opsi_4, jawaban, id_admin) 
        VALUES ('$namaKategori', '$pertanyaan', '$opsiA', '$opsiB', '$opsiC', '$opsiD', '$jawaban', '$admin')";
            $res = mysqli_query($connect, $sql);

            if ($res) {
                $_SESSION['pesan'] = 'Soal kuis berhasil ditambahkan!';
                $_SESSION['status'] = 'success';
            } else {
                $_SESSION['pesan'] = 'Soal kuis gagal ditambahkan!';
                $_SESSION['status'] = 'danger';
            }
        }

        header('Location: ../index.php?hal=soal&section=soal');
        exit;
    } else if ($_GET['proses'] == 'admin') {
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $namaAdmin = $_POST['nama_admin'];
        $jenisKelamin = $_POST['jenis_kelamin'];
        $email = $_POST['email'];

        $dataAdmin = mysqli_query($connect, "SELECT * FROM admin WHERE username = '$username'");
        $hasil = mysqli_num_rows($dataAdmin);

        if ($hasil == 1) {
            $_SESSION['pesan'] = 'Username telah digunakan!';
            $_SESSION['status'] = 'info';
        } else {
            $sql = "INSERT INTO admin VALUES ('', '$username', '$password', '$namaAdmin', '$jenisKelamin', '$email')";
            $res = mysqli_query($connect, $sql);

            if ($res) {
                $_SESSION['pesan'] = 'Admin berhasil ditambahkan!';
                $_SESSION['status'] = 'success';
            } else {
                $_SESSION['pesan'] = 'Admin gagal ditambahkan!';
                $_SESSION['status'] = 'danger';
            }
        }

        header('Location: ../index.php?hal=admin&section=admin');
        exit;
    }
}
