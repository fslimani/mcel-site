<?PHP
include "app/varapp.php";
file_get_contents($GLOBALS["mcelappdomain"] . '/inc/p/Index' );
$Titre = "Accueil";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<?php include "content/pagehead_meta.php" ?>
<?php include "content/pagehead_title.php" ?>
<link rel="stylesheet" href="/ressources/w3.css">
<base href="<?php echo $GLOBALS["mcelappdomain"] ?>" target="_self">
</head>
<body>
<!-- Navbar -->
<nav>
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Accueil</a>
    <a href="#Encart1" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Encart1</a>
    <a href="#Encart2" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Encart2</a>
  </div>
</div>
</nav>
<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#Encart1" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Encart1</a>
  <a href="#Encart2" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Encart2</a>
</div>
<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">
<!-- The Accueil Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" >
    <h1 class="w3-wide"><?php echo $GLOBALS["mcelappdomain"] ?></h1>
    <p class="w3-justify"> 
      Dans cet espace en ligne sont disponibles ...
</p>
  </div>
<!-- The Encart1 Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="Encart1">
    <h2 class="w3-wide">Encart 1</h2>
    <p class="w3-opacity"><i>texte de présentation</i></p>
    <p class="w3-justify"> Texte d'encart.</p>
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <p>Action 1</p>
        <a href="/document/1" alt="Action 1" target="_blank">
        <p>Ouvrir dans un nouvel onglet</p>
        </a>
      </div>
      <div class="w3-third">
         <p>Action 2</p>
        <a href="/document/2" alt="Action 2" target="_blank">
        <p>Ouvrir dans un nouvel onglet</p>
        </a>
      </div>
      <div class="w3-third">
         <p>Action 3</p>
        <a href="/document/CV" alt="Action 3" target="_blank">
        <p>Ouvrir dans un nouvel onglet</p>
        </a>
      </div>
    </div>
  </div>
<!-- End Page Content -->
</div>
<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
<?php include "content/pied-de-page.php" ?>
  <p class="w3-medium">Mise en page réalisée à partir du site <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>
<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
}
</script>
</body>
</html>
