<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO</title>
</head>

<body>
    <?php
    $sunucu = "localhost";
    $kullanici = "root";
    $sifre = "";
    $varitabaniAdi = "phpdersleri";

    try {

        $baglanti=new PDO("mysql:host=".$sunucu.";dbname=".$varitabaniAdi.";charset=utf8",$kullanici,$sifre);
        echo "veritabanına bağlandı";

    } catch (PDOException $e) {
        echo $e->getMessage();
        exit();
    }


    ?>

</body>

</html>