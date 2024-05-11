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
        $angka = 9;

        switch ($angka) {
            case 1:
                echo "Satu";
                break;
            case 2:
                echo "Dua";
                break;
            case 3:
                echo "Tiga";
                break;
            case 4: 
                echo "Empat";
                break;
            case 5:
                echo "Lima";
                break;
            case 6:
                echo "Enam";
                break;
            case 7:
                echo "Tujuh";
                break;
            case 8: 
                echo "Delapan";
                break;
            case 9:
                echo "Sembilan";
                break;
            default:
                echo "Angka diluar range";
        }
    ?>
</body>
</html>