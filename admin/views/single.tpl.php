<?php include("views/_head.tpl.php"); 
?>
<div class="row">
	<div class="col-md-12">
		<p></p>
	<?php foreach($beitrag as $einzelbeitrag){  ?>		
		<form action = "<?php $_SERVER['PHP_SELF']; ?>" method="post"><p></p>
			<div class="form-group">
				<h2><label for="titel"> <?php  echo $einzelbeitrag->getTitel(); ?> </label></h2>
				</div>			
			<div class="form-group">
				<label for="preis"><h4><i>Preis: </i><?php echo $einzelbeitrag->getPreis();  ?> € </h4></label>				
			</div>			
			<!----<div class="form-group">
				<label for="kurztext">Kurzbeschreibung: <php echo $einzelbeitrag->getKurzbeschreibung(); ?></label>
			</div>---->			
			<div class="form-group">
				<label for="beitragstext"><i><h4>Beschreibung: </h4></i><?php  echo $einzelbeitrag->getBeschreibung(); ?> </label>				
			</div>
			<div class="form-group">
				<label for="beginn"><h4><i>Beginnend am: </i><?php  echo $einzelbeitrag->getBeginn(); ?></h4></label>				
			</div>			
			<div class="form-group">
				<label for="ende"><h4><i>Endend am: </i><?php  echo $einzelbeitrag->getEnde(); ?></h4></label>				
			</div>						
			<div class="form-group">
				<label for="bild"><h4><i>Bilder </i></h4></label>
				<div class = "col-md-12">
					<img src="img/<?php echo $einzelbeitrag->getBild(); ?>" class="img-rounded" alt="Cinque Terre" > 
				</div>				
			</div>			
			<!---<div class="form-group">
				<label for="thumbnail">Thumbnail </label>
				<div class = "col-md-12">
					<img src="admin/thumbnail/<php echo $einzelbeitrag->getThumbnail(); ?>.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="230"> 
				</div>
			</div>--->
			<div class="form-group">
				<label for="region"> <h4><i>Region: </i>
					<?php foreach($regionen as $region): ?>		
					<?php if( $einzelbeitrag->getRegion() == $region->getId()){ ?> 
							<?php echo $region->getName(); ?> 
							<?php } ?>
					<?php endforeach; ?></h4>
					
				</label>			
			</div>			
		</form> 		
	<?php } ?>		
	</div>
</div>

<script>

  document.getElementById("administrieren").className = "active";

</script>

<?php include("views/_footer.tpl.php"); ?>