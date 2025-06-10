<?php
$dtKategori = "SELECT * FROM kategori";
$dtSoal = "SELECT * FROM soal";
$dtSkor = "SELECT * FROM skor";
$dtAdmin = "SELECT * FROM admin";

$hasilKategori = mysqli_query($connect, $dtKategori);
$hasilSoal = mysqli_query($connect, $dtSoal);
$hasilSkor = mysqli_query($connect, $dtSkor);
$hasilAdmin = mysqli_query($connect, $dtAdmin);

$jumlahKategori = mysqli_num_rows($hasilKategori);
$jumlahSoal = mysqli_num_rows($hasilSoal);
$jumlahSkor = mysqli_num_rows($hasilSkor);
$jumlahAdmin = mysqli_num_rows($hasilAdmin);

?>

<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="overview-wrap">
                    <h2 class="title-1">BeyourselfQuiz Dashboard</h2>
                </div>
            </div>
        </div>
        <div class="row m-t-25">
            <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c1">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <i class="fas fa-list"></i>
                            </div>
                            <div class="text">
                                <h2><?= $jumlahKategori; ?></h2>
                                <span>Kategori</span>
                            </div>
                        </div>
                        <div class="overview-chart">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c2">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <i class="fas fa-question-circle"></i>
                            </div>
                            <div class="text">
                                <h2><?= $jumlahSoal; ?></h2>
                                <span>Soal Kuis</span>
                            </div>
                        </div>
                        <div class="overview-chart">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c3">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <i class="fas fa-clipboard"></i>
                            </div>
                            <div class="text">
                                <h2><?= $jumlahSkor; ?></h2>
                                <span>Riwayat Kuis</span>
                            </div>
                        </div>
                        <div class="overview-chart">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c4">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="text">
                                <h2><?= $jumlahAdmin; ?></h2>
                                <span>Admin</span>
                            </div>
                        </div>
                        <div class="overview-chart">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>