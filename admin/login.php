<?php 
session_start(); //kommt auf alle geschutzte Seiten
include("lib/validatelogin.php");

?>
<!DOCTYPE html>
<html><!--herausgeholt aus http://holdirbootstrap.de/css/-->
<head>
<meta charset ="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>


<!-- Das neueste kompilierte und minimierte CSS(nur css wird ausgelesen)-->
<link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.min.css">

<!-- http://jquery.com/download/ -->
<!-- <script src="//code.jquery.com/jquery-1.11.3.min.js"></script> -->
<script src="js/jquery-2.1.4.js"></script>

<script src ="js/custom_kontakt.js" type ="text/javascript">


</script>




<!-- Das neueste kompilierte und minimierte JavaScript -->
<script src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>



</head>
<style>
body { padding-top: 70px; }
</style>
<body>

	<div class="container">
		<?php include("lib/navigat.php"); ?>
		<div class ="row">
		<?php if($status === 2) 
		{ ?>
		<form method="POST" action ="login.php?q=admin">
			
			<div class ="col-md-6">
				<div class ="form-group">
					<label for="benutzer">Benutzer</label>
					<input class="form-control" type ="text" id="benutzer" name="benutzer" placeholder="Benutzername">  </input>
				</div>
			</div>
			
			<div class ="col-md-6">
				<div class ="form-group">
					<label for="passwort">Passwort</label>
					<input class="form-control" type ="password" id="passwort" name="passwort" placeholder="Passwort">  </input>
				</div>
			</div>
			
			<div class ="col-md-12">
				<button name ="login" class ="btn btn-primary col-md-2" type="submit"> Login
				</button>
			</div>
			
		</form>
		<?php } else if ($status =3){?>
		<div class="col-md-12">
		<strong class="text-danger">Fehlereingabe der Daten bitte erneut versuchen <a href ="login.php">zurück</a></strong>
		</div>
		<?php }?>
		</div><!-- End row -->
	
	</div><!-- End Container -->



				
		
	
	
<script>
//JS Variante
  document.getElementById("login").className = "active";

//   JQuery Variante
//  $("#contact").addClass("active");

</script>
	
	
</body>

</html>







