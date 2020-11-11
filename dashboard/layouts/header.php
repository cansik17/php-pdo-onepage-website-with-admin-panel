<?php
if (!isset($_SESSION)) {
    session_start();
}
ob_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Yönetim Paneli</title>
    <link href="dist/css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Yönetim Paneli</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->

        <!-- Navbar-->

    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="../index.php" target="_blank">
                            <div class="sb-nav-link-icon"><i class="fas fa-eye"></i></div>
                            Siteyi Görüntüle
                        </a>
                        <div class="sb-sidenav-menu-heading">Bölümleri Düzenle</div>
                        <a class="nav-link" href="intro.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-play"></i></div>
                            İntro (Giriş)
                        </a>
                        <a class="nav-link" href="about.php">
                            <div class="sb-nav-link-icon"><i class="far fa-address-card"></i></div>
                            Hakkımızda
                        </a>
                        <a class="nav-link" href="services.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-trophy"></i></div>
                            Hizmetlerimiz
                        </a>
                        <a class="nav-link" href="projects.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-history"></i></div>
                            Referanslarımız
                        </a>
                        <a class="nav-link" href="clients.php">
                            <div class="sb-nav-link-icon"><i class="far fa-building"></i></div>
                            Referans Şirketler
                        </a>
                        <div class="sb-sidenav-menu-heading">Ayarlar</div>
                        <a class="nav-link" href="messages.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-envelope"></i></div>
                            Gelen Mesajlar
                        </a>
                        <a class="nav-link" href="settings.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-cog"></i></div>
                            Site Ayarları
                        </a>
                        <a class="nav-link" href="../configs/admin.php?logout=ok">
                            <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>
                            Çıkış Yap
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">