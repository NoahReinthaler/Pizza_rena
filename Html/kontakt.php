<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Kontakt</title>
</head>
<body class="background">
    <nav class="navbar navbar-expand-lg bg-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand text-light" href="../index.html"><img src="../Images/Hintergrund/logo.png" alt="Logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          
            <div class="navbar-nav topnav" id="myTopnav">
              <a class="nav-link" href="../index.html">Home</a>
              <a class="nav-link" href="menue.html">Menü</a>
              <a class="nav-link" href="kontakt.html">Kontakt</a>
              <a class="nav-link" href="karriere.html">Karriere</a>
              <a class="nav-link" href="bestellung.html">Bestellseite</a>
              <a class="nav-link" href="pizza_konfigurator.html">Pizza Konfigurator</a>
           
            </div>
          </div>
        </div>
      </nav>
    </div>

    <h1 class="text-light text-center marg">Hier können Sie Kontakt mit uns aufnehmen</h1>


    <form method="post" action="kontakt.php">
<label for="Name"><b>Name:</b></label><br>
<input type="text" id="Name" name="Name"><br><br>
 
<label for="Email"><b>E-Mail:</b></label><br>
<input type="text" id="Email" name="Email"><br><br>
 
<label for="Betreff"><b>Betreff:</b></label><br>
<input type="text" id="Betreff" name="Betreff"><br><br>
 
<label for="Nachricht"><b>Nachricht:</b></label><br>
<textarea id="Nachricht" name="Nachricht" rows="10" cols="50"></textarea> <br><br>
 
<input type="submit" name="submit">
</form>




   <!--  <?php
//send_email.php
$email_from = "absender@domain.de";   //Absender falls keiner angegeben wurde
$sendermail_antwort = true;      //E-Mail Adresse des Besuchers als Absender. false= Nein ; true = Ja
$name_von_emailfeld = "Email";   //Feld in der die Absenderadresse steht
 
$empfaenger = "empfaenger@domain.de"; //Empfänger-Adresse
$mail_cc = ""; //CC-Adresse, diese E-Mail-Adresse bekommt einer weitere Kopie
$betreff = "Neue Kontaktanfrage"; //Betreff der Email
 
$url_ok = "http://www.domain.de/ok.php"; //Zielseite, wenn E-Mail erfolgreich versendet wurde
$url_fehler = "http://www.domain.de/fehler.php"; //Zielseite, wenn E-Mail nicht gesendet werden konnte
 
 
//Diese Felder werden nicht in der Mail stehen
$ignore_fields = array('submit');
 
 
 
 
//Datum, wann die Mail erstellt wurde
$name_tag = array("Sonntag", "Montag", "Dienstag", "Mittwoch", "Donnerstag", "Freitag", "Samstag");
$num_tag = date("w");
$tag = $name_tag[$num_tag];
$jahr = date("Y");
$n = date("d");
$monat = date("m");
$time = date("H:i");
 
//Erste Zeile unserer Email
$msg = ":: Gesendet am $tag, den $n.$monat.$jahr - $time Uhr ::\n\n";
 
//Hier werden alle Eingabefelder abgefragt
foreach($_POST as $name => $value) {
   if (in_array($name, $ignore_fields)) {
        continue; //Ignore Felder wird nicht in die Mail eingefügt
   }
   $msg .= "::: $name :::\n$value\n\n";
}
 
 
 
//E-Mail Adresse des Besuchers als Absender
if ($sendermail_antwort and isset($_POST[$name_von_emailfeld]) and filter_var($_POST[$name_von_emailfeld], FILTER_VALIDATE_EMAIL)) {
   $email_from = $_POST[$name_von_emailfeld];
}
 
$header="From: $email_from";
 
if (!empty($mail_cc)) {
   $header .= "\n";
   $header .= "Cc: $mail_cc";
}
 
//Email als UTF-8 senden
$header .= "\nContent-type: text/plain; charset=utf-8";
 
$mail_senden = mail($empfaenger,$betreff,$msg,$header);
 
 
//Weiterleitung, hier konnte jetzt per echo auch Ausgaben stehen
if($mail_senden){
  header("Location: ".$url_ok); //Mail wurde gesendet
  exit();
} else{
  header("Location: ".$url_fehler); //Fehler beim Senden
  exit();
}
?>
-->








     <!--Kontaktinfos-->
  <br>
  <br>

  <hr class="bg-black border-3 border-top border-light">

  <br>
  

  <div class="bs-docs-section text-light kontaktinfo">
    <h1 id="kontakt">Kontaktinformationen</h1>
    <address>
      <strong>Jakob Natschläger und Noah Reinthaler</strong><br>
      <abbr title="Telefonnummer">Tel.: </abbr> +49 1573 0056780<br>
      <abbr title="Email-Adresse">Email: </abbr> <a href="mailto:jakob.natschlaeger@tfs-haslach.at">jakob.natschlaeger@tfs-haslach.at</a>
      <p><a href="ueberuns_impressum.html">Mehr Informationen zu uns | Impressum</a></p>
    </address>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>