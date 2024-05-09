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
        $buah = array ("nanas", "mangga", "jeruk", "apel", "melon", "manggis");
        echo "saya suka " . $buah[0] . ", " . $buah[1] . "dan " . $buah[2];

        //tampilkan mangga
        echo "saya suka $buah[1] <br>";
        //tampilkan jeruk
        echo "saya suka $buah[2] <br>";
        //tampilkan apel
        echo "saya suka $buah[3] <br>";
        //tampilkan melon
        echo "saya suka $buah[4] <br>";
        

        //array spesifik index
        $umur = array ("Andi" => "35 Tahun", "Ben" => "37 Tahun", "Joe" => "40 Tahun");
        $umur ["Ahmad"] = "50 Tahun";
        echo "Umur Andi adalah " . $umur["Andi"] ."<br>";
        echo "Umur Ben adalah " . $umur["Ben"] ."<br>";
        echo "Umur Joe adalah " . $umur["Joe"] ."<br>";
        echo "Umur Ahmad adalah " . $umur["Ahmad"] ."<br>";
    ?>
</body>
</html>