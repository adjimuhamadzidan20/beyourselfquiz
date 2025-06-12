<?php

$sql = "SELECT * FROM kategori";
$hasil = mysqli_query($connect, $sql);

?>

<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="overview-wrap">
                    <h2 class="title-1">Tambah Soal Baru</h2>
                </div>
            </div>
        </div>
        <div class="row m-t-15">
            <div class="col">
                <div class="card">
                    <div class="card-body card-block">
                        <form action="config/proses_tambah.php?proses=soal&section=soal" method="post">
                            <div class="form-group">
                                <label for="kategori" class=" form-control-label">Kategori</label>
                                <select id="kategori" class="form-control" name="kategori" required>
                                    <option value="" selected>-- Pilih Kategori --</option>
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
                                <input type="text" id="pertanyaan" placeholder="Pertanyaan" class="form-control" name="pertanyaan" required>
                            </div>
                            <div class="form-group">
                                <label for="opsi_a" class=" form-control-label">Opsi A</label>
                                <input type="text" id="opsi_a" placeholder="Masukkan Opsi A" class="form-control" name="opsi_a" required>
                            </div>
                            <div class="form-group">
                                <label for="opsi_b" class=" form-control-label">Opsi B</label>
                                <input type="text" id="opsi_b" placeholder="Masukkan Opsi B" class="form-control" name="opsi_b" required>
                            </div>
                            <div class="form-group">
                                <label for="opsi_c" class=" form-control-label">Opsi C</label>
                                <input type="text" id="opsi_c" placeholder="Masukkan Opsi C" class="form-control" name="opsi_c" required>
                            </div>
                            <div class="form-group">
                                <label for="opsi_d" class=" form-control-label">Opsi D</label>
                                <input type="text" id="opsi_d" placeholder="Masukkan Opsi D" class="form-control" name="opsi_d" required>
                            </div>
                            <div class="form-group m-b-25">
                                <label for="jawaban" class=" form-control-label">Jawaban (A, B, C, D)</label>
                                <select id="jawaban" class="form-control" name="jawaban" required>
                                    <option value="" selected>-- Pilih Jawaban --</option>
                                    <option value="A">Opsi A (A)</option>
                                    <option value="B">Opsi B (B)</option>
                                    <option value="C">Opsi C (C)</option>
                                    <option value="D">Opsi D (D)</option>
                                </select>
                            </div>
                            <div class="d-flex justify-content-between">
                                <a href="index.php?hal=soal&section=soal" class="btn btn-info text-white">Kembali</a>
                                <button type="submit" class="btn btn-info text-white">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>