<?php require 'config.php' ?>
<?php
include 'connection.php';
  $query = "SELECT * FROM welcome";
  $statement = $connect->prepare($query);
  $statement->execute();

  $statement->setFetchMode(PDO::FETCH_OBJ); //PDO::FETCH_ASSOC
  $result = $statement->fetchAll();
  if($result)
    {
      foreach($result as $row);
}
    ?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Jee</title>
      <link rel="stylesheet" type="text/css" href="./css/style.css">
      <script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   </head>
<body>
<?php include 'partials/header.php' ?>

<?php if (!isset($_SESSION["role"])) {
  header('location: login.php'); }
  else if($_SESSION['role'] != 'admin'){
   header('location: index.php');} ?>

<div class="container adminmodule">
  <h3>Vaihda etusivun tervehdysteksti</h3>

  <form action="edittext.php" method="post">
    <input list="textlist" name="welcometextinput" placeholder="Uusi teksti..." class="form-control form-control-lg forminput_ts">
    <datalist id="textlist">
      <?php

      require_once 'connection.php';

      $select_stmt = $connect->prepare("SELECT * FROM welcome ORDER BY id DESC;");
      $select_stmt->execute();

      if($select_stmt->rowCount() > 0){
        foreach($select_stmt as $row){
          echo '<option value="';
          echo $row['welcometext'];
          echo '">';
        }
      }
      ?>

    </datalist>
        <button type="submit" name="edittextbtn" class="btn btn-primary adminbutton">Vaihda</button>
  </form>
</div>
</body>
