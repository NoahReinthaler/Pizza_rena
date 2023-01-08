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
    <br>
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
 
    ?>
    <h2 class="text-center text-light marg">Bestellte Pizzen</h2>
    <br>
    <?php
echo "<p class='form_text'>Sie haben bestellt: </p>";
      
echo "<p>";
      if(isset($_POST['pizzabe1'])){
        $pizzabe1 = $_POST['pizzabe1'];
          foreach ($pizzabe1 as $key => $pizza1) {
            echo "<p class='form_text'>$pizza1 ";
          }
          if(isset($_POST['anzahl1'])){
            $anzahl1 = $_POST['anzahl1'];
            foreach ($anzahl1 as $key => $num1) {
             
              echo "$num1 ";
              echo "</p>";
            }
        }
      }
echo "</p>";
    
echo "<p>";
      if(isset($_POST['pizzabe2'])){
        $pizzabe2 = $_POST['pizzabe2'];
          foreach ($pizzabe2 as $key => $pizza2) {
            echo "<p class='form_text'>$pizza2 ";
          }
          if(isset($_POST['anzahl2'])){
            $anzahl2 = $_POST['anzahl2'];
            foreach ($anzahl2 as $key => $num2) {
             
              echo "$num2 ";
              echo "</p>";
            }
        }
      }
  echo "</p>";

  echo "<p>";
      if(isset($_POST['pizzabe3'])){
        $pizzabe3 = $_POST['pizzabe3'];
          foreach ($pizzabe3 as $key => $pizza3) {
            echo "<p class='form_text'>$pizza3 ";
          }
          if(isset($_POST['anzahl3'])){
            $anzahl3 = $_POST['anzahl3'];
            foreach ($anzahl3 as $key => $num3) {
             
              echo "$num3 ";
              echo "</p>";
            }
        }
      }
  echo "</p>";

  echo "<p>";
      if(isset($_POST['pizzabe4'])){
        $pizzabe4 = $_POST['pizzabe4'];
          foreach ($pizzabe4 as $key => $pizza4) {
            echo "<p class='form_text'>$pizza4 ";
          }
          if(isset($_POST['anzahl4'])){
            $anzahl4 = $_POST['anzahl4'];
            foreach ($anzahl4 as $key => $num4) {
             
              echo "$num4 ";
              echo "</p>";
            }
        }
      }
  echo "</p>";

  echo "<p>";
      if(isset($_POST['pizzabe5'])){
        $pizzabe5 = $_POST['pizzabe5'];
          foreach ($pizzabe5 as $key => $pizza5) {
            echo "<p class='form_text'>$pizza5 ";
          }
          if(isset($_POST['anzahl5'])){
            $anzahl5 = $_POST['anzahl5'];
            foreach ($anzahl5 as $key => $num5) {
             
              echo "$num5 ";
              echo "</p>";
            }
        }
      }
  echo "</p>";

  echo "<p>";
      if(isset($_POST['pizzabe6'])){
        $pizzabe6 = $_POST['pizzabe6'];
          foreach ($pizzabe6 as $key => $pizza6) {
            echo "<p class='form_text'>$pizza6 ";
          }
          if(isset($_POST['anzahl6'])){
            $anzahl6 = $_POST['anzahl6'];
            foreach ($anzahl6 as $key => $num6) {
             
              echo "$num6 ";
              echo "</p>";
            }
        }
      }
      echo "<p>";
      if(isset($_POST['pizzabe7'])){
        $pizzabe7 = $_POST['pizzabe7'];
          foreach ($pizzabe7 as $key => $pizza7) {
            echo "<p class='form_text'>$pizza7 ";
          }
          if(isset($_POST['anzahl7'])){
            $anzahl7 = $_POST['anzahl7'];
            foreach ($anzahl7 as $key => $num7) {
             
              echo "$num7 ";
              echo "</p>";
            }
        }
      }
  echo "</p>";

  echo "<p>";
  if(isset($_POST['pizzabe8'])){
    $pizzabe8 = $_POST['pizzabe8'];
      foreach ($pizzabe8 as $key => $pizza8) {
        echo "<p class='form_text'>$pizza8 ";
      }
      if(isset($_POST['anzahl8'])){
        $anzahl8 = $_POST['anzahl8'];
        foreach ($anzahl8 as $key => $num8) {
         
          echo "$num8 ";
          echo "</p>";
        }
    }
  }
echo "</p>";

echo "<p>";
      if(isset($_POST['pizzabe9'])){
        $pizzabe9 = $_POST['pizzabe9'];
          foreach ($pizzabe9 as $key => $pizza9) {
            echo "<p class='form_text'>$pizza9 ";
          }
          if(isset($_POST['anzahl9'])){
            $anzahl9 = $_POST['anzahl9'];
            foreach ($anzahl9 as $key => $num9) {
             
              echo "$num9 ";
              echo "</p>";
            }
        }
      }
  echo "</p>";

  echo "<p>";
      if(isset($_POST['pizzabe10'])){
        $pizzabe10 = $_POST['pizzabe10'];
          foreach ($pizzabe10 as $key => $pizza10) {
            echo "<p class='form_text'>$pizza10 ";
          }
          if(isset($_POST['anzahl10'])){
            $anzahl10 = $_POST['anzahl10'];
            foreach ($anzahl10 as $key => $num10) {
             
              echo "$num10 ";
              echo "</p>";
            }
        }
      }
  echo "</p>";

  echo "<p>";
  if(isset($_POST['pizzabe11'])){
    $pizzabe11 = $_POST['pizzabe11'];
      foreach ($pizzabe11 as $key => $pizza11) {
        echo "<p class='form_text'>$pizza11 ";
      }
      if(isset($_POST['anzahl11'])){
        $anzahl11 = $_POST['anzahl11'];
        foreach ($anzahl11 as $key => $num11) {
         
          echo "$num11 ";
          echo "</p>";
        }
    }
  }
echo "</p>";

echo "<p>";
      if(isset($_POST['pizzabe12'])){
        $pizzabe12 = $_POST['pizzabe12'];
          foreach ($pizzabe12 as $key => $pizza12) {
            echo "<p class='form_text'>$pizza12 ";
          }
          if(isset($_POST['anzahl12'])){
            $anzahl12 = $_POST['anzahl12'];
            foreach ($anzahl12 as $key => $num12) {
             
              echo "$num12 ";
              echo "</p>";
            }
        }
      }
echo "</p>";

echo "<p>";
      if(isset($_POST['pizzabe13'])){
        $pizzabe13 = $_POST['pizzabe13'];
          foreach ($pizzabe13 as $key => $pizza13) {
            echo "<p class='form_text'>$pizza13 ";
          }
          if(isset($_POST['anzahl13'])){
            $anzahl13 = $_POST['anzahl13'];
            foreach ($anzahl13 as $key => $num13) {
             
              echo "$num13 ";
              echo "</p>";
            }
        }
      }
echo "</p>";

echo "<p>";
      if(isset($_POST['pizzabe14'])){
        $pizzabe14 = $_POST['pizzabe14'];
          foreach ($pizzabe14 as $key => $pizza14) {
            echo "<p class='form_text'>$pizza14 ";
          }
          if(isset($_POST['anzahl14'])){
            $anzahl14 = $_POST['anzahl14'];
            foreach ($anzahl14 as $key => $num14) {
             
              echo "$num14 ";
              echo "</p>";
            }
        }
      }
echo "</p>";

echo "<p>";
      if(isset($_POST['pizzabe15'])){
        $pizzabe15 = $_POST['pizzabe15'];
          foreach ($pizzabe15 as $key => $pizza15) {
            echo "<p class='form_text'>$pizza15 ";
          }
          if(isset($_POST['anzahl15'])){
            $anzahl15 = $_POST['anzahl15'];
            foreach ($anzahl15 as $key => $num15) {
             
              echo "$num15 ";
              echo "</p>";
            }
        }
      }
echo "</p>";

echo "<p>";
      if(isset($_POST['pizzabe16'])){
        $pizzabe16 = $_POST['pizzabe16'];
          foreach ($pizzabe16 as $key => $pizza16) {
            echo "<p class='form_text'>$pizza16 ";
          }
          if(isset($_POST['anzahl16'])){
            $anzahl16 = $_POST['anzahl16'];
            foreach ($anzahl16 as $key => $num16) {
             
              echo "$num16 ";
              echo "</p>";
            }
        }
      }
echo "</p>";

echo "<p>";
      if(isset($_POST['pizzabe17'])){
        $pizzabe17 = $_POST['pizzabe17'];
          foreach ($pizzabe17 as $key => $pizza17) {
            echo "<p class='form_text'>$pizza17 ";
          }
          if(isset($_POST['anzahl17'])){
            $anzahl17 = $_POST['anzahl17'];
            foreach ($anzahl17 as $key => $num17) {
             
              echo "$num17 ";
              echo "</p>";
            }
        }
      }
echo "</p>";

echo "<p>";
      if(isset($_POST['pizzabe18'])){
        $pizzabe18 = $_POST['pizzabe18'];
          foreach ($pizzabe18 as $key => $pizza18) {
            echo "<p class='form_text'>$pizza18 ";
          }
          if(isset($_POST['anzahl18'])){
            $anzahl18 = $_POST['anzahl18'];
            foreach ($anzahl18 as $key => $num18) {
             
              echo "$num18 ";
              echo "</p>";
            }
        }
      }
echo "</p>";

echo "<p>";
      if(isset($_POST['pizzabe19'])){
        $pizzabe19 = $_POST['pizzabe19'];
          foreach ($pizzabe19 as $key => $pizza19) {
            echo "<p class='form_text'>$pizza19 ";
          }
          if(isset($_POST['anzahl19'])){
            $anzahl19 = $_POST['anzahl19'];
            foreach ($anzahl19 as $key => $num19) {
             
              echo "$num19 ";
              echo "</p>";
            }
        }
      }
echo "</p>";

echo "<p>";
      if(isset($_POST['pizzabe20'])){
        $pizzabe20 = $_POST['pizzabe20'];
          foreach ($pizzabe20 as $key => $pizza20) {
            echo "<p class='form_text'>$pizza20 ";
          }
          if(isset($_POST['anzahl20'])){
            $anzahl20 = $_POST['anzahl20'];
            foreach ($anzahl20 as $key => $num20) {
             
              echo "$num20 ";
              echo "</p>";
            }
        }
      }
echo "</p>";



  echo "</p>";
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