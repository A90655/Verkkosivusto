<?php
$error_id = $_GET['error'];

switch ($error_id) {
  case '1':
  echo "Anna käyttäjätunnus.";
  break;
  case '2':
  echo "Anna salasana.";
  break;
  case '3':
  echo "Salasanan pitää olla vähintään 6 merkkiä.";
  break;
  case '4':
  echo "Valitse rooli.";
  break;
  case '5':
  echo "Kentät eivät voi olla tyhjiä.";
  break;
  case '6':
  echo "Käyttäjätunnus tai salasana väärin!";
  break;
}


?>
