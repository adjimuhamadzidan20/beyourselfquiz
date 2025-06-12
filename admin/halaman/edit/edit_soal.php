<?php

$sql = "SELECT * FROM kategori";
$hasil = mysqli_query($connect, $sql);

$id = $_GET['id'];
$sqlSoal = "SELECT soal.id_soal, soal.id_kategori, kategori.kategori, soal.pertanyaan, soal.opsi_1, soal.opsi_2, 
soal.opsi_3, soal.opsi_4, soal.jawaban, soal.id_admin, admin.nama_admin FROM soal INNER JOIN kategori ON 
soal.id_kategori = kategori.id_kategori INNER JOIN admin ON soal.id_admin = admin.id_admin WHERE soal.id_soal = '$id'";
$hasilSoal = mysqli_query($connect, $sqlSoal);
$dataSoal = mysqli_fetch_assoc($hasilSoal);

?>

<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="overview-wrap">
                    <h2 class="title-1">Ubah Data Soal</h2>
                </div>
            </div>
        </div>
        <div class="row m-t-25">
            <div class="col">
                <div class="card">
                    <div class="card-body card-block">
                        <form action="config/proses_edit.php?proses=edit_soal&id=<?= $dataSoal['id_soal']; ?>" method="post">
                            <div class="form-group">
                                <label for="kategori" class=" form-control-label">Kategori</label>
                                <select id="kategori" class="form-control" name="kategori" required>
                                    <option value="<?= $dataSoal['id_kategori']; ?>" selected><?= $dataSoal['kategori']; ?></option>
                                    <?php
                                    while ($data = mysqli_fetch_assoc($hasil)) :
                                    ?>
                                        <option value="<?= $data['id_kategori']; ?>"><?= $data['kategori']; ?></option>
                                    <?php
                                    endwhile;
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="pertanyaan" class=" form-control-label">Pertanyaan</label>
                                <input type="text" id="pertanyaan" class="form-control" name="pertanyaan" value="<?= $dataSoal['pertanyaan']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="opsi_a" class=" form-control-label">Opsi A</label>
                                <input type="text" id="opsi_a" class="form-control" name="opsi_a" value="<?= $dataSoal['opsi_1']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="opsi_b" class=" form-control-label">Opsi B</label>
                                <input type="text" id="opsi_b" class="form-control" name="opsi_b" value="<?= $dataSoal['opsi_2']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="opsi_c" class=" form-control-label">Opsi C</label>
                                <input type="text" id="opsi_c" class="form-control" name="opsi_c" value="<?= $dataSoal['opsi_3']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="opsi_d" class=" form-control-label">Opsi D</label>
                                <input type="text" id="opsi_d" class="form-control" name="opsi_d" value="<?= $dataSoal['opsi_4']; ?>" required>
                            </div>
                            <div class="form-group m-b-25">
                                <label for="jawaban" class=" form-control-label">Jawaban (A, B, C, D)</label>
                                <select id="jawaban" class="form-control" name="jawaban" required>
                                    <option value="<?= $dataSoal['jawaban']; ?>" selected>Opsi <?= $dataSoal['jawaban']; ?> (<?= $dataSoal['jawaban']; ?>)</option>
                                    <option value="A">Opsi A (A)</option>
                                    <option value="B">Opsi B (B)</option>
                                    <option value="C">Opsi C (C)</option>
                                    <option value="D">Opsi D (D)</option>
                                </select>
                            </div>
                            <div class="d-flex justify-content-between">
                                <a href="index.php?hal=soal" class="btn btn-info text-white">Kembali</a>
                                <button type="submit" class="btn btn-info text-white">Ubah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>