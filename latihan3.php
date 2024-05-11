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
    $x = 5;
    $y = 10;

    // Arithmetic Operators
    echo "Penjumlahan ". $x + $y. "<br>";
    echo "Pengurangan ". $x - $y. "<br>";
    echo "Perkalian ". $x * $y. "<br>";
    echo "Pembagian ". $x / $y. "<br>";
    echo "Modulus ". $x % $y. "<br>";
    echo "Eksponensial ". $x ** $y. "<br>";
    echo ("<br>");

    // Assignment Operators
    $x += 2;  //.$x = $x *2
    $y *= 2; //.$y = $y *2
    echo "Penjumlahan " .$x."<br>";
    echo "Perkalian " .$y."<br>";
    echo ("<br>");

    //Increment and Decrement
    echo "Isi ++x = ".++$x."<br>";
    echo "Isi x++ = ".$x++."<br>";
    echo "Isi x = ".$x."<br>";
    echo ("<br>");
    echo "Isi --y = ".++$y."<br>";
    echo "Isi y-- = ".$y--."<br>";
    echo "Isi y = ".$y."<br>";

    // Conditional assignment operators
    $user = "Fahrul hidayattulloh";

    // <kondisi> ? <jika kondisi true> : <jika kondisi false>
    $status = (empty($user)) ? "Kosong" : "Ada Isi";
    echo $status. "<br>";

    // Variable $color diisi dengan "red" jika $color null
    echo $color = $color ?? "red";
    ?>
</body>
</html>