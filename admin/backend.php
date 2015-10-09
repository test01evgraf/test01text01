<?php
session_start();
if(!isset($_SESSION['benutzer']))
{
	header("Location:login.php");
}
?>
<!DOCTYPE html>
<html><!--herausgeholt aus http://holdirbootstrap.de/css/-->
<head>
<meta charset ="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Backend</title>
<!-- Das neueste kompilierte und minimierte CSS(nur css wird ausgelesen)-->
<link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.min.css">

<script src="js/jquery-2.1.4.js"></script>
<!---- <script src ="js/custom_kontakt.js" type ="text/javascript"> ---->
</script>

<!-- Das neueste kompilierte und minimierte JavaScript -->
<script src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>

</head>

<body>

	<div class="container">
		<?php include("lib/navigat.php"); ?>
		<div class ="row">
			<div class="col-md-12">
				<p>Sie sind eingelogt. </p>
			</div>
		
		
		</div><!-- End row -->
	
	</div><!-- End Container -->


<script>



  document.getElementById("login").className = "active";



</script>
	
	
</body>

</html>







