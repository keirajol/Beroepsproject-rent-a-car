<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Contact</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    
    <?php
                
      require('../OOP/DatabaseConnection.php');
      $dbConnect = new DatabaseConnection("localhost", "rent_a_car", "root", "");
      $dbConnect->connect();
        
      require('../OOP/LayoutConventions.php');
      $getLayout = new LayoutConventions();
                
    ?>

     <?php
    $getLayout->getNavbarHead();
    ?>

    <div class="box1"><h1>Kom met ons in contact!</h1>
  <p>Contact:</br>
    +31 85 001 2614</br>
    Bloemgracht 1,</br>
    1016 KA Amsterdam</br>
  </p>
  </div>
<div class="box2">
  <h2>Ons verhaal:</h2>
  <p>Rent-A-Car is in 1954 in de USA ontstaan door het idee om VW Beetle's in Europa te verhuren.</br> Dit concept was gericht op mensen die in Europa hun kinderen wilden bezoeken die daar gestationeerd waren. </br>En hoewel ons concept sindsdien aanzienlijk veranderd is, is een klantgerichte service ook nu nog een belangrijk streven. </br> Daarom werkt Rent-A-Car samen met een groot aantal internationale verhuurbedrijven, zoals Avis, Budget, Europcar en Hertz evenals met verschillende lokale verhuurders.</br>
  </br>
De missie van Rent-A-Car is om onze klanten de beste service en producten aan te bieden. </br>Dankzij zestig jaar ervaring in deze branche weet Rent-A-Car goed in te spelen op de wensen en behoeften van onze klanten. </br>Onze toegewijde specialisten staan 7 dagen per week voor u klaar om u met uw reservering te helpen, zodat u zeker kunt zijn van de beste service wanneer u een huurauto via ons boekt.
</p>
</div>
  <h3> Google Maps</h3>
  <div class="mapouter">
    <div class="gmap_canvas">
      <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Bloemgracht%201&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>

    <a href="https://123movies-org.net">123movies</a>
    <br>
    <a href="https://www.embedgooglemap.net">google Maps</a>

    <?php
        $getLayout->getNavbarFoot();
        ?>
    
  </div>
  </div>
  </body>
</html>