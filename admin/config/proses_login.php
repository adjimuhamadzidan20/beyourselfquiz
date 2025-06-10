<?php
require 'connectdb.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE username = '$username'";
    $query = mysqli_query($connect, $sql);
    $data = mysqli_fetch_assoc($query);

    if (mysqli_num_rows($query) == 1) {
        if (password_verify($password, $data['password'])) {
            $_SESSION['login'] = true;
            $_SESSION['id_admin'] = $data['id_admin'];
            $_SESSION['username'] = $data['username'];
            $_SESSION['nama_admin'] = $data['nama_admin'];
            $_SESSION['gender'] = $data['jenis_kelamin'];
            $_SESSION['email'] = $data['email'];

            header('Location: ../index.php');
            exit;
        }
    }

    // else {
    //     $_SESSION['pesan'] = 'Username atau password salah!';
    //     $_SESSION['status'] = 'danger';

    //     header('Location: ../../login_admin.php');
    //     exit;
    // }
}
