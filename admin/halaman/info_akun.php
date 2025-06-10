<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card pb-3">
                    <div class="card-header d-flex justify-content-center justify-content-md-start">
                        <div>
                            <i class="fa fa-user"></i>
                            <strong class="card-title pl-2">Informasi Akun</strong>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="mx-auto d-block">
                            <img class="rounded-circle mx-auto d-block mt-3" src="assets/images/icon/profile.png" alt="Card image cap" width="150">
                            <div class="text-center mt-4 mb-1">
                                <h3 class="mb-1"><?= $_SESSION['nama_admin']; ?></h3>
                                <h5 class="mb-2">Administrator</h5>
                                <p class="mb-1"><?= $_SESSION['gender']; ?></p>
                                <p><?= $_SESSION['email']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>