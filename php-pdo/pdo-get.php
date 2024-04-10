<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO-GET</title>
</head>

<body>
    <?php
    try {
        $baglanti = new PDO("mysql:host=localhost;dbname=phpdersleri;charset=utf8;", "root", "");
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit();
    }

    $oku = $baglanti->query("SELECT * FROM bilgiler", PDO::FETCH_ASSOC);

    if ($oku != false && !empty($oku)) {
        foreach ($oku as $value) {
            $ID = $value["ID"];
            $metin = $value["metin"];
            $durum = $value["durum"];
            echo "ID : " . $ID . " Metin : " . $metin . " durum : " . $durum . "<br>";
        }
    }
    ?>
</body>

</html>