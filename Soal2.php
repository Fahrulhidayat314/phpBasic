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
        function hitungPecahanUang($jumlahUang)
        {
            $pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 500];
            $jumlahPecahan = [];
    
            foreach ($pecahan as $nilai) {
                $jumlah = intval($jumlahUang / $nilai);
                $jumlahPecahan[$nilai] = $jumlah;
                $jumlahUang %= $nilai;
            }
    
            return $jumlahPecahan;
        }
    
        $jumlahUangDiambil = 1387500;
        $hasilHitung = hitungPecahanUang($jumlahUangDiambil);
    
        echo "Jumlah uang Ani : $jumlahUangDiambil <br><br>"; 
    
        foreach ($hasilHitung as $nilai => $jumlah) {
            if ($jumlah > 0) {
                echo "Jumlah uang Rp. " . $nilai . " = " . $jumlah . " lembar<br>";
            }
        }
        ?>
</body>
</html>