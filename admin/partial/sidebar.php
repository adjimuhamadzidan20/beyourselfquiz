<?php
require 'config/page_active.php';
?>

<div class="logo text-center">
    <a href="index.php">
        <h3 style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; letter-spacing: 2px;">BeyourselfQuiz</h3>
    </a>
</div>
<div class="menu-sidebar__content js-scrollbar1">
    <nav class="navbar-sidebar">
        <ul class="list-unstyled navbar__list">
            <li class="<?= $active1; ?> has-sub">
                <a href="index.php?hal=dashboard&section=dashboard"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
            </li>
            <li class="<?= $active2; ?>">
                <a href="index.php?hal=kategori&section=kategori"><i class="fas fa-list"></i>Kategori Kuis</a>
            </li>
            <li class="<?= $active3; ?>">
                <a href="index.php?hal=soal&section=soal"><i class="fas fa-question-circle"></i>Soal Kuis</a>
            </li>
            <li class="<?= $active4; ?>">
                <a href="index.php?hal=skor&section=skor"><i class="far fa-clipboard"></i>Riwayat Kuis</a>
            </li>
            <li class="<?= $active5; ?>">
                <a href="index.php?hal=admin&section=admin"><i class="fas fa-user"></i>Data Admin</a>
            </li>
        </ul>
    </nav>
</div>