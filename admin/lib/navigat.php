		
<?php		

?>		
		<header>
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container-fluid">
				<!-- Titel und Schalter werden für eine bessere mobile Ansicht zusammengefasst -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Navigation ein-/ausblenden</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li id="home"><a href="../index.php">Home <span class="sr-only">(aktuell)</span></a></li>
							<li id="administrieren"><a href="index.php">Administrieren</a></li>       
							<li id="neu"><a href="index.php?aktion=neu"> Neuer Eintrag </a></li>
						</ul >
						<ul class="nav navbar-nav nav navbar-right">
							<?php if(!isset($_SESSION['benutzer'])) {?>
								<li id ="login" > <a href="login.php"> Login</a></li>
								<li id ="login" > <a href="login.php"> <?php echo "";//getTime() ?> </a></li>
							<?php } else { ?>
								<li><a>Hallo, <?php echo ucfirst($_SESSION['benutzer']); ?> </a></li>
								<li id ="ausloggen" > <a href="ausloggen.php"> Ausloggen</a></li>
							<?php } ?>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</header>

<style>
body { padding-top: 70px; }

</style>