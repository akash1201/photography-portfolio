<?php 
     session_start();
    if(!isset($_SESSION['uname']) && !isset($_SESSION['pass'])){

         
       header('location: upload.php');

    }



?>