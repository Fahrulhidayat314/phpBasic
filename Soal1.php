<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Div dan Span</title>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307011">
    <meta name="author" content="Fahrul Hidayattulloh">
</head>
<body>
    <h1>Ini Halaman PHP Saya</h1>

    <?php 
        $nama = "Obi";
        $gPokok = 3250000;
        $tunjangan = 1200000;
        $gKotor = $gPokok + $tunjangan;
        $pajak = 10 / 100 * $gKotor;
        $gBersih = $gKotor - $pajak;

        echo "Nama : " . $nama . "<br>";
        echo "Gaji Pokok : " . $nama . " Sebesar Rp. " . $gPokok ."<br>";
        echo "Tunjangan : " . $nama . " Sebesar Rp. " . $tunjangan ."<br>";
        echo "Gaji Kotor : " . $nama . " Sebesar Rp. " . $gKotor ."<br>";
        echo "Pajak : " . $nama . " Sebesar Rp. " . $pajak ."<br>";
        echo "Gaji Bersih : " . $nama . " Sebesar Rp. " . $gBersih ."<br>";
    ?>  
</body>
</html>