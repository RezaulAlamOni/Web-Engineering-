<?php
ob_start();
 $host = 'localhost';
 $user = 'root';
 $password = '';
 $db_name = 'employee';

 $con = mysqli_connect($host,$user,$password,$db_name);

 if (!$con){
     die("Db Connection Failed ....!" . mysqli_error($con));
 }