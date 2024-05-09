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
         * Operator logika yang bisa digunakan
         * ==   Sama dengan         $x == $y
         * ===  Identical           $x === $y
         * !=   Tidak sama dengan   $x != $y
         * <>   Tidak sama dengan   $x <> $y
         * !==  Not identical       $x !== $y
         * >    Lebih besar dari    $x > $y
         * <    Kurang dari         $x < $y
         * >=   Lebih besar atau sama dengan    $x >= $y
         * <=   Kurang dari atau sama dengan    $x <= $y
         * <=>  Spaceship   $x  <=> $y
         */

         $t  = date("H"); // 1 - 24 Jam
         echo "If <br>";
         if ($t < 16) {
            echo "Selamat Datang";
         }

         echo "<br> If dan Else <br>";         
         if ($t < 20){
            echo "Selamat Siang";
         }else{
            echo "Selamat Malam";
         }

         echo "<br> Nested If <br>";  
         if ($t < 13) {
            echo "Selamat Pagi";
         }elseif  ($t < 17) {
            echo "Selamat Siang";
         }else {
            echo "Selamat Malam";
         }
    ?>
</body>
</html>