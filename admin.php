<!DOCTYPE html>
<html lang="en">
<head>
<?php 

   

   include('validate-login.php');
  include('connection.php');

  if(isset($_POST['upload'])){
        
    $idQ="select max(id) as id from photos";
    $resId=mysqli_query($conn,$idQ);

    while($r=mysqli_fetch_array($resId)){
        
        $aid=$r['id'];

    }
    $aid=($aid+1);

    $fname=$aid;
	$t=explode(".", $_FILES["img"]["name"]);
	$ext=end($t);
	$name=md5($fname).".".$ext;
	$path="./photos/".$name;
	move_uploaded_file($_FILES["img"]["tmp_name"],$path);


    $date=$_POST['date'];

     $query="insert into photos(id,link,imgdate) values ('$aid','$name','$date')";
     
     if(mysqli_query($conn,$query)){
         echo("successful");
     }
    else{
        echo("something went wrong");
    }
  }
?>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title> For Admins</title>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">

<!-- Main css -->
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Lora|Merriweather:300,400" rel="stylesheet">
<style>
.ai, .ab{
    width:40%;
    margin-top:2%;
    text-align:center;
    font-family:bold;
    font-size:125%;
    outline:none;
}
.ai{
    border-radius:25px;
    border:2px solid black;
}

</style>
</head>
<body>

<!-- PRE LOADER -->

<div class="preloader">
     <div class="sk-spinner sk-spinner-wordpress">
          <span class="sk-inner-circle"></span>
     </div>
</div>

<!-- Navigation section  -->

<div class="navbar navbar-default navbar-static-top" role="navigation">
     <div class="container">

          <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
               </button>
               <a href="index.html" class="navbar-brand">Admin</a>
          </div>
          <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li class="active"><a href="contact.html">Contact</a></li>
               </ul>
          </div>

  </div>
</div>

<!-- Home Section -->

<section id="home" class="main-contact parallax-section">
     <div class="overlay"></div>
     <div class="container">
          <div class="row">

               <div class="col-md-12 col-sm-12">
                    <h1>Upload</h1>
               </div>

          </div>
     </div>
</section>

<!-- Contact Section -->

<section id="contact">
     <div class="container">
          <div class="row">

               <div class="col-md-offset-1 col-md-10 col-sm-12">
                    <h2>upload image</h2>
                    <p>Enter details below</p>

                    <form action="admin.php" method="post" enctype="multipart/form-data">
                         <input type="file" name="img"  class="ai"/><br>
                         <input type="date" name="date" placeholder="Image Date" class="ai"/><br>
                         <input type="submit"   value="upload" name="upload" class="ab"/>
                    </form>
               </div>

          </div>
     </div>
</section>

<!-- Footer Section -->

<footer>
     <div class="container">
          <div class="row">

               <div class="col-md-5 col-md-offset-1 col-sm-6">
                    <h3>Arks Photography</h3>
                    <p>Nature is beauty in herself, i just click and present it to you.</p>
                    <div class="footer-copyright">
                         <p>Copyright &copy; 2018 Arks Photography</p>
                    </div>
               </div>

               <div class="col-md-4 col-md-offset-1 col-sm-6">
                    <h3>Talk to me</h3>
                    <p><i class="fa fa-globe"></i> Malbazar, jalpaiguri</p>
                    <p><i class="fa fa-phone"></i> +91 6295800469</p>
                    <p><i class="fa fa-save"></i> arks@gmail.com</p>
               </div>

               <div class="clearfix col-md-12 col-sm-12">
                    <hr>
               </div>

               <div class="col-md-12 col-sm-12">
                    <ul class="social-icon">
                         <li><a href="#" class="fa fa-facebook"></a></li>
                         <li><a href="#" class="fa fa-twitter"></a></li>
                         <li><a href="#" class="fa fa-google-plus"></a></li>
                         <li><a href="#" class="fa fa-dribbble"></a></li>
                         <li><a href="#" class="fa fa-linkedin"></a></li>
                    </ul>
               </div>
               
          </div>
     </div>
</footer>
<!-- Back top -->
<a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>

<!-- SCRIPTS -->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/custom.js"></script>

</body>
</html>