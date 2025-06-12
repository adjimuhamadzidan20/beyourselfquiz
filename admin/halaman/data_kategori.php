<?php

$sql = "SELECT * FROM kategori";
$hasil = mysqli_query($connect, $sql);
$jumlahData = mysqli_num_rows($hasil);

?>

<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="overview-wrap">
                    <h2 class="title-1">Data Kategori Kuis</h2>
                </div>
            </div>
        </div>
        <div class="card m-t-15">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span class="d-none d-md-block">Tabel data kategori kuis</span>
                <a href="index.php?hal=tambah_kategori&section=tambah_kategori" class="btn btn-info text-white"><i class="fas fa-plus"></i> Tambah Kategori Baru</a>
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
                                            <th class="text-nowrap">Nama Kategori</th>
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
                                                <td class="text-nowrap"><?= $data['kategori']; ?></td>
                                                <td class="text-center text-nowrap">
                                                    <a href="index.php?hal=edit_kategori&id=<?= $data['id_kategori']; ?>&section=edit_kategori" class="btn btn-info text-white btn-sm" title="ubah"><i class="fas fa-edit"></i></a>
                                                    <button type="button" class="btn btn-info text-white btn-sm" data-toggle="modal" data-target="#hapusKategori" data-id="<?= $data['id_kategori']; ?>" title="hapus"><i class="fas fa-trash"></i></button>
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
                                    Belum ada data kategori..
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
<div class="modal fade" id="hapusKategori" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="smallmodalLabel">Hapus Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="config/proses_hapus.php?proses=hapus_kategori" method="post">
                <div class="modal-body">
                    <input type="text" id="idkategori" name="id" hidden>
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