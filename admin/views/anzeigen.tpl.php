<?php include("views/_head.tpl.php");  ?>
<div class="row">
<!--- <p> <a href="index.php?aktion=neu"> Neuer Eintrag </a> </p> --->
	<?php foreach($beitraege as $beitrag)
	{?>
	<div class="col-md-12">
		<div class="col-md-8">
			<h2> <?php echo $beitrag->getTitel(); ?></h2>
			<div class="blog-meta">
				Region: <?php foreach($regionen as $region)
				{
					if($beitrag->getRegion()==$region->getId())
					{
						echo $region->getName();
					}
				}?>  
				<p></p> Beginn: <?php echo $beitrag->getBeginn(); ?>  
				<p></p>Ende: <?php echo $beitrag->getEnde(); ?>  
				<p></p>Preis: <?php echo $beitrag->getPreis(); ?> €  
				<p></p>
			</div>
			<p> <?php echo $beitrag->getKurzbeschreibung(); ?></p>
			<a class="btn btn-warning" role="button" href="../index.php?aktion=single&id=<?php echo $beitrag->getId(); ?>">
			mehr erfahren...  </a>
			<a class="btn btn-info" role="button" href="index.php?aktion=bearbeiten&id=<?php echo $beitrag->getId(); ?>">
			bearbeiten </a>
			
		</div>
		
		<div class = "col-md-4">
		
		<a class="btn btn-warning" role="button" href="../index.php?aktion=single&id=<?php echo $beitrag->getId(); ?>">
			<img src="thumbnail/<?php echo $beitrag->getThumbnail(); ?>" class="img-rounded" alt="Cinque Terre" width="304" height="230"> 
		</a>
		
		</div>
	
	
	</div>	
	<?php 
	} ?>
</div>

<script>

  document.getElementById("administrieren").className = "active";

</script>

<?php include("views/_footer.tpl.php"); ?>