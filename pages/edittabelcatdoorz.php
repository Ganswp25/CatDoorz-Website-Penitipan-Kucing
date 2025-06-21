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

        // Mengambil data dari tabel data_reservasi
        $sql_data_reservasi = "SELECT * FROM data_reservasi WHERE kodetransaksi='$next_kode'";
        $hasil_data_reservasi = mysqli_query($conn, $sql_data_reservasi);
        $hasil_data_reservasi = mysqli_fetch_array($hasil_data_reservasi);

        // Mengambil data dari tabel data_kandang
        $sql_data_hewan = "SELECT * FROM data_kandang WHERE kodetransaksi = '$next_kode'";
        $hasil_data_hewan = mysqli_query($conn, $sql_data_hewan);
        $hasil_data_hewan = mysqli_fetch_array($hasil_data_hewan);

        $tambahan  = array('Treats', 'Grooming', 'Vitamin');
        $paket  = array('A', 'B', 'C');
        $lamawaktu  = array('Harian', 'Mingguan');

        function active_radio_button($value, $input) {
            return $value == $input ? 'checked' : '';
        }
        ?>


<body>
    <div class="container">
        <div class="title">
            <h2>CATDOORZ</h2>
        </div>
        <div class="d-flex">
            <form name="fcatdoorz" action="updatetabelcatdoorz.php" method="POST">
                <input type="hidden" name="kodetransaksi" value="<?php echo $next_kode; ?>" />
                <label>
                    <span class="fname">Nama Lengkap <span class="required">*</span></span>
                    <input type="text" name="namalengkap" value="<?php echo$hasil_data_reservasi['namalengkap']; ?>">
                </label>
                <label>
                    <span class="fname">Jumlah Hewan <span class="required">*</span></span>
                    <input type="text" name="jumlahhewan" value="<?php echo $hasil_data_hewan['jumlahhewan']; ?>">
                </label>
                <label>
                    <span class="fname">Nama Hewan <span class="required">*</span></span>
                    <input type="text" name="namahewan" value="<?php echo $hasil_data_hewan['namahewan']; ?>">
                </label>
                <label>
                    <span class="lname">No.Telepon <span class="required">*</span></span>
                    <input type="number" name="nohp" value="<?php echo $hasil_data_reservasi['nohp']; ?>">
                </label>
                <label>
                    <span class="lname">Email <span class="required">*</span></span>
                    <input type="email" name="email" value="<?php echo $hasil_data_reservasi['email']; ?>">
                </label>
                <label>
                    <span>Alamat <span class="required">*</span></span>
                    <input type="text" name="alamat" value="<?php echo $hasil_data_reservasi['alamat']; ?>">
                </label>
                <label>
                    <span>Paket</span>
                    <select name="paket">
                        <option value="A" <?php echo active_radio_button("A",$hasil_data_hewan['paket']); ?>>A</option>
                        <option value="B" <?php echo active_radio_button("B",$hasil_data_hewan['paket']); ?>>B</option>
                        <option value="C" <?php echo active_radio_button("C",$hasil_data_hewan['paket']); ?>>C</option>
                    </select>
                </label>
                <label>
                    <span>Lama Waktu</span>
                    <select name="lamawaktu">
                        <?php
                            foreach ($lamawaktu as $lw){
                                echo"<option value='$lw'";
                                echo $hasil_data_hewan['lamawaktu']==$lw? 'selected="selected"':"";
                                echo ">$lw</option>";
                            }
                            ?>
                    </select>
                </label>
                <label>
                    <span>&nbsp;</span>
                    <input type="text" name="waktu" value="<?php echo $hasil_data_hewan['waktu']; ?>">
                </label>
                <label>
                    <span>Tambahan</span>
                    <select name="tambahan">
                        <?php
                            foreach ($tambahan as $t){
                                echo"<option value='$t'";
                                echo $hasil_data_hewan['tambahan']==$t? 'selected="selected"':"";
                                echo ">$t</option>";
                            }
                            ?>
                    </select>
                </label>
                <label>
                    <span>Kondisi Kucing</span>
                    <input type="radio" name="kondisi" value="Sehat"
                        <?php echo active_radio_button("Sehat",$hasil_data_hewan['kondisi']); ?>> Sehat
                    <input type="radio" name="kondisi" value="Tidak Sehat"
                        <?php echo active_radio_button("Tidak Sehat",$hasil_data_hewan['kondisi']); ?>> Tidak Sehat
                </label>
                <button type="submit" value="Update">Update</button>
                <button type="reset" value="Reset">Reset</button>
        </div><!-- Yorder -->
        </form>
    </div>
    </div>
</body>

</html>