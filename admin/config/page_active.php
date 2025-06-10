<?php

if (@$_GET['section'] == 'dashboard') {
    $active1 = 'active';
    $active2 = '';
    $active3 = '';
    $active4 = '';
    $active5 = '';
} else if (@$_GET['section'] == 'kategori' || @$_GET['section'] == 'tambah_kategori' || @$_GET['section'] == 'edit_kategori') {
    $active1 = '';
    $active2 = 'active';
    $active3 = '';
    $active4 = '';
    $active5 = '';
} else if (@$_GET['section'] == 'soal' || @$_GET['section'] == 'tambah_soal' || @$_GET['section'] == 'edit_soal') {
    $active1 = '';
    $active2 = '';
    $active3 = 'active';
    $active4 = '';
    $active5 = '';
} else if (@$_GET['section'] == 'skor') {
    $active1 = '';
    $active2 = '';
    $active3 = '';
    $active4 = 'active';
    $active5 = '';
} else if (@$_GET['section'] == 'admin' || @$_GET['section'] == 'tambah_admin' || @$_GET['section'] == 'edit_admin') {
    $active1 = '';
    $active2 = '';
    $active3 = '';
    $active4 = '';
    $active5 = 'active';
} else {
    $active1 = 'active';
    $active2 = '';
    $active3 = '';
    $active4 = '';
    $active5 = '';
}
