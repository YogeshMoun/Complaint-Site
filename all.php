<?php
session_start();
error_reporting(E_ALL);
if(isset($_SESSION["email"])) {
  $en="hello! " . $_SESSION["email"];
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

	<link rel="stylesheet" href="profile.css" >

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
                
				<li class="nav-item active"> 
                    <a class="nav-link"
                       href="#">Complaints</a> 
                </li>
				<li class="nav-item "> 
                    <a class="nav-link"
                       href="#">Profile</a> 
                </li>
				<li class="nav-item "> 
                    <a class="nav-link"
                       href="upload.php">Upload Compalint</a> 
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
<?php
$ab=$_SESSION["email"];
$con = mysqli_connect('localhost','root','','complaint');
$sql="select * from total_c ";
	
	$res=mysqli_query($con,$sql);
	while($result=mysqli_fetch_assoc($res))
		{
		
?>

<!------------------------------------------------------------------form-------------------------------------------------->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
		<div class="card" style="width: 20rem;">
			<img src="<?php echo $result['image'];?>" class="card-img-top" >
			<div class="card-body">
				<h5 class="card-title"><?php echo $result['email'];?></h5>
				
			
			</div>
		</div>
		</div>
		<div class="col-md-6">
			
				<h1 class="lead1">Problem<i class="fas fa-exclamation-triangle"></i></h1>
				<p class="text-center"><?php echo $result['comment'];?></p>
			
			
		</div>
		</div>
	</div>
</div>
<pre></pre>

<?php
		}

?>
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