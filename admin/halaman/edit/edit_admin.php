<?php

$id = $_GET['id'];
$sql = "SELECT * FROM admin WHERE id_admin = '$id'";
$hasil = mysqli_query($connect, $sql);
$data = mysqli_fetch_assoc($hasil);

?>

<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="overview-wrap">
                    <h2 class="title-1">Tambah Admin Baru</h2>
                </div>
            </div>
        </div>
        <div class="row m-t-25">
            <div class="col">
                <div class="card">
                    <div class="card-body card-block">
                        <form action="config/proses_edit.php?proses=edit_admin&id=<?= $data['id_admin']; ?>" method="post">
                            <div class="form-group">
                                <label for="username" class=" form-control-label">Username</label>
                                <input type="text" id="username" class="form-control" name="username" value="<?= $data['username']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="password" class=" form-control-label">Password</label>
                                <input type="password" id="password" class="form-control" name="password"
                                    value="<?= $data['password']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="nama_admin" class=" form-control-label">Nama Admin</label>
                                <input type="text" id="nama_admin" class="form-control" name="nama_admin" value="<?= $data['nama_admin']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin" class=" form-control-label">Jenis Kelamin</label>
                                <select id="jenis_kelamin" class="form-control" name="jenis_kelamin" required>
                                    <option value="<?= $data['jenis_kelamin']; ?>" selected><?= $data['jenis_kelamin']; ?></option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group m-b-25">
                                <label for="email" class=" form-control-label">Email</label>
                                <input type="text" id="email" class="form-control" name="email" value="<?= $data['email']; ?>" required>
                            </div>
                            <div class="d-flex justify-content-between">
                                <a href="index.php?hal=admin&section=admin" class="btn btn-info text-white">Kembali</a>
                                <button type="submit" class="btn btn-info text-white">Ubah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>