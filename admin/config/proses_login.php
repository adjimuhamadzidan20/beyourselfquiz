<?php
require 'connectdb.php';
session_start();

if (isset($_COOKIE['ID']) && isset($_COOKIE['KEY'])) {
    $query = mysqli_query($connect, "SELECT username FROM admin WHERE id_admin = '$_COOKIE[ID]'");
    $res = mysqli_fetch_assoc($query);

    if ($_COOKIE['KEY'] === hash('sha256', $res['username'])) {
        $_SESSION['login'] = true;
    }
}

if (isset($_SESSION['login'])) {
    header('Location: index.php');
    exit;
}

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

            if ($_POST['remember']) {
                setcookie('ID', $data['id_admin'], time() + 60, '/');
                setcookie('KEY', hash('sha256', $data['username']), time() + 60, '/');
            }

            header('Location: ../index.php');
            exit;
        }
    } else {
        $_SESSION['pesan'] = 'Username atau password salah!';
        $_SESSION['status'] = 'danger';

        header('Location: ../login.php');
        exit;
    }
}
