<html dir="ltr" lang="en" id="home">

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
    <title>CatDoorz Admin</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/niceadmin-lite/" />

    <link rel="icon" type="image/png" href="../assets/images/ct-logo.png">

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
                        <a href="pages-profile.php" class="logo">

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
                        <h4 class="page-title">Profile</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="pages-profile.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">

                <div class="row">

                    <div class="col-lg-4 col-xlg-3">
                        <div class="card">
                            <div class="card-body">
                                <center class="mt-4"> <img src="../assets/B/logo.png" class="rounded-circle"
                                        width="300" />
                                    <h4 class="card-title mt-2">CatDoorz</h4>
                                    <h6 class="card-subtitle">Penitipan Kucing Terbaik</h6>

                                </center>
                            </div>
                            <div>
                                <hr>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-8 col-xlg-9">
                        <div class="card">
                            <div class="card-body"> <small class="text-muted">Email address </small>
                                <h6>catdoorz6@gmail.com</h6> <small class="text-muted pt-4 db">Phone</small>
                                <h6>082116407756</h6> <small class="text-muted pt-4 db">Address</small>
                                <h6>Jl. Dipati Ukur No.122-116
                                    <br>
                                    Kota Bandung, Jawa Barat
                                </h6>
                                <div class="map-box">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508"
                                        width="100%" height="150" frameborder="0" style="border:0"
                                        allowfullscreen></iframe>
                                </div> <small class="text-muted pt-4 db">Social Profile</small>
                                <br />
                                <a href="https://www.facebook.com/profile.php?id=61550096488178&mibextid=ZbWKwL"><button
                                        class="btn btn-circle btn-secondary"><i
                                            class="mdi mdi-facebook"></i></button></a>
                                <a href="https://instagram.com/catdoorz.id?igshid=MzNlNGNkZWQ4Mg=="><button
                                        class="btn btn-circle btn-secondary"><i
                                            class="mdi mdi-instagram"></i></button></a>
                                <a href="http://wa.me/+6282116407756"><button class="btn btn-circle btn-secondary"><i
                                            class="mdi mdi-whatsapp"></i></button></a>
                                </form>
                            </div>
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