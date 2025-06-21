<?php

function simpandata()
{
    require("konekasidbcatdoorz.php");

    if (isset($_POST['namalengkap'])) {
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


        if ($paket == "A" || $lamawaktu == "H") {
            $pharga = 45000 * $waktu;
            $npaket = "Paket A";
        } else if ($paket == "B" || $lamawaktu == "H") {
            $pharga = 50000 * $waktu;
            $npaket = "Paket B";
        } else if ($paket == "C" || $lamawaktu == "H") {
            $pharga = 60000 * $waktu;
            $npaket = "Paket C";
        } else if ($paket == "A" || $lamawaktu == "M") {
            $pharga = 50000 * $waktu;
            $npaket = "Paket A";
        } else if ($paket == "B" || $lamawaktu == "M") {
            $pharga = 55000 * $waktu;
            $npaket = "Paket B";
        } else if ($paket == "C" || $lamawaktu == "M") {
            $pharga = 70000 * $waktu;
            $npaket = "Paket C";
        }

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
            $tharga = "0";

        }



        $bayar = $pharga;
        $total = $pharga + $tharga;

        if (!empty($namalengkap)) {
            // Insert data into "data_reservasi" table
            $row_count_sql = "SELECT COUNT(*) as row_count FROM data_reservasi";
            $result = $conn->query($row_count_sql);
            $row_count = 0;

            function generateNextCode($conn)
            {
                // Get a list of existing codes
                $existing_codes = array();
                $sql_existing_codes = "SELECT kodetransaksi FROM data_reservasi";
                $result_existing_codes = $conn->query($sql_existing_codes);

                if ($result_existing_codes->num_rows > 0) {
                    while ($row = $result_existing_codes->fetch_assoc()) {
                        $existing_codes[] = $row['kodetransaksi'];
                    }
                }

                // Generate the next available code
                $next_code = "T001"; // Default initial code
                $i = 1;
                while (true) {
                    $potential_code = "T" . str_pad($i, 3, "0", STR_PAD_LEFT);
                    if (!in_array($potential_code, $existing_codes)) {
                        $next_code = $potential_code;
                        break;
                    }
                    $i++;
                }

                return $next_code;
            }





            function generateNextCodeK($conn, $jumlahkucing)
            {
                // Get a list of existing codes
                $existing_codes = array();
                $sql_existing_codes = "SELECT kodekandang FROM data_kandang";
                $result_existing_codes = $conn->query($sql_existing_codes);

                if ($result_existing_codes->num_rows > 0) {
                    while ($row = $result_existing_codes->fetch_assoc()) {
                        $existing_codes[] = $row['kodekandang'];
                    }
                }

                // Generate the next available code
                $next_code = ($jumlahkucing > 1) ? "B001" : "K001"; // Default initial code

                for ($i = 1; $i <= 20; $i++) {
                    $prefix = ($jumlahkucing > 1) ? "B" : "K";
                    $potential_code = $prefix . str_pad($i, 3, "0", STR_PAD_LEFT);
                    if (!in_array($potential_code, $existing_codes)) {
                        $next_code = $potential_code;
                        break;
                    }
                }

                return $next_code;
            }

            function generateAndAddDays($tambahtgl)
            {
                $currentDate = date('Y-m-d');
                $dateObj = new DateTime($currentDate);
                $dateObj->modify("+$tambahtgl days");
                return $dateObj->format('Y-m-d');
            }

            function generateTodayDate()
            {
                return date('Y-m-d');
            }

            if ($lamawaktu == "H") {
                $tambahtgl = $waktu;
            } else {
                $tambahtgl = $waktu * 7;
            }






            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $row_count = $row["row_count"];
            }

            if ($row_count < 40) {
                $todaydate = generateTodayDate();
                $newDate = generateAndAddDays($tambahtgl);
                $next_code = generateNextCode($conn);
                $next_codek = generateNextCodeK($conn, $jumlahkucing);
                $sql_data_reservasi = "INSERT INTO data_reservasi (kodetransaksi,namalengkap,alamat, nohp, email,tglmasuk,tglkeluar,bayar,tambahan,total) VALUES ('$next_code','$namalengkap', '$alamat', '$nohp', '$email','$todaydate','$newDate','$bayar','$tharga','$total' )";
                $hasil_data_reservasi = mysqli_query($conn, $sql_data_reservasi);
                // Insert data into "data_hewan" table
                $sql_data_hewan = "INSERT INTO data_kandang (kodetransaksi,kodekandang,jumlahhewan, namahewan, kondisi,paket,lamawaktu,waktu,tambahan,tglmasuk,tglkeluar) VALUES ('$next_code','$next_codek','$jumlahkucing','$namahewan', '$kondisi','$paket','$lamawaktu','$waktu','$tambahan','$todaydate','$newDate')";
                $hasil_data_hewan = mysqli_query($conn, $sql_data_hewan);

                if ($hasil_data_reservasi && $hasil_data_hewan) {

                    $invoiceData = [
                        'namalengkap' => $namalengkap,
                        'nohp' => $nohp,
                        'email' => $email,
                        'alamat' => $alamat,
                        'namahewan' => $namahewan,
                        'kondisi' => $kondisi,
                        'paket' => $paket,
                        'lamawaktu' => $lamawaktu,
                        'tambahan' => $tambahan,
                        'harga' => $pharga,
                        'npaket' => $npaket,
                        'tharga' => $tharga,
                        'ntambahan' => $ntambahan,
                        'total' => $total,
                        'newdate' => $todaydate,
                        'kodetransaksi' => $next_code,
                    ];

                    session_start();
                    $_SESSION['invoiceData'] = $invoiceData;

                    header("Location: invoice.php");
                    exit();

                } else {
                    echo "Gagal menambahkan data";
                }
            } else {
                echo "data penuh";
            }
        } else {
            echo "Nama Lengkap Tidak Boleh Kosong";
        }
    }
}

// Call the function
simpandata();
?>