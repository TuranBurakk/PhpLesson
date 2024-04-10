<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php OOP</title>
</head>

<body>
    <?php
    class islemler
    {
        function topla($a, $b)
        {
            return ($a + $b);
        }
        function cıkar($a, $b)
        {
            return ($a - $b);
        }
    }
    $abc = new islemler();
    echo $abc->topla(100, 50) . "<br>";
    echo $abc->cıkar(100, 50);

    ?>
</body>

</html>