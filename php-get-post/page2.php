<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get-Post</title>
</head>

<body>
    
    <?php
    if ($_POST) {
        echo $_POST["name"] . "<br>";
    }
    ?>
    <a href="page2.php?degisken=Burak TURAN">Page 2 with get</a>


    <form action="#" method="POST">
        <input type="text" name="name">
        <input type="submit" name="buton" value="Gönder">
    </form>
</body>

</html>