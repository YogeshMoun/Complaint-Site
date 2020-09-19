<?php
session_start();
error_reporting(E_ALL);
if(isset($_SESSION["email1"])) {
  $en="hello! " . $_SESSION["email1"];
}
else
{
	$en="Something is wrong";
}
?>
<!doctype html>
<html lang="en">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
	<!------js----------->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
	<!------font awesome-------------->
	<script  src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

	<link rel="stylesheet" href="opload.css" >

</head>
<body>

<!-----------------navbar--------------------------------------------------------------------------------------------------->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top"><!--sticky-top for fixed at the top of the web page-->
<div class="container-fluid">
	<a class="navbar-brand" href="#"><img src="img\logo.png" width="40px" height="40px"/>NIT Warangal</a>
	<button class="navbar-toggler ml-auto" 
                type="button" 
                data-toggle="collapse"
                data-target="#nav1"> 
            <span class="navbar-toggler-icon "> 
          </span> 
    </button>
    <div class="navbar-collapse collapse" id="nav1"> 
            <ul class="navbar-nav ml-auto"> 
                
				<li class="nav-item"> 
                    <a class="nav-link"
                       href="all.php">Complaints</a> 
                </li>
				<li class="nav-item"> 
                    <a class="nav-link"
                       href="profile.php">Profile</a> 
                </li>
				<li class="nav-item active"> 
                    <a class="nav-link"
                       href="#">Upload Compalint</a> 
                </li>
                <li class="nav-item"> 
                    <a class="nav-link"><?php echo $en;  ?></a>
                </li>
				<li class="nav-item active"> 
                    <a class="nav-link"
                       href="logout.php"><div class="btn btn-primary">Logout</div></a> 
                </li>				
            </ul> 
    </div>		
</div>
</nav>
<pre></pre>
<!------------------------------------------------------------------form-------------------------------------------------->
<div class="container-fluid">
<form class="was-validated" action="upload.php" method="post" enctype="multipart/form-data" autocomplete="on">
	<div class="custom-file">
		<input name="file" type="file" class="custom-file-input" id="validatedCustomFile" required>
		<label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
		<div class="invalid-feedback">File Size must be less than 1MB</div>
	</div>
	<div class="form-group">
		<label for="exampleFormControlTextarea1">Comment here.....</label>
		<textarea name="comment" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
	</div>
	<input type="submit" name="submit" value="Submit" class="btn btn-info"/>
	<input type="reset" name="reset" value="Cancel" class="btn btn-warning"/>
</form>
</div>
<pre></pre>
<!-----------------------------------------------------------------connect------------------------------------------------>
<div class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12"style="color:#b8c2bb">
		<h3>Connect With</h3>
		</div>
		<hr>
		<div class="col-12 social padding">
		<a href="#" ><i class="fab fa-facebook-square"></i></a>
		<a href="#" ><i class="fab fa-google-plus-g"></i></a>
		<a href="#" ><i class="fab fa-twitter"></i></a>
		<a href="#" ><i class="fab fa-instagram"></i></a>
		<a href="#" ><i class="fab fa-youtube"></i></a>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row text-center">
	<div class="col-12" >
		<p class="lead" style="color:#cedbd2;">National Institute of Technology, Warangal - 506004, TS, 
		INDIA | NITWGL <br>Phone: +91-870-2459191 | FAX : +91-870-2459547Copyright &copy; 2018. WSDC</p>
		</div>
		</div>
</div>


</body>
</html>
<?php

if(isset($_POST['submit']))
{
	$con = mysqli_connect('localhost','root','','complaint');
	if(!$con){echo '<body onload="fun()"><script> function fun(){alert("Not Connected to database. ")}</script></body>';}
	else
	{
		$filename=$_FILES['file']['name'];
		$tempname=$_FILES['file']['tmp_name'];
		$folder="photos/".$filename;
		move_uploaded_file($tempname,$folder);
		$cm=$_POST['comment'];
		$ab=$_SESSION["email"];
		if( (!empty($folder)) && (!empty($cm)))
		{
			$sb="insert into total_c (email,image,comment)values ('$ab','$folder','$cm')";
			if(!$tt=mysqli_query($con,$sb))
			{echo '<body onload="fun()"><script> function fun(){alert("Not Inserted into database  ")}</script></body>';}
			else
			{
				echo '<body onload="fun()"><script> function fun(){alert("UPLOAD SUCESSFULLY")}</script></body>';
				header('location:upload.php');
			}
		}
	}
}
?>