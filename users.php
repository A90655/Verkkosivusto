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
   <?php if(isset($_GET['error'])) {
     require 'error.php';
   } ?>
<body>
<?php include 'partials/header.php' ?>

<?php if (!isset($_SESSION["role"])) {
  header('location: login.php'); }
  else if($_SESSION['role'] != 'admin'){
   header('location: index.php');} ?>
  <div class="card ">
       <div class="card-header">
         <h3><i class="fas fa-users mr-2"></i>User list <span class="float-right">Welcome! <strong>

         </strong></span></h3>
       </div>

       <div class="card-body pr-2 pl-2">
         <form action="add_user.php" method="post">
           <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-default">Username</span>
    </div>
    <input type="text" class="form-control" placeholder="..." name="username" aria-label="Default" aria-describedby="inputGroup-sizing-default">
  </div>


  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Password</span>
  </div>
  <input type="password" class="form-control" placeholder="..." name="password" aria-label="Default" aria-describedby="inputGroup-sizing-default">
</div>
    <select class="form-control" name="role" id="role">
    <option value="" disabled selected>Valitse rooli</option>
    <option value="admin" name="admin">admin</option>
    <option value="user" name="user">user</option>
  </select>
        <input type="submit" id="usersubmit" name="Addusersubmit" class="btn btn-primary btn-lg" value="Submit"/>
     </form>
      <br>
         <table id="example" class="table table-striped table-bordered" style="width:100%">
           <?php
           include 'connection.php';
             $query = "SELECT * FROM user";
             $statement = $connect->prepare($query);
             $statement->execute();

             $statement->setFetchMode(PDO::FETCH_OBJ); //PDO::FETCH_ASSOC
             $result = $statement->fetchAll();
             if($result)
               {
                 foreach($result as $row)
               {
               ?>
               <tr>
                 <td><?= $row->id; ?></td>
                 <td><?= $row->username; ?></td>
                 <td><?= $row->role; ?></td>
                     </tr>
               <?php
                         }
                     }
                     else
                 {
                   ?>
             <tr>
         <td colspan="5">No Record Found</td>
           </tr>
               <?php
             }
             ?>
                 <thead>
                   <tr>
                     <th  class="text-center">Id</th>
                     <th  class="text-center">Username</th>
                     <th  class="text-center">Role</th>
                   </tr>
                 </thead>
             </table>
       </div>
     </div>

</body>
</html>
