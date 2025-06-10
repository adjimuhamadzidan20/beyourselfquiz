<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'beyorselfquiz';

$connect = mysqli_connect($host, $username, $password, $database);
if (!$connect) {
    echo 'koneksi database gagal, ' . mysqli_connect_error();
}
