		
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
							<li id="home"><a href="index.php">Home <span class="sr-only">(aktuell)</span></a></li> <!--- class="active" --->
							<li id="administrieren"><a href="admin/index.php">Administrieren</a></li>   
							
							
							<?php if(isset($regionen)) {?>
							<style>select {margin-top:10px;}  </style> <li id="filter">     
									<select onchange="filter(this);" name="region" placeholder="region" type="text" id="region" class="form-control" > 
									 <option > Filtern: </option> 
										<?php foreach($regionen as $region): ?>
											<option    value="<?php echo $region->getId();  ?>">
											<?php echo $region->getName(); ?> 
											</option>
										<?php endforeach; ?>
					
									</select>

							</li>
							<?php } ?>
							
							
							<li id="impressum"><a href="index.php?aktion=impressum"> Impressum  </a></li>
							
							
							    		
						</ul >
						
						
						
						
						
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</header>

<style>
body { padding-top: 70px; 

background-image: url(admin/img/b5.jpg);
background-size: cover;

}

</style>