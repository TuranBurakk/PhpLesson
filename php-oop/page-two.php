<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php OOP-2</title>
</head>

<body>
    <?php
    class bilgiler
    {
        function isimler()
        {
            return "mehmet"." ".$this->meyveler();
        }
        function meyveler()
        {
            return "Armut";
        }
    }
    
    $bilgiler= new bilgiler();
    echo $bilgiler->isimler();

    ?>
</body>

</html>