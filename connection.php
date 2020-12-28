<?php 
     $host="localhost";
     $uname="root";
     $pass="";
     $dbname="arkop";

     $conn=mysqli_connect($host,$uname,$pass,$dbname);

     if(!$conn){
         echo("Failed to connect database!!");
     }



?>