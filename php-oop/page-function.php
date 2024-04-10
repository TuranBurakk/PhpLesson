<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP function</title>
</head>
<body>
    <?php
    class sayilar{

        function __construct()
        {
            echo "PHP Türkiye";
        }
    
        private function sayi(){
            return 15;
        }

        public function hesapla($sayi1,$sayi2)
        {
            return ($sayi1+$sayi2+$this -> sayi ());
        }

        function __destruct()
        {
            echo "SON KOMUT";
        }
    }
    $sayilar= new sayilar();
    echo $sayilar->hesapla(20,25);
    ?>
</body>
</html>