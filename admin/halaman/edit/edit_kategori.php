<?php

$id = $_GET['id'];
$sql = "SELECT * FROM kategori WHERE id_kategori = '$id'";
$hasil = mysqli_query($connect, $sql);
$data = mysqli_fetch_assoc($hasil);

?>

<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="overview-wrap">
                    <h2 class="title-1">Ubah Data Kategori</h2>
                </div>
            </div>
        </div>
        <div class="row m-t-25">
            <div class="col">
                <div class="card">
                    <div class="card-body card-block">
                        <form action="config/proses_edit.php?proses=edit_kategori&id=<?= $data['id_kategori']; ?>" method="post">
                            <div class="form-group m-b-25">
                                <label for="kategori" class=" form-control-label">Nama Kategori</label>
                                <input type="text" id="kategori" class="form-control" name="kategori" value="<?= $data['kategori']; ?>" required>
                            </div>
                            <div class="d-flex justify-content-between">
                                <a href="index.php?hal=kategori&section=kategori" class="btn btn-primary">Kembali</a>
                                <button type="submit" class="btn btn-primary">Ubah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>