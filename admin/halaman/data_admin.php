<?php

$sql = "SELECT * FROM admin";
$hasil = mysqli_query($connect, $sql);

?>

<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="overview-wrap">
                    <h2 class="title-1">Data Admin</h2>
                </div>
            </div>
        </div>
        <div class="card m-t-15">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span class="d-none d-md-block">Tabel data admin</span>
                <a href="index.php?hal=tambah_admin&section=tambah_admin" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Admin Baru</a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="example">
                                <thead>
                                    <tr>
                                        <th class="text-center text-nowrap">No</th>
                                        <th class="text-nowrap">Username</th>
                                        <th class="text-nowrap">Nama Admin</th>
                                        <th class="text-nowrap">Jenis Kelamin</th>
                                        <th class="text-nowrap">Email</th>
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
                                            <td class="text-center text-nowrap"><?= $no; ?></td>
                                            <td class="text-nowrap"><?= $data['username']; ?></td>
                                            <td class="text-nowrap"><?= $data['nama_admin']; ?></td>
                                            <td class="text-nowrap"><?= $data['jenis_kelamin']; ?></td>
                                            <td class="text-nowrap"><?= $data['email']; ?></td>
                                            <td class="text-center" nowrap="nowrap">
                                                <a href="index.php?hal=edit_admin&id=<?= $data['id_admin']; ?>" class="btn btn-primary btn-sm" title="ubah"><i class="fas fa-edit"></i></a>
                                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#hapusAdmin" data-id="<?= $data['id_admin']; ?>" title="hapus"><i class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
                                    <?php
                                    endwhile;
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal small -->
<div class="modal fade" id="hapusAdmin" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="smallmodalLabel">Hapus Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="config/proses_hapus.php?proses=hapus_admin" method="post">
                <div class="modal-body">
                    <input type="text" id="idAdmin" name="id" hidden>
                    <p>Anda yakin ingin menghapusnya?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>