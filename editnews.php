<?php

require_once 'php/connection.php';

$select_stmt = $connect->prepare("SELECT * FROM addnews ORDER BY id DESC;");
$select_stmt->execute();

if($select_stmt->rowCount() > 0){
  foreach($select_stmt as $row){
    $dateArray = explode("-", $row['dateadded']);
    echo '<div class="container-fluid custompagecontent">
      <div class="container custompageitem">
      <img src="';
    echo $row['imagepath'];
    echo '" alt="Kuva"><div class="container customitemcontent">
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
  }
}



 ?>
