<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>
<body>
   <?php 
    $dizi=["mehmet", "ahmet","veli"];
    $sayac=0;

    while($sayac<count($dizi))
    {
        echo $dizi[$sayac]."<br>";
        $sayac++;
    }

    $sayac2=0;

    do{
        echo $dizi[$sayac2]."<br>";
        $sayac2++;

    }while($sayac2<count($dizi));
   
   ?> 
</body>
</html>