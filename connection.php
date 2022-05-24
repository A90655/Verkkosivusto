<?php

require 'config.php';

$connect = new PDO("mysql:host=localhost; dbname=$db;charset=utf8", $user, $password );
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
