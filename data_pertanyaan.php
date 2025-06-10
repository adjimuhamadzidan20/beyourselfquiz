<?php
require 'admin/config/connectdb.php';

// Get random questions
$sql = "SELECT soal.id_soal, soal.id_kategori, kategori.kategori, soal.pertanyaan, soal.opsi_1, 
soal.opsi_2, soal.opsi_3, soal.opsi_4, soal.jawaban, soal.id_admin, admin.nama_admin FROM soal 
INNER JOIN kategori ON soal.id_kategori = kategori.id_kategori INNER JOIN admin 
ON soal.id_admin = admin.id_admin";

$result = mysqli_query($connect, $sql);

$questions = [];
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $questions[] = $row;
    }
}

// menjadi file json
header('Content-Type: application/json');
echo json_encode($questions);
