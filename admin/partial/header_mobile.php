<div class="header-mobile__bar">
    <div class="container-fluid">
        <div class="header-mobile-inner">
            <a class="logo" href="index.html">
                <h3 style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; letter-spacing: 2px;">BeyourselfQuiz</h3>
            </a>
            <button class="hamburger hamburger--slider" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
</div>
<nav class="navbar-mobile">
    <div class="container-fluid">
        <ul class="navbar-mobile__list list-unstyled">
            <li class="<?= $active1; ?> has-sub">
                <a href="index.php?hal=dashboard&section=dashboard"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
            </li>
            <li class="<?= $active2; ?>">
                <a href="index.php?hal=kategori&section=kategori"><i class="fas fa-chart-bar"></i>Kategori Kuis</a>
            </li>
            <li class="<?= $active3; ?>">
                <a href="index.php?hal=soal&section=soal"><i class="fas fa-table"></i>Soal Kuis</a>
            </li>
            <li class="<?= $active4; ?>">
                <a href="index.php?hal=skor&section=skor"><i class="far fa-check-square"></i>Riwayat Kuis</a>
            </li>
            <li class="<?= $active5; ?>">
                <a href="index.php?hal=admin&section=admin"><i class="fas fa-calendar-alt"></i>Data Admin</a>
            </li>
        </ul>
    </div>
</nav>