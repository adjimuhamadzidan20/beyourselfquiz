<?php
require 'admin/config/connectdb.php';

if (isset($_GET['hal'])) {
    if ($_GET['hal'] == 'kategori_quiz') {
        include 'section/kategori_quiz.php';
    } else if ($_GET['hal'] == 'form_quiz') {
        include 'section/form_peserta.php';
    } else {
        include 'section/intro.php';
    }
} else {
    include 'section/intro.php';
}
