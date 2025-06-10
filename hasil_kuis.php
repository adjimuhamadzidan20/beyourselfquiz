<?php
require 'admin/config/connectdb.php';

$response = ['success' => false, 'message' => ''];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = json_decode(file_get_contents("php://input"), true);

    if (isset($data['nama_peserta']) && isset($data['hasil_kuis'])) {
        $peserta = $data['nama_peserta'];
        $skor = (int) $data['hasil_kuis'];

        $sql = "INSERT INTO skor (nama_peserta, jumlah_skor) VALUES ('$peserta', '$skor')";
        $hasil = mysqli_query($connect, $sql);

        if ($hasil) {
            $response['success'] = true;
            $response['message'] = 'Hasil kuis berhasil terkirim!';
        } else {
            $response['message'] = 'Error: ' . mysqli_error($connect);
        }
    } else {
        $response['message'] = 'Invalid input data.';
    }
} else {
    $response['message'] = 'Invalid request method.';
}

header('Content-Type: application/json');
echo json_encode($response);
