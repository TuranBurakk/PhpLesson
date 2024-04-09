<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explode</title>
</head>
<body>
    <?php
    $metin="Mehabalar php dünyasına hoşgeldiniz";
    $cevir=explode(" ", $metin);
    //print_r($cevir);
    $dizi = ["Mehabalar","php","dünyasına","hoşgeldiniz"];
    $text = implode(" ", $dizi);
    echo $text;
    ?>
    
</body>
</html>