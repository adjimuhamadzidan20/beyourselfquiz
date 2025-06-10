<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="header-wrap justify-content-end">
            <div class="header-button justify-content-end">
                <div class="account-wrap">
                    <div class="account-item clearfix js-item-menu">
                        <div class="image">
                            <img src="assets/images/icon/profile.png" class="rounded-circle" alt="<?= $_SESSION['nama_admin']; ?>" />
                        </div>
                        <div class="content">
                            <a class="js-acc-btn" href="index.php?hal=dashboard&section=dashboard"><?= $_SESSION['nama_admin']; ?></a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
                                <div class="image">
                                    <a href="index.php?hal=dashboard&section=dashboard">
                                        <img src="assets/images/icon/profile.png" class="rounded-circle" alt="<?= $_SESSION['nama_admin']; ?>" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="name">
                                        <a href="index.php?hal=dashboard&section=dashboard"><?= $_SESSION['nama_admin']; ?></a>
                                    </h5>
                                    <span class="email"><?= $_SESSION['email']; ?></span>
                                </div>
                            </div>
                            <div class="account-dropdown__body">
                                <div class="account-dropdown__item">
                                    <a href="index.php?hal=info_akun">
                                        <i class="zmdi zmdi-account"></i>Informasi Akun</a>
                                </div>
                            </div>
                            <div class="account-dropdown__footer">
                                <a href="config/proses_logout.php">
                                    <i class="zmdi zmdi-power"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>