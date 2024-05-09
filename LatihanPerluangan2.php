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
        $angka = array(12, 13, 15, 16, 67, 189, 346, 876, 54232, 3256);

        foreach ($angka as $nilai){
            $a = ($nilai % 2) ? "Ganjil " : "Genap";
            echo "$nilai .$a <br>";
        }
    ?>
</body>
</html>