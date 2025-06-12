<?php

$sql = "SELECT * FROM skor";
$hasil = mysqli_query($connect, $sql);
$jumlahData = mysqli_num_rows($hasil);

?>

<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="overview-wrap">
                    <h2 class="title-1">Data Riwayat Kuis</h2>
                </div>
            </div>
        </div>
        <div class="card m-t-15">
            <div class="card-header d-flex align-items-center justify-content-center justify-content-md-start">
                Tabel hasil riwayat kuis
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <?php
                            if ($jumlahData > 0) {
                            ?>
                                <div class="m-l-15 m-r-15 mb-3 mb-md-0">
                                    <button type="button" class="btn btn-info text-white" data-toggle="modal" data-target="#hapusRiwayat"><i class="fas fa-trash"></i> Hapus Seluruh Riwayat</button>
                                </div>
                                <table class="table table-bordered" id="example">
                                    <thead>
                                        <tr>
                                            <th class="text-center text-nowrap">No</th>
                                            <th class="text-nowrap">Nama Peserta</th>
                                            <th class="text-center text-nowrap">Jumlah Skor</th>
                                            <th class="text-center text-nowrap">Waktu Kuis</th>
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
                                                <td class="text-center"><?= $no; ?></td>
                                                <td class="text-nowrap"><?= $data['nama_peserta']; ?></td>
                                                <td class="text-center text-nowrap"><?= $data['jumlah_skor']; ?></td>
                                                <td class="text-center text-nowrap"><?= $data['created_at']; ?></td>
                                                <td class="text-center text-nowrap">
                                                    <button type="button" class="btn btn-info text-white btn-sm" data-toggle="modal" data-target="#hapusHasil" data-id="<?= $data['id_skor']; ?>" title="hapus"><i class="fas fa-trash"></i></button>
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
                                    Belum ada data skor peserta..
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

<!-- modal small -->
<div class="modal fade" id="hapusHasil" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="smallmodalLabel">Hapus Hasil Kuis</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="config/proses_hapus.php?proses=hapus_skor" method="post">
                <div class="modal-body">
                    <input type="text" id="idHasil" name="id" hidden>
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

<!-- modal small -->
<div class="modal fade" id="hapusRiwayat" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="smallmodalLabel">Hapus Seluruh Riwayat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Anda ingin menghapusnya? seluruh riwayat skor akan terhapus semua</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <a href="config/proses_hapus.php?proses=hapus_riwayat_skor" class="btn btn-info text-white">Hapus</a>
            </div>
        </div>
    </div>
</div>