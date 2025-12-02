<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Admin Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="../assets/img/icon.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="../assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ['../assets/css/fonts.min.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!-- CSS Files -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/atlantis.min.css">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="../assets/css/demo.css">
    <style>
/* =============================
   WARNA UTAMA ORANGE
============================= */
:root {
    --main-orange: #ff9800;
    --main-orange-light: #eb3337ff;
}

/* HEADER */
.panel-header,
.bg-primary-gradient {
    background: linear-gradient(135deg, var(--main-orange), var(--main-orange-light)) !important;
}

/* SIDEBAR */
.sidebar .user,
.sidebar .user p,
.sidebar .user .info {
    background-color: white !important;
    color: #ffffffff !important;
}

/* ICON NAVBAR */
.navbar-header .navbar-toggler i {
    color: var(--main-orange) !important;
    font-weight: bold !important;
}

/* MENU SIDEBAR */
.nav-item.active > a {
    background-color: var(--main-orange) !important;
    color: white !important;
}

.nav-item a:hover {
    color: var(--main-orange) !important;
}

.nav-item a:hover i {
    color: var(--main-orange) !important;
}

/* TOMBOL ORANGE KHUSUS */
.btn-primary,
.btn-warning,
.btn-orange {
    background-color: var(--main-orange) !important;
    border-color: var(--main-orange) !important;
}

/* CARD */
.card.card-stats,
.card.card-round {
    background-color: var(--main-orange) !important;
    color: white !important;
}

.card-stats .icon-big {
    background: red !important;
}

.card-stats .icon-big i {
    color: red !important;
}

.card:not(.card-stats):not(.card-round) {
    background: var(--main-orange) !important;
    color: white !important;
}

.card p,
.card h3,
.card h4 {
    color: white !important;
}

.bg-primary,
.badge-primary {
    background-color: var(--main-orange) !important;
}

</style>
<!-- End Theme Override -->
</head>

<body>
    <div class="wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="orange">
          
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="icon-menu"></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="icon-menu"></i>
                    </button>
                </div>
            </div>
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="orange">

                <div class="container-fluid">
                    <div class="collapse" id="search-nav"></div>

                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item dropdown hidden-caret">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                            </a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <div class="dropdown-user-scroll scrollbar-outer">
                                    <li>
                                        <div class="user-box">
                                            <div class="avatar-lg"><img src="../assets/img/logo.png" alt="image profile" class="avatar-img rounded"></div>
                                            <div class="u-text">
                                                <h4><?= $_SESSION['username']; ?></h4>
                                                <p class="text-muted"><?php if ($_SESSION['role'] == 'admin') {
                                                                            echo "Administrator";
                                                                        } else if ($_SESSION['role'] == 'kasir') {
                                                                            echo "Kasir";
                                                                        } else {
                                                                            echo "Owner";
                                                                        } ?></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="logout.php">Logout</a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
        </div><!-- Sidebar -->
        <div class="sidebar sidebar-style-2">
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <div class="user">
                        <div class="avatar-sm float-left mr-2">
                            <img src="../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                        </div>
                        <div class="info">
                            <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                <span>
                                    <?= $_SESSION['username']; ?>
                                    <span class="user-level"><?php if ($_SESSION['role'] == 'admin') {
                                                                    echo "Administrator";
                                                                } else if ($_SESSION['role'] == 'kasir') {
                                                                    echo "Kasir";
                                                                } else {
                                                                    echo "Owner";
                                                                } ?></span>
                                </span>
                            </a>


                        </div>
                    </div>
                    <ul class="nav nav-primary">
                        <li class="nav-item <?php if ($title == 'Selamat Datang di Aplikasi Pengelolaan Laundry') {
                                                echo 'active';
                                            } ?>">
                            <a href="index.php" class="collapsed" aria-expanded="false">
                                <i class="fas fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">MENU</h4>
                        </li>
                        <li class="nav-item <?php if ($title == 'Data Pelanggan') {
                                                echo 'active';
                                            } ?>">
                            <a href="pelanggan.php">
                                <i class="fas fa-users"></i>
                                <p>Pelanggan</p>
                            </a>
                        </li>
                        <li class="nav-item <?php if ($title == 'Data Transaksi') {
                                                echo 'active';
                                            } ?>"">
                            <a href=" transaksi.php">
                            <i class="fas fa-hand-holding-usd"></i>
                            <p>Transaksi</p>
                            </a>
                        </li>
                        <li class="nav-item <?php if ($title == 'Data Laporan') {
                                                echo 'active';
                                            } ?>"">
                            <a href=" laporan.php">
                            <i class="fas fa-print"></i>
                            <p>Laporan</p>
                            </a>
                        </li>
                        <li class="mx-4 mt-2">
                            <a href="logout.php" onclick="return confirm('Keluar dari halaman ini?');" class="btn btn-primary btn-block"><span class="btn-label mr-2"> <i class="fas fa-sign-out-alt"></i> </span>Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->
        <div class="main-panel">
            <div class="content">
