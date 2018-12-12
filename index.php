<html>
  <head>
 <meta charset="utf-8">
  </head>
  <body>
    <form method="POST">
      <p> Veuillez saisir le code de sécurité !</p>
      <input type="text" name="captcha">
      <input type="submit" name="valider">
   </body>

  
<?php
$_SESSION_START()
/* SCRIPT FRONTAL AFFICHAGE DE CAPTCHA
* AFFICHER UNE IMAGE GÉNÉRÉE EN PHP */

echo "<img src='script-captchas.php' alt='captchas' />";
if (!isset($_POST['ref=0']){ echo "Code de sécurité doit contenir une valeur !"; }
if (!isset($_POST['ref=1'])) {echo "Code de sécurité non valide !"}
if (isset($_POST['ref']) && $_POST['ref'] == 1) { echo "Code validé avec succès !"; }
?>
