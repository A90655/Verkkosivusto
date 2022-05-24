<?php    require_once 'config.php' ?>

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

   <?php require 'partials/header.php'?>

<div class="container adminmodule">
  <h3>Lisää uutinen</h3>
  <form action="addnews.php" method="post" enctype="multipart/form-data">
    <input type="text" name="header" placeholder="Otsikko" class="form-control form-control-lg forminput_ts" required>
    <label for="imageUpload">Valitse kuva: </label><br>
    <input type="file" name="imageUpload" class="uploadimage" required>
    <p class="form_subtext">Kappaleet 2 ja 3 voi jättää tyhjiksi, mikäli niitä ei uutiseen tule.</p>
    <textarea name="paragraph1" placeholder="Kappale 1 &nbsp;(pakollinen)" class="form-control form-control-lg forminput_ts paragraphinput" required></textarea>
    <textarea name="paragraph2" placeholder="Kappale 2" class="form-control form-control-lg forminput_ts paragraphinput"></textarea>
    <textarea name="paragraph3" placeholder="Kappale 3" class="form-control form-control-lg forminput_ts paragraphinput"></textarea>
    <button type="submit" name="addnewsbtn" class="btn btn-primary adminbutton">Lisää</button>
  </form>

  <hr>

  <h3>Poista uutinen</h3>

  <form action="removenews.php" method="post">

    <select name="newslist" class = "form-control form-control-lg forminput_ts"
      <?php
      require_once '../connection.php';

      $select_stmt = $connect->prepare("SELECT * FROM addnews ORDER BY id DESC;");
      $select_stmt->execute();

      if($select_stmt->rowCount() > 0){
        echo '>';
        foreach($select_stmt as $row){
          echo '<option value="';
          echo $row['id'];
          echo '">';
          echo $row['header'];
          echo '</option>';
        }
      } else {
        echo ' disabled>';
      }
      ?>

    </select>
    <button type="submit" name="deletenewsbtn" class="btn btn-primary adminbutton">Poista</button>
  </form>
</div>
<?php require 'partials/footer.php' ?>
