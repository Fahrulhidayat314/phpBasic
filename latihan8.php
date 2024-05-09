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
        $array = array (
            "1C" => array ("Udin", "Ismail", "Adi"),
            "1D" => array ("Lukman", "Fajri", "Mahmud")
        );

        // menampilkan data array
        print_r($array);
        // menampilkan kelas 1C
        print_r($array["1C"]);
        // menampilkan kelas 1D
        print_r($array["1D"]);
        // menampiilkan kelas 1D index 0
        echo $array ["1D"][0];
        // Menampilkan fajri
        echo $array ["1D"][1];
        // menampilkan Adi
        echo $array ["1C"][2];

        // Bisa juga ditulis dengan
        // $array = [
        //     "1C" => ["Udin", "Ismail", "Adi"],
        //     "1D" => ["Lukman", "Fajri", "Mahmud"]
        // ];
    ?>
</body>
</html>