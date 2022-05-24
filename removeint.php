<?php

  require_once 'connection.php';

  $news_id = filter_input(INPUT_POST, 'intlist', FILTER_SANITIZE_STRING);

  $select_stmt = $connect->prepare("SELECT * FROM instructions WHERE id = :id");
  $select_stmt->execute(array(':id' => $news_id));
  $select_stmt->fetch(PDO::FETCH_ASSOC);

  try {
    if($select_stmt->rowCount() > 0){
        $delete_stmt = $connect->prepare("DELETE FROM instructions WHERE id = :id");
        $delete_stmt->bindValue(':id', $news_id);
        $delete_stmt->execute();
    }
  } catch (PDOEXCEPTION $e) {
    echo $e->getMessage();
  }

  header('location: adminpanel.php');

 ?>
