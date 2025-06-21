<html dir="ltr" lang="en">

<!-- 
    ('Dikerjakan Oleh: 10122439 Nuraliyah Apriliani')
    ('Dikerjakan Oleh: 10122456 Gani Satyawirawani')
    ('Dikerjakan Oleh:10122447 Novia Sari Dewi ')
    ('Dikerjakan Oleh: 10122458 Florian Dimas Wanda') -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Nice lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Nice admin lite design, Nice admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Nice Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>DATA HEWAN</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/niceadmin-lite/" />

    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/ct-logo.png">

    <link href="../dist/css/style.min.css" rel="stylesheet">
</head>

<body>

    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full"
        data-boxed-layout="full">

        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin5">

                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>

                    <div class="navbar-brand">
                        <a href="index.html" class="logo">

                            <b class="logo-icon">

                                <img src="../assets/images/cat-logo.jpg" alt="homepage" class="dark-logo" />

                                <img src="../assets/images/cat-logo.jpg" alt="homepage" class="light-logo" />
                            </b>

                            <span class="logo-text">

                                <img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" />

                                <img src="../assets/images/chp.png" class="light-logo" alt="homepage" />
                            </span>
                        </a>
                    </div>


                </div>


        </header>

        <aside class="left-sidebar" data-sidebarbg="skin5">

            <div class="scroll-sidebar">

                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pages-profile.php"
                                aria-expanded="false">
                                <i class="mdi mdi-account-network"></i>
                                <span class="hide-menu">Profile</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="tableCatdoorz.php"
                                aria-expanded="false">
                                <i class="mdi mdi-border-none"></i>
                                <span class="hide-menu">Table Reservasi</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="tablehewancatdoorz.php"
                                aria-expanded="false">
                                <i class="mdi mdi-border-none"></i>
                                <span class="hide-menu">Table Hewan</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../index.html"
                                aria-expanded="false">
                                <i class="mdi mdi-web"></i>
                                <span class="hide-menu">CatDoorz Site</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="login.php"
                                aria-expanded="false" onclick="return confirmLogout();">
                                <i class="mdi mdi-logout"></i>
                                <span class="hide-menu">Logout</span>
                            </a>
                        </li>

                        <script>
                        function confirmLogout() {
                            return confirm("Anda yakin akan logout dari akun ini?");
                        }
                        </script>

                    </ul>
                </nav>

            </div>

        </aside>

        <div class="page-wrapper">

            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Database</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="tablehewancatdoorz.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Database</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">

                <div class="row">


                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tabel Data Hewan</h4>
                            </div>
                            <div class="table-responsive">

                                <table class="table">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Kode Kandang</th>
                                            <th scope="col">Kode Transaksi</th>
                                            <th scope="col">Jumlah Hewan</th>
                                            <th scope="col" style="padding-right: 50px;">Nama Hewan</th>
                                            <th scope="col">Kondisi Kesehatan</th>
                                            <th scope="col">Paket Menginap</th>
                                            <th scope="col">Lama Waktu</th>
                                            <th scope="col">Jumlah Waktu</th>
                                            <th scope="col">Tambahan</th>
                                            <th scope="col" style="padding-right: 50px;">Tanggal Masuk</th>
                                            <th scope="col" style="padding-right: 50px;">Tanggal Keluar</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        require("konekasidbcatdoorz.php");
                                        $sql_data_hewan = "SELECT * FROM data_kandang";
                                        $hasil_data_hewan = mysqli_query($conn, $sql_data_hewan);

                                        $n = 1;
                                        while ($row = mysqli_fetch_row($hasil_data_hewan)) {
                                            list($next_codek, $next_code, $jumlahkucing, $namahewan, $kondisi, $paket, $lamawaktu, $waktu, $tambahan, $todaydate, $newDate) = $row;
                                            echo "<tr>
                                                <td>$n</td>
                                                <td>$next_code</td>
                                                <td>$next_codek</td>
                                                <td>$jumlahkucing</td>
                                                <td>$namahewan</td>
                                                <td>$kondisi</td>
                                                <td>$paket</td>
                                                <td>$lamawaktu</td>
                                                <td>$waktu</td>
                                                <td>$tambahan</td>
                                                <td>$todaydate</td>
                                                <td>$newDate</td>
                                               
                                            </tr>";
                                            $n++;
                                        }
                                        ?>
                                    </tbody>

                                </table>
                            </div>

                        </div>
                    </div>


                </div>

                <footer class="footer text-center">
                    All Rights Reserved by CatDoorz-Admin. Designed and Developed by CatDoorz.
                </footer>

            </div>

        </div>

        <script src="../assets/libs/jquery/dist/jquery.min.js"></script>

        <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

        <script src="../assets/extra-libs/sparkline/sparkline.js"></script>

        <script src="../dist/js/waves.js"></script>

        <script src="../dist/js/sidebarmenu.js"></script>

        <script src="../dist/js/custom.min.js"></script>
</body>

</html>