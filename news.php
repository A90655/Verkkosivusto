<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Jee</title>
      <link rel="stylesheet" type="text/css" href="./css/style.css">
      <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
      <script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   </head>
   <style>
     .imgSize {
       max-width: -webkit-fill-available;
     }
   </style>
<body>
  <?php
  require 'partials/header.php';
  ?>
  <?php

  require_once 'connection.php';

  $select_stmt = $connect->prepare("SELECT * FROM addnews ORDER BY id DESC;");
  $select_stmt->execute();

  if($select_stmt->rowCount() > 0){
    foreach($select_stmt as $row){
      $dateArray = explode("-", $row['dateadded']);
      echo '<div class="container-fluid custompagecontent">
        <div class="container custompageitem">
        <img src="';
      echo $row['imagepath'];
      echo '" alt="Kuva" class="imgSize"><div class="container customitemcontent">
        <h2>';
      echo $row['header'];
      echo '</h2><p class="dateadded"><small>';
      echo $dateArray[2];
      echo ".";
      echo $dateArray[1];
      echo ".";
      echo $dateArray[0];
      echo '</small></p><p>';
      echo $row['p1'];

      if ($row['p2'] !== "") {
        echo '</p><p>';
        echo $row['p2'];
      }

      if($row['p3'] !== "") {
        echo '</p><p>';
        echo $row['p3'];
      }

      echo '</p></div></div></div>';
      echo '<br>';
    }
  }

   ?>

   <?php
   require 'partials/footer.php';
   ?>
</body>
</html>
