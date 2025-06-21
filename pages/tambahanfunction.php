<?php
include 'konekasidbcatdoorz.php';

$next_kode = $_POST['kodetransaksi'];
$tambahan = $_POST['tambahan'];

if ($tambahan == "Treats") {
    $ntambahan = "Treats";
    $tharga = 4000;
} else if ($tambahan == "Grooming") {
    $ntambahan = "Grooming";
    $tharga = 15000;
} else if ($tambahan == "Vitamin") {
    $ntambahan = "Vitamin";
    $tharga = 20000;
} else {
    $ntambahan = "-";
    $tharga = "";

}

$sql_harga_lama = "SELECT tambahan FROM data_reservasi WHERE kodetransaksi='$next_kode'";
$result = mysqli_query($conn, $sql_harga_lama);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $harga_lama = $row['harga'];

    // Gabungkan harga yang sudah ada dengan harga baru
    $harga_baru_total = $harga_lama + $tharga;

    $update_sql = "UPDATE data_reservasi SET tambahan='$harga_baru_total' WHERE kodetransaksi='$next_kode'";

    if (mysqli_query($conn, $update_sql)) {
        // Update harga berhasil, sekarang tambahkan tambahan ke tabel data_kandang
        $sql_tambahan_lama = "SELECT tambahan FROM data_kandang WHERE kodetransaksi='$next_kode'";
        $result_tambahan = mysqli_query($conn, $sql_tambahan_lama);

        if ($result_tambahan) {
            $row_tambahan = mysqli_fetch_assoc($result_tambahan);
            $tambahan_lama = $row_tambahan['tambahan'];

            $tambahan_baru = $tambahan_lama . "," . $tambahan;

            $update_tambahan_sql = "UPDATE data_kandang SET tambahan='$tambahan_baru' WHERE kodetransaksi='$next_kode'";

            if (mysqli_query($conn, $update_tambahan_sql)) {
                // Mengupdate tambahan berhasil, sekarang mengalikan jumlah dengan harga dan mengupdate total
                $sql_bayar_lama = "SELECT bayar FROM data_reservasi WHERE kodetransaksi='$next_kode'";
                $result_bayar = mysqli_query($conn, $sql_bayar_lama);

                if ($result_bayar) {
                    $row_bayar = mysqli_fetch_assoc($result_bayar);
                    $bayar_lama = $row_bayar['bayar'];

                    // Mengalikan jumlah dengan harga
                    $total_baru = $bayar_lama + $harga_baru_total;

                    $update_total_sql = "UPDATE data_reservasi SET total='$total_baru' WHERE kodetransaksi='$next_kode'";

                    if (mysqli_query($conn, $update_total_sql)) {
                        echo "<script type ='text/javascript'>alert('$tambahan telah berhasil ditambahkan'); document.location='tableCatdoorz.php';</script>";
                    } else {
                        echo "Error: " . $update_total_sql . "<br>" . mysqli_error($conn);
                    }
                } else {
                    echo "Error: " . $sql_bayar_lama . "<br>" . mysqli_error($conn);
                }
            } else {
                echo "Error: " . $update_tambahan_sql . "<br>" . mysqli_error($conn);
            }
        } else {
            echo "Error: " . $sql_tambahan_lama . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Error: " . $update_sql . "<br>" . mysqli_error($conn);
    }
} else {
    echo "Error: " . $sql_harga_lama . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>