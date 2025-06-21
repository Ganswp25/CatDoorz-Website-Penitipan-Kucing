<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>EDIT DATA CATDOORZ</title>
</head>
<?php
include("konekasidbcatdoorz.php");
$next_kode = $_GET['kodetransaksi'];


// Mengambil data dari tabel data_kandang
$sql_data_hewan = "SELECT * FROM data_kandang WHERE kodetransaksi = '$next_kode'";
$hasil_data_hewan = mysqli_query($conn, $sql_data_hewan);
$hasil_data_hewan = mysqli_fetch_array($hasil_data_hewan);
?>


<body>
    <div class="container">
        <div class="title">
            <h2>CATDOORZ</h2>
        </div>
        <div class="d-flex">
            <form name="fcatdoorz" action="tambahanfunction.php" method="POST">
                <input type="hidden" name="kodetransaksi" value="<?php echo $next_kode; ?>" />
                <label>
                    <span class="fname">Tambahan <span class="required">*</span></span>
                    <input type="text" name="ftambahan" value="<?php echo $hasil_data_hewan['tambahan']; ?>">
                </label>
                <label>
                    <span></span>
                    <select name="tambahan">
                        <option value="Treats">Treats +4k/pcs</option>
                        <option value="Grooming">Grooming +15k</option>
                        <option value="Vitamin">Tambahan Vitamin +20k</option>
                    </select>
                </label>
                <label>
                    <span>Pembayaran
                        <span class="required">*</span></span>
                    <input type="radio" name="payment" value="Cash"> Cash
                </label>
                <button type="submit" value="Simpan Order">Simpan Order</button>
        </div><!-- Yorder -->
        </form>
    </div>
    </div>
</body>

</html>