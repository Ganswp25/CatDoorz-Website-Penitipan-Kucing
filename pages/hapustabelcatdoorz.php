<?php
include 'konekasidbcatdoorz.php';

$next_code = $_GET['kodetransaksi'];

// Query SQL untuk menghapus data dari data_reservasi
$query_data_reservasi = "DELETE FROM data_reservasi WHERE kodetransaksi = '$next_code'";
if (mysqli_query($conn, $query_data_reservasi)) {
    echo "Data dari data_reservasi berhasil dihapus.<br>";
} else {
    echo "Error: " . $query_data_reservasi . "<br>" . mysqli_error($conn);
}

// Query SQL untuk menghapus data dari tabel kedua (misalnya, tabel_lain)
$query_tabel_lain = "DELETE FROM data_kandang WHERE kodetransaksi = '$next_code'";
if (mysqli_query($conn, $query_tabel_lain)) {
    echo "Data dari tabel_lain berhasil dihapus.<br>";
} else {
    echo "Error: " . $query_tabel_lain . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

// Mengalihkan ke halaman tabel setelah penghapusan
header("location:tableCatdoorz.php");
?>