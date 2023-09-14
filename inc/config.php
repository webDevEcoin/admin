<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "ecoindb";

$connect  = mysqli_connect($host,$user,$password,$db) 
            or die(mysqli_connect_error($connect));




?>