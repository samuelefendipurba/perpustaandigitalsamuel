<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Sederhana Penerapan Fungsi</title>
</head>
<body>
    <h1>Aplikasi Sederhana Penerapan Fungsi</h1>

    <?php
    function hitungLuasSegitiga($alas,$tinggi){
        return ($alas * $tinggi)/2;
    }

    $alas = 10;
    $tinggi = 20;

    $luas = hitungLuasSegitiga($alas,$tinggi);

    echo "Luas Segitiga dengan alas $alas dan tinggi $tinggi adalah $luas";
    ?>

</body>
</html>