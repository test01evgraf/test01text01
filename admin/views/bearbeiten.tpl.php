<?php include("views/_head.tpl.php"); 

?>

<div class="row">
	<div class="col-md-12">

		<p></p>
		<!--- http://caniuse.com/ schreibe  die eingabefenster mit Kalender  <form action = "index.php?aktion=neu" --->
		
		<?php foreach($beitrag as $einzelbeitrag){  ?>
		
		<form action = "<?php $_SERVER['PHP_SELF']; ?>" method="post"><p></p>
			<div class="form-group">
				<label for="titel">Titel </label>
				<input onblur ="pruefe(this);" type="text" name="titel" placeholder="Beitragsname" id="titel" class="form-control"  value="<?php  echo $einzelbeitrag->getTitel(); ?>" > 
			</div>
			
			<div class="form-group">
				<label for="preis">Preis </label>
				<input onblur ="pruefe(this);" type="text" name="preis" placeholder="preis" id="titel" class="form-control"  value="<?php echo $einzelbeitrag->getPreis();  ?>" > 
			</div>
			
			<div class="form-group">
				<label for="kurztext">Kurzbeschreibung </label>
				<textarea onblur ="pruefe(this);" class="form-control" name="kurztext" placeholder="Kurzbeschreibung"  ><?php echo $einzelbeitrag->getKurzbeschreibung(); ?></textarea>
			</div>
			
			
			<div class="form-group">
				<label for="beitragstext">Beitragsbeschreibung </label>
				<textarea onblur ="pruefe(this);" class="form-control" name="beitragstext" placeholder="Beitragsbeschreibung"  ><?php  echo $einzelbeitrag->getBeschreibung(); ?> </textarea>
			</div>

			<div class="form-group">
				<label for="beginn">Beginnend am: </label>
				<input value="<?php  echo $einzelbeitrag->getBeginn(); ?>"  type="text" name="beginn"  id="beginn" class="form-control"> 
			</div>
			
			<div class="form-group">
				<label for="ende">Endend am: </label>
				<input value="<?php  echo $einzelbeitrag->getEnde(); ?>"  type="text" name="ende"  id="ende" class="form-control"> 
			</div>
			
			
			<div class="form-group">
				<label for="bild">Bild </label>
				<input onblur ="pruefe(this);" type="text" name="bild" placeholder="Bild.jpg" id="bild" class="form-control"  value="<?php echo $einzelbeitrag->getBild(); ?>" > 
			</div>
			
			<div class="form-group">
				<label for="thumbnail">Thumbnail </label>
				<input onblur ="pruefe(this);" type="text" name="thumbnail" placeholder="Thumbnail.jpg" id="thumbnail" class="form-control"  value="<?php echo $einzelbeitrag->getThumbnail(); ?>" > 
			</div>
			
			
			
			
			<div class="form-group">
				<label for="region"> Region </label>
				<select name="region" placeholder="region" type="text" id="region" class="form-control"> 
					
					<?php foreach($regionen as $region): ?>
					<option data-region="<?php echo $einzelbeitrag->getRegion(); ?>" value="<?php echo $region->getId();  ?>">
						<?php echo $region->getName(); ?> 
					</option>
					<?php endforeach; ?>
					
					
					
				</select>
		
		
		
		
				
				
			</div>
			
			<div class="form-group">
				<?php  if(isset($fehler)){ ?>
					<?php  foreach($fehler as $fehl) { ?>
						<div class="bg-danger text-danger"> <?php echo $fehl; ?> </div>
					<?php  }?>
				<?php  }?>
					
			</div>
			
			
			
			
			<div class="form-group">
				
				<button class="btn btn-success"  name="updaten"> 
				Beitrag updaten  <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> <!--- kleine Floppi-disk aus Bootstrap holen icon --->
				</button>
			</div>
			
			
			
				
		
		</form> 
		
		<div class="form-group">
				
				<button type="submit" onclick="loeschBeitrag(<?php echo $_REQUEST['id']; ?>)" 
				class="btn btn-danger"  name="loeschen"> 
				Beitrag löschen  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> 
				</button>
			</div>
		
		
		
		<?php } ?>
		
		
		
		
		
	</div>
</div>
<script>

  document.getElementById("administrieren").className = "active";

</script>


<?php include("views/_footer.tpl.php"); ?>