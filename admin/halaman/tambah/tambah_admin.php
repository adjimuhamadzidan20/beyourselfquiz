<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="overview-wrap">
                    <h2 class="title-1">Tambah Admin Baru</h2>
                </div>
            </div>
        </div>
        <div class="row m-t-15">
            <div class="col">
                <div class="card">
                    <div class="card-body card-block">
                        <form action="config/proses_tambah.php?proses=admin" method="post">
                            <div class="form-group">
                                <label for="username" class=" form-control-label">Username</label>
                                <input type="text" id="username" placeholder="Masukkan Username" class="form-control" name="username" required>
                            </div>
                            <div class="form-group">
                                <label for="password" class=" form-control-label">Password</label>
                                <input type="password" id="password" placeholder="Masukkan Password" class="form-control" name="password" required>
                            </div>
                            <div class="form-group">
                                <label for="nama_admin" class=" form-control-label">Nama Admin</label>
                                <input type="text" id="nama_admin" placeholder="Masukkan Nama Admin" class="form-control" name="nama_admin" required>
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin" class=" form-control-label">Jenis Kelamin</label>
                                <select id="jenis_kelamin" class="form-control" name="jenis_kelamin" required>
                                    <option value="" selected>-- Pilih Jenis Kelamin --</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group m-b-25">
                                <label for="email" class=" form-control-label">Email</label>
                                <input type="text" id="email" placeholder="Masukkan Email" class="form-control" name="email" required>
                            </div>
                            <div class="d-flex justify-content-between">
                                <a href="index.php?hal=admin&section=admin" class="btn btn-primary">Kembali</a>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>