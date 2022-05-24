<?php
require_once 'connection.php';

if (isset($_REQUEST['Addusersubmit'])) {
  $newuser_username = strip_tags($_REQUEST['username']);
  $newuser_password = strip_tags($_REQUEST['password']);
  $newuser_role = strip_tags($_REQUEST['role']);


  if(empty($newuser_username) && empty($newuser_password) && empty($newuser_role)) {
    header('location:users.php?error=5');
  }
else if(empty($newuser_username)) {
  header('location:users.php?error=1');
} else if(empty($newuser_password)) {
  header('location:users.php?error=2');
} else if (strlen($newuser_password) < 6) {
header('location:users.php?error=3');
} else if(empty($newuser_role)) {
    header('location:users.php?error=4');
  } else {
    try {
      $select_stmt=$connect->prepare("SELECT username, role FROM user WHERE username=:username OR role=:role");
      $select_stmt->execute(array(':username'=>$newuser_username, ':role'=>$newuser_role));
      $select_stmt->fetch(PDO::FETCH_ASSOC);

      if ($select_stmt->rowCount() < 0) {
        $errorMSG = "Käyttäjänimi on jo käytössä";
      } else if
        (!isset($errorMSG)) {
          $insert_stmt=$connect->prepare("INSERT INTO user (username, password, role) VALUES (:username, :password, :role)");


          if  ($insert_stmt->execute(array(':username' => $newuser_username, ':password' => $newuser_password, ':role' => $newuser_role))) {
            header('location:users.php');
          }
        }
      } catch (PDOExpection $e) {
        echo $e->getMessage();
      }

    }
  }


 ?>
