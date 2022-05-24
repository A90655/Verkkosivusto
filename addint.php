<?php
  require_once 'connection.php';

  $upload_target_dir = "uploads/news/";
  $target_file = $upload_target_dir . basename($_FILES['imageUpload']["name"]);
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $uploadOk = 1;

  if (isset($_REQUEST['addintbtn'])) {

    if(empty($_REQUEST['header'])){
      header('location: adminpanel.php?e=8');
    } else if(empty($_REQUEST['paragraph1'])){
      header('location: adminpanel.php?e=9');
    } else {

      $int_header = $_REQUEST['header'];
      $p1 = $_REQUEST['paragraph1'];

      if(!empty($_REQUEST['paragraph2'])){
        $p2 = $_REQUEST['paragraph2'];
      } else {
        $p2 = "";
      }

      if(!empty($_REQUEST['paragraph3'])){
        $p3 = $_REQUEST['paragraph3'];
      } else {
        $p3 = "";
      }

      $check = getimagesize($_FILES['imageUpload']["tmp_name"]);
      if ($check !== false) {
        $uploadOk = 1;
      } else {
        $uploadOk = 0;
        header('location: adminpanel.php?e=10');
      }

      if (file_exists($target_file)) {
        $uploadOk = 0;
        header('location: adminpanel.php?e=11');
      }

      if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
        $uploadOk = 0;
        header('location: adminpanel.php?e=12');
      }

      if($uploadOk == 0){
        header('location: adminpanel.php?e=10');
      } else {
        if (move_uploaded_file($_FILES['imageUpload']["tmp_name"], $target_file)){
          // success

          try {
            $insert_stmt=$connect->prepare("INSERT INTO instructions (header, p1, p2, p3, imagepath) VALUES (:header, :p1, :p2, :p3, :imagepath)");

            if ($insert_stmt->execute(array(':header' => $int_header, ':p1' => $p1, ':p2' => $p2, ':p3' => $p3, ':imagepath' => $target_file))) {
              header('location: instructions.php');
            }
          } catch (PDOException $e) {
            echo $e->getMessage();
          }



        } else {
          header('location: adminpanel.php?e=13');
        }
      }
    }
  }

 ?>
