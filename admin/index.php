<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('Location: login.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="beyourselfquiz">
    <meta name="author" content="adjimuhamadzidan">
    <meta name="keywords" content="beyourselfquiz">

    <!-- Title Page-->
    <title>Beyourself Quiz | Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="assets/css/theme.css" rel="stylesheet" media="all">

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.2/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="assets/toastr/toastr.min.css">

    <style>
        .page-item.active .page-link {
            background-color: #17A2B8;
            border-color: #17A2B8;
        }

        .page-link {
            color: #17A2B8;
        }
    </style>

</head>

<body>
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <?php include 'partial/header_mobile.php'; ?>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <?php include 'partial/sidebar.php'; ?>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <?php include 'partial/header_desktop.php'; ?>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <?php include 'config/route_pages.php'; ?>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

        <div class="copyright">
            <p>BeyourselfQuiz - <?php echo date('Y'); ?> | Template by <a href="https://colorlib.com">Colorlib</a>.</p>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="assets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="assets/vendor/slick/slick.min.js">
    </script>
    <script src="assets/vendor/wow/wow.min.js"></script>
    <script src="assets/vendor/animsition/animsition.min.js"></script>
    <script src="assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="assets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counter-up/jquery.counterup.min.js"></script>
    <script src="assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="assets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="assets/vendor/select2/select2.min.js"></script>
    <script src="https://cdn.datatables.net/2.3.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.3.2/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
    <script src="assets/toastr/toastr.min.js"></script>

    <!-- Main JS-->
    <script src="assets/js/main.js"></script>

    <?php if (isset($_SESSION['pesan']) && isset($_SESSION['status'])) { ?>
        <script>
            $(function() {
                toastr.<?= $_SESSION['status']; ?>('<?= $_SESSION['pesan']; ?>');
            });
        </script>
    <?php
        unset($_SESSION['status']);
        unset($_SESSION['pesan']);
    } ?>

    <script>
        $('#example').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });

        $('#detailModal').on('show.bs.modal', function(event) {
            let button = $(event.relatedTarget)

            let id = button.data('id')
            let kategori = button.data('kategori')
            let pertanyaan = button.data('pertanyaan')
            let opsi1 = button.data('opsi1')
            let opsi2 = button.data('opsi2')
            let opsi3 = button.data('opsi3')
            let opsi4 = button.data('opsi4')
            let jawaban = button.data('jawaban')
            let admin = button.data('admin')
            let modal = $(this)

            modal.find('#kategori').text(kategori)
            modal.find('#pertanyaan').text(pertanyaan)
            modal.find('#opsiA').text('A ' + opsi1)
            modal.find('#opsiB').text('B ' + opsi2)
            modal.find('#opsiC').text('C ' + opsi3)
            modal.find('#opsiD').text('D ' + opsi4)
            modal.find('#jawaban').text(jawaban)
            modal.find('#admin').text(admin)
        })

        $('#hapusKategori').on('show.bs.modal', function(event) {
            let button = $(event.relatedTarget)
            let id = button.data('id')
            let modal = $(this)

            modal.find('#idkategori').val(id)
        })

        $('#hapusSoal').on('show.bs.modal', function(event) {
            let button = $(event.relatedTarget)
            let id = button.data('id')
            let modal = $(this)

            modal.find('#idSoal').val(id)
        })

        $('#hapusAdmin').on('show.bs.modal', function(event) {
            let button = $(event.relatedTarget)
            let id = button.data('id')
            let modal = $(this)

            modal.find('#idAdmin').val(id)
        })

        $('#hapusHasil').on('show.bs.modal', function(event) {
            let button = $(event.relatedTarget)
            let id = button.data('id')
            let modal = $(this)

            modal.find('#idHasil').val(id)
        })
    </script>

</body>

</html>
<!-- end document-->