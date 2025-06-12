<?php
$sql = "SELECT soal.id_soal, soal.id_kategori, kategori.kategori, soal.pertanyaan, soal.opsi_1, soal.opsi_2, 
soal.opsi_3, soal.opsi_4, soal.jawaban, soal.id_admin, admin.nama_admin FROM soal INNER JOIN kategori ON 
soal.id_kategori = kategori.id_kategori INNER JOIN admin ON soal.id_admin = admin.id_admin";

$hasil = mysqli_query($connect, $sql);
$jumlahData = mysqli_num_rows($hasil);

?>

<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="overview-wrap">
                    <h2 class="title-1">Data Soal Kuis</h2>
                </div>
            </div>
        </div>
        <div class="card m-t-15">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span class="d-none d-md-block">Tabel soal pertanyaan kuis</span>
                <a href="index.php?hal=tambah_soal&section=tambah_soal" class="btn btn-info text-white"><i class="fas fa-plus"></i> Tambah Soal Baru</a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <?php
                            if ($jumlahData > 0) {
                            ?>
                                <table class="table table-bordered" id="example">
                                    <thead>
                                        <tr>
                                            <th class="text-center text-nowrap">No</th>
                                            <th class="text-nowrap">Kategori</th>
                                            <th class="text-nowrap">Pertanyaan</th>
                                            <th class="text-center text-nowrap">Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 0;
                                        while ($data = mysqli_fetch_assoc($hasil)) :
                                            $no++;
                                        ?>
                                            <tr>
                                                <td class="text-center" nowrap="nowrap"><?= $no; ?></td>
                                                <td nowrap="nowrap"><?= $data['kategori']; ?></td>
                                                <td nowrap="nowrap"><?= $data['pertanyaan']; ?></td>
                                                <td class="text-center" nowrap="nowrap">
                                                    <button type="button"
                                                        data-toggle="modal"
                                                        data-target="#detailModal"
                                                        data-id="<?= $data['id_soal']; ?>"
                                                        data-kategori="<?= $data['kategori']; ?>"
                                                        data-pertanyaan="<?= $data['pertanyaan']; ?>"
                                                        data-opsi1="<?= $data['opsi_1']; ?>"
                                                        data-opsi2="<?= $data['opsi_2']; ?>"
                                                        data-opsi3="<?= $data['opsi_3']; ?>"
                                                        data-opsi4="<?= $data['opsi_4']; ?>"
                                                        data-jawaban="<?= $data['jawaban']; ?>"
                                                        data-admin="<?= $data['nama_admin']; ?>"
                                                        class="btn btn-info text-white btn-sm" title="detail"><i class="fas fa-eye"></i></button>
                                                    <a href="index.php?hal=edit_soal&id=<?= $data['id_soal']; ?>&section=edit_soal" class="btn btn-info text-white btn-sm" title="ubah"><i class="fas fa-edit"></i></a>
                                                    <button type="button" class="btn btn-info text-white btn-sm" data-toggle="modal" data-target="#hapusSoal" data-id="<?= $data['id_soal']; ?>" title="hapus"><i class="fas fa-trash"></i></button>
                                                </td>
                                            </tr>
                                        <?php
                                        endwhile;
                                        ?>
                                    </tbody>
                                </table>
                            <?php
                            } else {
                            ?>
                                <div class="alert alert-info" role="alert">
                                    Belum ada data soal kuis..
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal medium -->
<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Detail Soal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="m-b-15">
                    <p class="fw-bold"><b>Kategori Soal :</b></p><span id="kategori"></span>
                </div>
                <div>
                    <p class="fw-bold"><b>Pertanyaan :</b></p><span id="pertanyaan"></span>
                </div>
                <div class="m-t-15 m-b-15">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" id="opsiA">
                        </li>
                        <li class="list-group-item" id="opsiB">
                        </li>
                        <li class="list-group-item" id="opsiC">
                        </li>
                        <li class="list-group-item" id="opsiD">
                        </li>
                    </ul>
                </div>
                <div class="m-b-15">
                    <p class="fw-bold"><b>Jawaban yang benar :</b></p><span id="jawaban"></span>
                </div>
                <div>
                    <p class="fw-bold"><b>Penyusun pertanyaan :</b></p><span id="admin"></span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal medium -->

<!-- modal small -->
<div class="modal fade" id="hapusSoal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="smallmodalLabel">Hapus Soal Kuis</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="config/proses_hapus.php?proses=hapus_soal" method="post">
                <div class="modal-body">
                    <input type="text" id="idSoal" name="id" hidden>
                    <p>Anda yakin ingin menghapusnya?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-info text-white">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>