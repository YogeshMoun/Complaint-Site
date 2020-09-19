<?php
session_start();
if(isset($_POST['submit']))
{
	$con = mysqli_connect('localhost','root','','complaint');
	if(!$con){echo '<body onload="fun()"><script> function fun(){alert("Not Connected to database. ")}</script></body>';}
	else
	{
		
		$em=$_POST['email'];
		$ps=$_POST['password'];
		if( (!empty($em)) && (!empty($ps)))
		{
			
			$sql="select * from register where email='$em' && password='$ps'";
			$res=mysqli_query($con,$sql);
			
				if($res)
				{
					$result=mysqli_fetch_assoc($res);
					$_SESSION["rnumber"]=$result['roll'];
					$_SESSION["email"]=$em;
					$_SESSION["rnumber1"]=$result['roll'];
					$_SESSION["email1"]=$em;
?>
<!------------------------------------------------php break----------------------------------------------------------------------------------->
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

	<link rel="stylesheet" href="boot.css" >

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
                       href="#">Home</a> 
                </li> 
				<li class="nav-item"> 
                    <a class="nav-link"
                       href="all.php">Complaints</a> 
                </li>
                <li class="nav-item"> 
                    <a class="nav-link"
                       href="profile.php">Profile</a> 
                </li> 
				<li class="nav-item"> 
                    <a class="nav-link"
                       href="upload.php">Upload Complaint</a> 
                </li>
				<li class="nav-item active"> 
                    <a class="nav-link">Hello! <?php echo $_SESSION["email"]  ?> </a>
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
 <!-------------------------------slideshow------------------------------------------------------------------------------>
 <div class="container-fluid">
<div id="carouselExampleIndicators"" class="carousel slde" data-ride="carousel"  data-interval="2000">
<ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
	<div class="carousel-inner">
		<div class="carousel-item active" data-interval="2000">
			<img src="img\img5.jpg" class="d-block w-100 " style="width:100%; height:400px;"/>
			<div class="carousel-caption d-none d-md-block">
				<h5>Academic Bulding</h5>
				<p>Academic Works only</p>
			</div>
		</div>
		<div class="carousel-item" data-interval="2000">
			<img src="img\img2.jpg" class="d-block w-100" style="width:100%; height:400px;"/>
			<div class="carousel-caption d-none d-md-block">
				<h5>1K Hostel</h5>
				<p>1K Hostel for Boys</p>
			</div>
		</div>
		<div class="carousel-item" data-interval="2000">
			<img src="img\img3.jpg" class="d-block w-100" style="width:100%; height:400px;"/>
			<div class="carousel-caption d-none d-md-block">
				<h5>1.8K Hostel</h5>
				<p>Asia's Biggest Hostel</p>
			</div>
		</div>
		<div class="carousel-item" data-interval="2000">
			<img src="img\img4.jpg" class="d-block w-100" style="width:100%; height:400px;"/>
			<div class="carousel-caption d-none d-md-block">
				<h5>Innovation Bulding</h5>
				<p>Innovation Building for placement</p>
			</div>
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<!-----------------------paragraph----------------------------------------------------------------------------->
<div class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
		<h1 class="display-4" style="color:#cedbd2;">National Institute of Technology, Warangal</h1>
		</div>
		<hr>
		<div class="col-12" >
		<p class="lead" style="color:#cedbd2;">The National Institute of Technology, Warangal (NIT Warangal or NITW) is a public engineering institution located in Warangal, 
		India. It is recognised as an Institute of National Importance by the Government of India. 
		The foundation stone for this institute was laid by then Prime Minister Jawaharlal Nehru on 1959.</p>
		</div>
	</div>
</div>

<div class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
		<h1 class="display-4" style="color:#cedbd2;">Deans of NITW</h1>
		</div>
		<hr>
	</div>
</div>
<!--------------card------------------------------------------------------------------------------------------->
<pre></pre>
<div class="card-deck">
	<div class="card" style="background-color:#0f0f0f;">
		<img src="img\dean1.jpg"  class="card-img-top"/>
		<div class="card-body" style="color:#b8c2bb">
		<h5 class="card-title">DR. RAM GOPAL REDDY L</h5>
		<p class="card-text">Professor<br>Department of Physics<br>
		<i class="fas fa-envelope"></i><br>lrgr@nitw.ac.in,lrgreddy@gmail.com<br><i class="fas fa-phone"></i> 9390100832</p>
		</div>
	</div>
	<div class="card" style="background-color:#0f0f0f;">
		<img src="img\dean2.jpg"  class="card-img-top"/>
		<div class="card-body" style="color:#b8c2bb">
		<h5 class="card-title">DR. PYDISETTY Y</h5>
		<p class="card-text">Professor (HAG)<br>Department of Chemical Engineering<br>
		<i class="fas fa-envelope"></i><br>psetty@nitw.ac.in<br><i class="fas fa-phone"></i>  08702468611, 9491824392</p>
		</div>
	</div>
	<div class="card" style="background-color:#0f0f0f;">
		<img src="img\dean3.jpg"  class="card-img-top"/>
		<div class="card-body" style="color:#b8c2bb">
		<h5 class="card-title">DR. RAJESH KUMAR G</h5>
		<p class="card-text">Professor<br>Department of Civil Engineering<br>
		<i class="fas fa-envelope"></i><br>rajesh@nitw.ac.in,garjesri@gmail.com<br><i class="fas fa-phone"></i> 9849764752</p>
		</div>
	</div>
	<div class="card" style="background-color:#0f0f0f;">
		<img src="img\dean4.jpg"  class="card-img-top"/>
		<div class="card-body" style="color:#b8c2bb">
		<h5 class="card-title">DR. SIVA SARMA DVSS</h5>
		<p class="card-text">Professor (HAG)<br>Department of Electrical Engineering<br>
		<i class="fas fa-envelope"></i><br>dvss@nitw.ac.in<br><i class="fas fa-phone"></i> 9849434415</p>
		</div>
	</div>
</div>
<!-------------------connect------------------------------------------------------------------------------------------------------>
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
<!------------------------------------------------php start again--------------------------------------------------------------------------->
<?php
				}
				else
				{
					echo '<body onload="fun()"><script> function fun(){alert("Password and email is not Matched ")}</script></body>';
				}
			
			
		}
		else
		{
				echo '<body onload="fun()"><script> function fun(){alert("Please! Enter All Entries. ")}</script></body>';
		}
	}
}
?>