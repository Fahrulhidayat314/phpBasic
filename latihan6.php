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
        //while loop
        $x = 10;
        while ($x >= 5) {
            echo " Nomor $x <br>";
            $x --;
        }
        echo "<br>";

        //do while loop
        $y = 1;
        do {
            echo "Nomor $y <br>";
            $y++;
        }while ($y <= 5);
        echo "<br>";

        //foreach
        $colors = array ("red", "green", "blue");
        foreach ($colors as $value){
            echo "$value <br>";
        }
        echo "<br>";

        //for
        for ($i = 0; $i <= 10; $i++){
            echo "nomor = $i <br>";
        }
        echo "<br>";

        //for with break
        for ($a = 0; $a < 10; $a++){
            if ($a == 4){
                break;
            }
            echo "nomor : $a <br>";
        }
    ?>
</body>
</html>