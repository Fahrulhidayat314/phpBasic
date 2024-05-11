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
        $warna = "kuning";
        switch ($warna) {
            case "merah":
                echo "Warna adalah merah";
                break;
            case "hijau":
                echo "Warna adalah hijau";
                break;
            case "kuning":
                echo "Warna adalah kuning";
                break;
            default: 
                echo "Warna tidak dikenal";
        }
    ?>
</body>
</html>