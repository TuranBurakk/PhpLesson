<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>

<body>
    <?php
    function dateFormat($gun, $ay, $yil)
    {
        $aylar = ["Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık"];
        return $gun . " " . $aylar[$ay - 1] . " " . $yil;
    }

    $variable = dateFormat("10", "04", "2024");
    echo $variable;
    ?>
</body>

</html>