<?php
 session_start();
require 'config.php';?>

<link rel="stylesheet" href="css/login.css">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="#" class="navbar-brand"> <img src="logo/Logo_dark.png" height="28" alt="CoolBrand"></a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="index.php" class="nav-item nav-link active">etusivu</a>
                    <a href="news.php" class="nav-item nav-link">Uutiset</a>
                    <?php if(isset($_SESSION['role']) && $_SESSION['role'] == 'admin'){
                      echo '<a href="adminpanel.php" class="nav-item nav-link" id="hide">Ylläpito</a>';
                    }
                    ?>
                    <?php if(isset($_SESSION['role'])){ ?>
                    <a href="logout.php" class="nav-item nav-link loginbutton" >Kirjaudu ulos</a>
                    <?php }else{ ?>
                      <a href="login.php" class="nav-item nav-link loginbutton" >Kirjaudu</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </nav>
