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
        function writeMsg ($nama){
            echo "Selamat Datang " . $nama . "<br>";
        }
        writeMsg("Fahrul Hidayattulloh");

        function tambah (int $angak1, int $angka2) {
            $a = $angak1 + $angka2;
            return $a;
        }
        $hasil  = tambah(5,10);
        echo $hasil;
    ?>
</body>
</html>