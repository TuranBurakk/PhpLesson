<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get-Post</title>
</head>

<body>
    <a href="page2.php?ac=page2.php">Page 2</a><br>
    <?php 
    if($_GET)
    {
        include_once($_GET["ac"]);
    }
    ?>
</body>

</html>