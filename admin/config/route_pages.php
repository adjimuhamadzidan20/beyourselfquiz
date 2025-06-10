<?php
require 'connectdb.php';

if (isset($_GET['hal'])) {
    if ($_GET['hal'] == 'dashboard') {
        include 'halaman/beranda.php';
    } else if ($_GET['hal'] == 'kategori') {
        include 'halaman/data_kategori.php';
    } else if ($_GET['hal'] == 'tambah_kategori') {
        include 'halaman/tambah/tambah_kategori.php';
    } else if ($_GET['hal'] == 'edit_kategori') {
        include 'halaman/edit/edit_kategori.php';
    } else if ($_GET['hal'] == 'soal') {
        include 'halaman/data_soal.php';
    } else if ($_GET['hal'] == 'tambah_soal') {
        include 'halaman/tambah/tambah_soal.php';
    } else if ($_GET['hal'] == 'edit_soal') {
        include 'halaman/edit/edit_soal.php';
    } else if ($_GET['hal'] == 'skor') {
        include 'halaman/data_peserta.php';
    } else if ($_GET['hal'] == 'admin') {
        include 'halaman/data_admin.php';
    } else if ($_GET['hal'] == 'tambah_admin') {
        include 'halaman/tambah/tambah_admin.php';
    } else if ($_GET['hal'] == 'edit_admin') {
        include 'halaman/edit/edit_admin.php';
    } else if ($_GET['hal'] == 'info_akun') {
        include 'halaman/info_akun.php';
    } else {
        include 'halaman/beranda.php';
    }
} else {
    include 'halaman/beranda.php';
}
