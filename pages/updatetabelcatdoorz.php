<?php
include 'edittabelcatdoorz.php';
//menyimpan data kedalam variabl
$next_kode = $_POST['kodetransaksi'];
$namalengkap = $_POST['namalengkap'];
$nohp = $_POST['nohp'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$namahewan = $_POST['namahewan'];
$kondisi = $_POST['kondisi'];
$paket = $_POST['paket'];
$lamawaktu = $_POST['lamawaktu'];
$waktu = $_POST['waktu'];
$tambahan = $_POST['tambahan'];
$jumlahkucing = $_POST['jumlahhewan'];   
//query SQL untuk udpdate dtaa
$sql_data_reservasi = "UPDATE data_reservasi SET namalengkap='$namalengkap', nohp='$nohp', email='$email', alamat='$alamat' WHERE kodetransaksi='$next_kode'";
mysqli_query($conn,$sql_data_reservasi);
// Query SQL untuk update data_kandang
$sql_data_hewan = "UPDATE data_kandang SET namahewan='$namahewan', kondisi='$kondisi', paket='$paket', lamawaktu='$lamawaktu', waktu='$waktu', tambahan='$tambahan', jumlahhewan='$jumlahkucing' WHERE kodetransaksi='$next_kode'";
mysqli_query($conn, $sql_data_hewan);


echo"<script type ='text/javascript'>alert('Data dengan kodetransaksi $next_kode telah berhasil di update'); document.location='tableCatdoorz.php';</script>";
//mengalihkan ke halaman view tabel
//header("location:pertemuan301db.php");
?>
