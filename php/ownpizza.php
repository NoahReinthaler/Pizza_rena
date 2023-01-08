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

<nav class="navbar navbar-expand-lg bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand text-light" href="../index.html"><img src="../Images/Hintergrund/logo.png" alt="Logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon navbar-light"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      
        <div class="navbar-nav topnav" id="myTopnav">
          <a class="nav-link" href="../../Pizza_rena/index.html">Home</a>
          <a class="nav-link" href="../Html/menue.html">Menü</a>
          <a class="nav-link" href="../Html/kontakt.html">Kontakt</a>
          <a class="nav-link" href="../Html/karriere.html">Karriere</a>
          <a class="nav-link" href="../Html/pizza_konfigurator.html">Pizza Konfigurator</a>
       
        </div>
      </div>
    </div>
  </nav>
</div>

    <h1 class="text-center text-light marg">Hier ist Ihre Bestellung</h1>
    
    <h2 class="text-center text-light marg">Eigens erstellte Pizza</h2>
    <?php
        //Größe und Anzahl der Pizzen ausgeben
        if(isset($_POST['senden'])){
            $anzahl = $_POST['anzahl'];
            $size = $_POST['size'];
            echo "<p class='form_text'>Sie haben $anzahl Pizza/en bestellt in der Größe $size</p>";
        echo "</p>";
        }
        //Käse Sorte ausgeben
        if(isset($_POST['kaese'])){
            $kaese = $_POST['kaese'];

            echo "<p class='form_text'>Sie haben diese Käse Sorte/n ausgewählt: ";
            foreach($kaese as $key => $value1){
                echo "$value1, ";
            };
        echo "</p>";
        }
        //Wurst Sorte ausgeben
        if(isset($_POST['sausage'])){
            $sausage = $_POST['sausage'];
            echo "<p class='form_text'>Sie haben diese Wurst Sorte/n ausgewählt: ";
            foreach($sausage as $key => $value2){
                echo "$value2, ";
            };
        echo "</p>";
        }
        //Toppings ausgeben
        if(isset($_POST['extra'])){
            $extra = $_POST['extra'];
            echo "<p class='form_text'>Sie haben diese/s extra Topping/s ausgewählt: ";
            foreach($extra as $key => $value3){
                echo "$value3, ";
            };
        echo "</p>";
        }
        //Adresse
        if(isset($_POST['address'])){
            $address = $_POST['address'];
            echo "<p class='form_text'>Ihre Bestellung wird innerhalb von 30 Minuten nach $address gebracht</p>";
          
        echo "</p>";
        }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>