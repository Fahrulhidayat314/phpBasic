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
        /**
     * C    = 0 -> 59
     * BC   = 60 -> 69
     * B    = 70 -> 79
     * AB   = 80 -> 89
     * A    = 90 -> 100
     */

     $nilai = 85;
     if ($nilai >= 90 && $nilai <=100) {
        echo "Selamat Anda Mendapat Nilai A";
     }elseif ($nilai >= 80 && $nilai <=89) {
        echo "Selamat Anda Mendapat Nilai AB";
     }elseif ($nilai >= 70 && $nilai <=79) {
        echo "Selamat Anda Mendapat Nilai B";
     }elseif ($nilai >= 60 && $nilai <=69) {
        echo "Nilai Anda BC, Tingkatkan Belajar Anda";
     }else {
        echo "Nilai Anda C, Tingkatkan Belajar Anda";
     }
    ?>
    
</body>
</html>