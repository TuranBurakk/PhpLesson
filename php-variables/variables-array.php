<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>

<body>
    <?php
    $bilgiler = [
        "Meyveler" => ["Elma", "Armut"],
        "Sebzeler" => ["Biber", "Soğan"],
        "İsimler" => ["Mehmet", "Burak"]
    ]
        ?>
    <ul>
        <li><?= $bilgiler["Meyveler"][0] ?></li>
        <li><?= $bilgiler["Sebzeler"][0] ?></li>
        <li><?= $bilgiler["İsimler"][0] ?></li>
    </ul>
</body>

</html>