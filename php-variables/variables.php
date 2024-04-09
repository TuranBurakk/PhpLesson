<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable</title>
</head>

<body>
    <?php
    $Variables = "buRak tuRan";
    $VariablesArray= array("react","php","html","javascript");
    //Tüm harfler büyük
    echo strtoupper($Variables).'<br>';
    //Tüm harfler küçük
    echo strtolower($Variables).'<br>';
    //Tüm baş harfler büyük
    echo ucwords($Variables).'<br>';
    //İlk harf büyük
    echo ucfirst($Variables).'<br>';

    echo $VariablesArray[0]."<br>".$VariablesArray[1]." ".$VariablesArray[2]." ".$VariablesArray[3]
    ?>

</body>

</html>