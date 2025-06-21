<?php
include("konekasidbcatdoorz.php");

$next_kode = $_GET['kodetransaksi'];

// Mengambil data dari tabel data_reservasi
$sql_data_reservasi = "SELECT * FROM data_reservasi WHERE kodetransaksi='$next_kode'";
$hasil_data_reservasi = mysqli_query($conn, $sql_data_reservasi);
$hasil_data_reservasi = mysqli_fetch_array($hasil_data_reservasi);

// Mengambil data dari tabel data_kandang
$sql_data_hewan = "SELECT * FROM data_kandang WHERE kodetransaksi = '$next_kode'";
$hasil_data_hewan = mysqli_query($conn, $sql_data_hewan);
$hasil_data_hewan = mysqli_fetch_array($hasil_data_hewan);

$tambahan = array('Treats', 'Grooming', 'Vitamin');
$paket = array('A', 'B', 'C');
$lamawaktu = array('Harian', 'Mingguan');

function active_radio_button($value, $input)
{
    return $value == $input ? 'checked' : '';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">


    <title>invoice with client info description amount and pay now button - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    body {
        margin-top: 20px;
        background: #87CEFA;
    }

    .card-footer-btn {
        display: flex;
        align-items: center;
        border-top-left-radius: 0 !important;
        border-top-right-radius: 0 !important;
    }

    .text-uppercase-bold-sm {
        text-transform: uppercase !important;
        font-weight: 500 !important;
        letter-spacing: 2px !important;
        font-size: .85rem !important;
    }

    .hover-lift-light {
        transition: box-shadow .25s ease, transform .25s ease, color .25s ease, background-color .15s ease-in;
    }

    .justify-content-center {
        justify-content: center !important;
    }

    .btn-group-lg>.btn,
    .btn-lg {
        padding: 0.8rem 1.85rem;
        font-size: 1.1rem;
        border-radius: 0.3rem;
    }

    .btn-dark {
        color: #fff;
        background-color: #1e2e50;
        border-color: #1e2e50;
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(30, 46, 80, .09);
        border-radius: 0.25rem;
        box-shadow: 0 20px 27px 0 rgb(0 0 0 / 5%);
    }

    .p-5 {
        padding: 3rem !important;
    }

    .card-body {
        flex: 1 1 auto;
        padding: 1.5rem 1.5rem;
    }

    tbody,
    td,
    tfoot,
    th,
    thead,
    tr {
        border-color: inherit;
        border-style: solid;
        border-width: 0;
    }

    .table td,
    .table th {
        border-bottom: 0;
        border-top: 1px solid #edf2f9;
    }

    .table>:not(caption)>*>* {
        padding: 1rem 1rem;
        background-color: var(--bs-table-bg);
        border-bottom-width: 1px;
        box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
    }

    .px-0 {
        padding-right: 0 !important;
        padding-left: 0 !important;
    }

    .table thead th,
    tbody td,
    tbody th {
        vertical-align: middle;
    }

    tbody,
    td,
    tfoot,
    th,
    thead,
    tr {
        border-color: inherit;
        border-style: solid;
        border-width: 0;
    }

    .mt-5 {
        margin-top: 3rem !important;
    }

    .icon-circle[class*=text-] [fill]:not([fill=none]),
    .icon-circle[class*=text-] svg:not([fill=none]),
    .svg-icon[class*=text-] [fill]:not([fill=none]),
    .svg-icon[class*=text-] svg:not([fill=none]) {
        fill: currentColor !important;
    }

    .svg-icon>svg {
        width: 1.45rem;
        height: 1.45rem;
    }
    </style>
</head>


<body>
    <div class="container mt-6 mb-7">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-xl-7">
                <div class="card">
                    <div class="card-body p-5">
                        <h2>
                            Tambahan
                        </h2>

                        <div class="border-top border-gray-200 pt-4 mt-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="text-muted mb-2">Payment No.</div>
                                    <strong>
                                        <?php echo $hasil_data_reservasi['kodetransaksi']; ?>
                                    </strong>
                                </div>
                                <div class="col-md-6 text-md-end">
                                    <div class="text-muted mb-2">Payment Date</div>
                                    <strong>Feb/09/20</strong>
                                </div>
                            </div>
                        </div>
                        <div class="border-top border-gray-200 mt-4 py-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="text-muted mb-2">Client</div>
                                    <strong>
                                        <?php echo $hasil_data_reservasi['namalengkap']; ?>
                                    </strong>
                                    <p class="fs-sm">
                                        <?php echo $hasil_data_reservasi['alamat']; ?>
                                        <br>
                                        <a href="#!" class="text-purple"><span class="__cf_email__"
                                                data-cfemail="6f050007012f0a020e0603410c0002">[email&#160;protected]</span>
                                        </a>
                                    </p>
                                </div>
                                <div class="col-md-6 text-md-end">
                                    <div class="text-muted mb-2">Payment To</div>
                                    <strong>
                                        Catdoorz
                                    </strong>
                                    <p class="fs-sm">
                                        Jl. Dipati Ukur No.122-116,Kota Bandung,Jawa Barat
                                        <br>
                                        <a href="#!" class="text-purple"><span class="__cf_email__"
                                                data-cfemail="4b3f232e262e380b2e262a222765282426">[email&#160;protected]</span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <table class="table border-bottom border-gray-200 mt-3">
                            <thead>
                                <tr>
                                    <th scope="col" class="fs-sm text-dark text-uppercase-bold-sm px-0">Tambahan</th>
                                    <th scope="col" class="fs-sm text-dark text-uppercase-bold-sm text-end px-0">Harga
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="px-0">
                                        <?php echo $hasil_data_hewan['tambahan']; ?>
                                    </td>
                                    <td class="text-end px-0">
                                        Rp.
                                        <?php echo $hasil_data_reservasi['tambahan']; ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="mt-5">
                            <div class="d-flex justify-content-end">
                                <p class="text-muted me-3">Subtotal:</p>
                                <span>
                                    Rp.
                                    <?php echo $hasil_data_reservasi['tambahan']; ?>
                                </span>
                            </div>

                            <div class="d-flex justify-content-end mt-3">
                                <h5 class="me-3">Total:</h5>
                                <h5 class="text-success">
                                    Rp.
                                    <?php echo $hasil_data_reservasi['tambahan']; ?>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-dark btn-lg card-footer-btn justify-content-center text-uppercase-bold-sm hover-lift-light"
                        href="hapustabelcatdoorz.php?kodetransaksi=<?php echo $next_kode; ?>"
                        onclick="return confirm('Anda yakin ingin Checkout?')">
                        Checkout
                    </a>


                </div>

            </div>
        </div>
    </div>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">

    </script>
</body>

</html>