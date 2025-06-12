<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="overview-wrap">
                    <h2 class="title-1">Tambah Kategori Baru</h2>
                </div>
            </div>
        </div>
        <div class="row m-t-15">
            <div class="col">
                <div class="card">
                    <div class="card-body card-block">
                        <form action="config/proses_tambah.php?proses=kategori" method="post">
                            <div class="form-group m-b-25">
                                <label for="kategori" class=" form-control-label">Nama Kategori</label>
                                <input type="text" id="kategori" placeholder="Masukkan Kategori" class="form-control" name="kategori" required>
                            </div>
                            <div class="d-flex justify-content-between">
                                <a href="index.php?hal=kategori&section=kategori" class="btn btn-info text-white">Kembali</a>
                                <button type="submit" class="btn btn-info text-white">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>