<?php

require_once 'connection.php';
session_start();

if (isset($_REQUEST['edittextbtn'])) {
  $newwelcometext = strip_tags($_REQUEST['welcometextinput']);


  if(empty($newwelcometext)){
    $errorMsg[] = "Syötä tervehdysteksti";
  } else {
    try {
      if (!isset($errorMsg)) {
        $insert_stmt=$connect->prepare("INSERT INTO welcome (welcometext) VALUES (:newtext)");
        if ($insert_stmt->execute(array(':newtext' => $newwelcometext))) {
          header('location: textadded.php');
        }
      }
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }


}





?>
