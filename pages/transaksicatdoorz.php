<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Transaksi</title>
</head>
<?php
include("catdoorzfunction.php");
?>

<body>
    <div class="container">
        <div class="title">
            <h2>KUCINGKU</h2>
        </div>
        <div class="d-flex">
            <form name="fcatdoorz" action="<?php simpandata(); ?>" method="POST">
                <label>
                    <span class="fname">Nama Lengkap <span class="required">*</span></span>
                    <input type="text" name="namalengkap">
                </label>
                <label>
                    <span class="fname">Jumlah Hewan <span class="required">*</span></span>
                    <input type="text" name="jumlahhewan">
                </label>
                <label>
                    <span class="fname">Nama Hewan <span class="required">*</span></span>
                    <input type="text" name="namahewan">
                </label>
                <label>
                    <span class="lname">No.Telepon <span class="required">*</span></span>
                    <input type="number" name="nohp" placeholder="+62/0 8137898676">
                </label>
                <label>
                    <span class="lname">Email <span class="required">*</span></span>
                    <input type="email" name="email" placeholder="example@Gmail.com">
                </label>
                <label>
                    <span>Alamat <span class="required">*</span></span>
                    <input type="text" name="alamat">
                </label>
                <label>
                    <span>Paket</span>
                    <select name="paket">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                    </select>
                </label>
                <label>
                    <span>Lama Waktu</span>
                    <select name="lamawaktu">
                        <option value="Harian">Harian</option>
                        <option value="Mingguan">Mingguan</option>
                    </select>
                </label>
                <label>
                    <span>&nbsp;</span>
                    <input type="text" name="waktu" placeholder="">
                </label>
                <label>
                    <span>Tambahan</span>
                    <select name="tambahan">
                        <option value="">-</option>
                        <option value="Treats">Treats +4k/pcs</option>
                        <option value="Grooming">Grooming +15k</option>
                        <option value="Vitamin">Tambahan Vitamin +20k</option>
                    </select>
                </label>
                <label>
                    <span>Kondisi Kucing</span>
                    <input type="radio" name="kondisi" value="Sehat"> Sehat
                    <input type="radio" name="kondisi" value="Tidak Sehat"> Sakit
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