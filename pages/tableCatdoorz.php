<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Nice lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Nice admin lite design, Nice admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Nice Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>DATA RESERVASI</title>
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

                                <img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />

                                <img src="../assets/images/cat-logo.jpg" alt="homepage" class="light-logo" />
                            </b>

                            <span class="logo-text">

                                <img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" />

                                <img src="../assets/images/chp.png" class="light-logo" alt="homepage" />
                            </span>
                        </a>
                    </div>


                </div>

                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin6">

                   

                    
            </nav>
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
                                        <a href="#">Home</a>
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
                                <h4 class="card-title">Tabel Data Reservasi</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="table-light">
                                        <tr>
                                        <th scope="col" style="padding-right: 18px; ">No</th>
                                            <th scope="col" style="padding-right: 40px; ">Kode </th>
                                            <th scope="col" style="padding-right: 120px; ">Nama Lengkap</th>
                                            <th scope="col" style="padding-right: 180px;" >Alamat</th>
                                            <th scope="col" style="padding-right: 50px;">No.Handphone</th>
                                            <th scope="col" style="padding-right: 100px;">Email</th>
                                            <th scope="col" style="padding-right: 50px;">Tanggal Masuk</th>
                                            <th scope="col" style="padding-right: 50px;">Tanggal Keluar</th>
                                            <th scope="col" style="padding-right: 50px;">Proses</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        echo "<script>
                                        console.log('Dikerjakan Oleh: 10122439 Nuraliyah Apriliani')
                                        console.log('Dikerjakan Oleh: 10122456 Gani Satyawirawani')
                                        console.log('Dikerjakan Oleh:10122447 Novia Sari Dewi ')
                                        console.log('Dikerjakan Oleh: 10122458 Florian Dimas Wanda')
                                        </script>";
                                        require("konekasidbcatdoorz.php");
                                        $sql_data_reservasi = "SELECT * FROM data_reservasi";
                                        $hasil_data_reservasi = mysqli_query($conn, $sql_data_reservasi);

                                        $n = 1;
                                        while ($row = mysqli_fetch_row($hasil_data_reservasi)) {
                                            list($next_code, $namalengkap, $alamat, $nohp, $email, $todaydate, $newDate) = $row;
                                            echo "<tr>
                                                <td>$n</td>
                                                <td>$next_code</td>
                                                <td>$namalengkap</td>
                                                <td>$alamat</td>
                                                <td>$nohp</td>
                                                <td>$email</td>
                                                <td>$todaydate</td>
                                                <td>$newDate</td>
                                                <td align=center>
                                                
                                            
                                                <a href = 'invoice2.php?kodetransaksi=$next_code' onclick=\"return confirm ('Anda yakin ingin checkout?)\"><img src='../assets/B/co.png'></a>
                                                <a href = 'edittabelcatdoorz.php?kodetransaksi=$next_code' onclick=\"return confirm ('Anda yakin mau mengupdate data ini?)\"><img src='../assets/B/upd.png'></a>
                                                <a href = 'tambahtabelcatdoorz.php?kodetransaksi=$next_code' onclick=\"return confirm ('Anda yakin mau menambah data ini?)\"><img src='../assets/B/add.png'></a>

                                            </td>

                                                
                                                
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
                    All Rights Reserved by CatDoorz. Designed and Developed by CatDoorz
                    
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