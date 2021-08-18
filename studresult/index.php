<?php
    session_start();

    if(isset($_SESSION['usertype']))
    {
        if($_SESSION['usertype'] == "Admin")
        {           
             header("location:students.php");
        }
        
    }
 ?>       

<html>
	<head>
		<title>Student Result Analysis</title>
		 <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="description" content="">
	    <meta name="author" content="">
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	    <!-- Custom fonts for this template -->
	    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

	    <!-- Plugin CSS -->
	    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

	    <!-- Custom styles for this template -->
	    <link href="css/freelancer.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="row">
	  	<nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
	      <div class="container">
	       <a class="navbar-brand js-scroll-trigger " href="#page-top" >Result Analysis</a>
	      </div>
	    </nav>
	</div>

	<div class="row">
    
    <div class="container" style="min-height: 500px; margin-top: 150px;">
    	<div class="col-lg-12">
    		<div class="col-md-6 text-center img-thumbnail well">
    			<h3>Admin Login</h3>
    			<div class="col-lg-12">
    				<?php
    					if(isset($_GET['action']))
    					{
    						if($_GET['action'] == "failed")
							{
								echo "<span class='btn btn-danger btn-block'>Usename or password is wrong</span><br />";
							}
    					}
    				?>
    			</div>
    		<form action="indexcode.php" method="POST">
    			<div class="col-lg-12">
    				<input type="text" id="username" name="username" placeholder="username" class="form-control" required>
    			</div>
    			<div class="col-lg-12">
    				<br />
    				<input type="password" id="password" name="password" placeholder="password" class="form-control" required>
    			</div>
    			<div class="col-lg-12">
    				<br />
    				<input type="submit" name="submit" value="Login" class="btn btn-success">
    			</div>
    		</form>
			</div>
    	</div>
    </div>
    
    </div>

 	<div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; Your Website 2018</small>
      </div>
    </div>
 <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

	</body>
</html>

