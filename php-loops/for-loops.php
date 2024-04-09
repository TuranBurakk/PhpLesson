<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>

<body>
    <?php
    $names = ["ali", "ahmet", "mehmet"];

    for ($i = 0; $i < count($names); $i++) {
        echo $names[$i] . "<br>";
    }

    ?>
</body>

</html>