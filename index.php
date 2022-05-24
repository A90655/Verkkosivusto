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
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

   </head>

   <body>
  <?php include'partials/header.php';  ?>
      <!-- Modal -->
      <div class="modal fade" id="custModal" role="dialog">

        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Lirum</h4>
              <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid" id="videowrapper">
            <video src="background-video.mp4" autoplay muted loop type="video/mp4" id="mainpageloop">
              Selaimesi ei tue videoelementtejä.
            </video>
            <div class="container-fluid" id="mainpagevideotext">

              <h1 id="welcometext"><?= $row->welcometext; ?></h1>
              <a href="#" id="readmorebutton">Lue lisää</a>
            </div>
          </div>
   <div class="container" style="max-width: 100%; background-dolor: #f2f2f2;">

     <div class="wrap wrap2">
       <div class="row1">
         <div class="w60 textbox-1">
           <div class="inner">
             <h2>Meistä</h2>
             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a
pretium ex. Fusce rhoncus lacus eget diam varius, vitae congue elit
porta. Orci varius natoque penatibus et magnis dis parturient montes,
nascetur ridiculus mus.


Nunc eget diam et eros iaculis ornare. Nunc diam dui, venenatis eu
tellus et, fermentum dictum felis. Sed semper lectus id facilisis viverra.
Phasellus sit amet magna id lectus cursus vulputate. Quisque augue
leo, ornare eu mattis quis, dignissim a erat.


Orci varius natoque penatibus et magnis dis parturient montes,
nascetur ridiculus mus. Nunc eget diam et eros iaculis ornare. Nunc
diam dui, venenatis eu tellus et, fermentum dictum felis. </p>
           </div>
         </div>
         <div class="w30 object-fit"><a href="#"><img class="backgroundSwap"  src="images/neonbrand-tKvp2XBx4NE-unsplash.jpg" alt="pic1" width="640" height="478"> </a></div>
       </div>
       <div class="row1">
         <div class="w30 object-fit"><a href="#"><img class="backgroundSwap" src="images\jeshoots-com-VdOO4_HFTWM-unsplash.jpg" alt="pic2" width="597" height="317"> </a></div>
         <div class="w60 textbox-1">
           <div class="inner">
             <h2>Historiaa</h2>
             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a
pretium ex. Fusce rhoncus lacus eget diam varius, vitae congue elit
porta. Orci varius natoque penatibus et magnis dis parturient montes,
nascetur ridiculus mus. Nunc eget diam et eros iaculis ornare. Nunc
diam dui, venenatis eu tellus et, fermentum dictum felis. Sed semper
lectus id facilisis viverra. Phasellus sit amet magna id lectus cursus
vulputate. Quisque augue leo, ornare eu mattis quis, dignissim a erat.


Orci varius natoque penatibus et magnis dis parturient montes,
nascetur ridiculus mus. Nunc eget diam et eros iaculis ornare. Nunc
diam dui, venenatis eu tellus et, fermentum dictum felis. Sed semper
lectus id facilisis viverra. Phasellus sit amet magna id lectus cursus
vulputate. Quisque augue leo, ornare eu mattis quis, dignissim a erat.</p>
           </div>
         </div>
       </div>

     </div>
  </div>
   <?php include'partials/carousel.php';  ?>
   <?php include'partials/cards.php';  ?>
   </body>
   <?php include'partials/footer.php';  ?>
</html>
