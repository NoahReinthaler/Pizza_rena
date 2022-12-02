<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Pizza Konfigurator Ausgabe</title>
</head>
<body class="background">
    <h1 class="text-center text-light">Hier ist Ihre Bestellung</h1>
    <br>
    <?php
        if(isset($_POST['senden'])){
            $anzahl = $_POST['anzahl'];
            $kaese = $_POST['kaese'];
            $extra = $_POST['extra'];
            $sausage = $_POST['sausage'];
            $size = $_POST['size'];

                echo "<p class='form_text'>Sie haben $anzahl Pizza/en bestellt in der Größe $size</p>";

                    

                echo "<p class='form_text'>Sie haben diese Käse Sorte/n ausgewählt: </p>";
                    foreach($kaese as $key => $value){
                        echo "<nobr><p class='form_text_checkbox'> $value, </p></nobr>";
                    };
                    

                echo "<p class='form_text'>Sie haben diese Wurst Sorte/n ausgewählt: </p>";
                    foreach($sausage as $key => $value){
                        echo "<nobr><p class='form_text_checkbox'> $value, </p></nobr>";
                    };
                    

                echo "<p class='form_text'>Sie haben diese extra Topping/s ausgewählt: </p>";
                    foreach($extra as $key => $value){
                        echo "<nobr><p class='form_text_checkbox'> $value, </p></nobr>";
                    };
                   

        }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>