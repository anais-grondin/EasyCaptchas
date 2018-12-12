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
</html>
  
<?php
SESSION_START();
/* SCRIPT FRONTAL AFFICHAGE DE CAPTCHA
* AFFICHER UNE IMAGE GÉNÉRÉE EN PHP */
echo "<img src='script-captchas.php' alt='captchas' />";

if(!isset($_POST['code'])) 
{echo "Code de sécurité doit contenir une valeur !";}

if(isset($_POST['code']))null($_POST['code'])
{echo "Code de sécurité non valide !";}

if(isset($SESSION['code']))
{ echo "Code validé avec succès !"; }
?>
