<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="">Pinjem angka 1 :</label>
        <input type="number" name="angka1" required>
        
        <label for="">Pinjem angka 2 :</label>
        <input type="number" name="angka2" required>
        
        <label for="operator">Pilih mau yang mana :</label>
        <select name="operator" id="">
            <option value="tambah">Pertambahan</option>
            <option value="kurang">Pengurangan</option>
            <option value="kali">Perkalian</option>
            <option value="bagi">Pembagian</option>
        </select>
        
        <button type="submit" name="proses">Hitung</button>
    </form>




<?php

$hasil = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai angka1 dan angka2 dengan benar
    $angka1 = isset($_POST['angka1']) ? $_POST['angka1'] : 0;
    $angka2 = isset($_POST['angka2']) ? $_POST['angka2'] : 0;
    $operasi = isset($_POST['operator']) ? $_POST['operator'] : "";

    if (is_numeric($angka1) && is_numeric($angka2)) {
        // Perbaiki penggunaan variabel pada switch case
        switch($operasi) {
            case 'tambah':
                $hasil = $angka1 + $angka2;
                break;
            case 'kurang':
                $hasil = $angka1 - $angka2;
                break;
            case 'kali':
                $hasil = $angka1 * $angka2;
                break;
            case 'bagi':
                if ($angka2 != 0) {
                    $hasil = $angka1 / $angka2;
                } else {
                    $error = "Gaboleh pake nol/0";
                }
                break;
            default:
                $error = "Operator tidak valid";
        }
    } else {
        $error = "Masukkan angka yang benar";
    }
}

if (!empty($hasil)) {
    echo "Hasil: $hasil";
}
if (!empty($error)) {
    echo "Error: $error";
}
?>


</body>
</html>
