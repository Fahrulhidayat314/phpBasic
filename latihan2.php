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
    // Variable dalam php

    $txt = "Selamat datang";
    $txt2 = "Politeknik Negeri Madiun";
    $x = 5;
    $y = 10.5;

    echo "<p> isi Variable txt adalah: $txt </p>" ;
    echo "<p> isi Variable x adalah: $x </p>" ;
    echo "<p> isi Variable y adalah: $y </p>" ;
    echo "Belajar PHP di ". $txt2. "<br>";

    // php konstanta
    define("nama_konstansa", "Fahrul");
    echo "<br>" .nama_konstansa;
    ?>
</body>
</html>