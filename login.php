<?php
include 'config.php';
require_once 'connection.php';
 session_start();
      if(isset($_POST["login"]))
      {
          $username = $_POST['username'];
          $password = $_POST['password'];


                $query = $connect->prepare("SELECT * FROM user WHERE username = :username");
                $query->bindParam("username", $username, PDO::PARAM_STR);
                $query->execute();

                $result = $query->fetch(PDO::FETCH_ASSOC);

                if(!$result) {
                    echo '<p>oof</p>';
                   } else {
                      if (password_verify($_POST['password'], $password)) {
                        $_SESSION["role"] = $result["role"];
                        header("location:adminpanel.php");
                    }  else {
                      header("location:login.php");
                    }
           }
      }
 ?>


<html>
<head>
  <link rel="stylesheet" href="css/login.css">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <title>Sign in</title>
</head>

<body>
  <div class="main">
    <p class="sign" align="center">Sign in</p>
    <form class="form1" method="post">
      <input class="un " type="text" align="center" name="username" placeholder="Username">
      <input class="pass" name="password" type="password" align="center" placeholder="Password">
      <input type="submit" name="login" id="loginbtn" class="btn btn-info btn-block btn-round" value="Login">

    </div>

</body>

</html>
