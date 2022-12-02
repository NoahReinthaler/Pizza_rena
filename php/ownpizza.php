<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Pizza Konfigurator Ausgabe</title>
</head>
<body class="background">
    <h1>Hier ist Ihre Bestellung</h1>
    <?php
        if(isset($_POST['senden'])){
            $anzahl = $_POST['anzahl'];
            $kaese = $_POST['kaese'];
            $extra = $_POST['extra'];
            $sausage = $_POST['sausage'];

                echo "Sie haben $anzahl Pizza/en bestellt";

                echo "Sie haben diese Käse Sorte/n ausgewählt: ";
                    foreach($kaese as $key => $value){
                        echo "$value, ";
                    };

                echo "Sie haben diese Wurst Sorte/n ausgewählt: ";
                    foreach($sausage as $key => $value){
                        echo "$value, ";
                    };

                echo "Sie haben diese extra Topping/s ausgewählt: ";
                    foreach($extra as $key => $value){
                        echo "$value, ";
                    };

        }
        

    ?>
</body>
</html>