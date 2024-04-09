<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İfElse</title>
    <?php
    $degisken = "TEST";

    if($degisken =="TAMAM"){
        echo "Çalıştı"."<br>";
    }
    else{
        echo $degisken."<br>";
    }

    echo ($degisken =="TAMAM")? "Çalıştı" : $degisken;

    ?>
</head>
<body>
    
</body>
</html>