<?php include("views/_head.tpl.php"); 

?>

<div class="row">
	<div class="col-md-12">

		<p></p>
		<!--- http://caniuse.com/ schreibe die eingabefenster mit Kalender  <form action = "index.php?aktion=neu" --->
		<form action = "<?php $_SERVER['PHP_SELF']; ?>" method="post"><p></p>
			<div class="form-group">
				<label for="titel">Titel </label>
				<input onblur ="pruefe(this);" type="text" name="titel" placeholder="Reisetitel" id="titel" class="form-control"  value="<?php if (!empty($_POST['titel']) ){ echo $_POST['titel'];} ?>" > 
			</div>
			
			<div class="form-group">
				<label for="preis">Preis </label>
				<input onblur ="pruefe(this);" type="text" name="preis" placeholder="Preis" id="titel" class="form-control"  value="<?php if (!empty($_POST['preis']) ){ echo $_POST['preis'];} ?>" > 
			</div>
			
			
			<div class="form-group">
				<label for="kurztext">Kurzbeschreibung </label>
				<textarea onblur ="pruefe(this);" class="form-control" name="kurztext" placeholder="Kurzbeschreibung"  ><?php if (!empty($_POST['kurztext']) ){ echo $_POST['kurztext'];} ?></textarea>
			</div>
			
			
			<div class="form-group">
				<label for="beitragstext">Beitragsbeschreibung </label>
				<textarea onblur ="pruefe(this);" class="form-control" name="beitragstext" placeholder="Beitragsbeschreibung"  ><?php if (!empty($_POST['beitragstext']) ){ echo $_POST['beitragstext'];} ?></textarea>
			</div>

			
			<div class="form-group">
				<label for="beginn">Beginnt am </label>
				<input  type="text" name="beginn" placeholder="2016-09-26" id="beginn" class="form-control"> 
			</div>
			
			<div class="form-group">
				<label for="ende">Endet am </label>
				<input  type="text" name="ende" placeholder="2019-06-28" id="ende" class="form-control"> 
			</div>
			
			
			
			<div class="form-group">
				<label for="bild">Bild </label>
				<input onblur ="pruefe(this);" type="text" name="bild" placeholder="bild.jpg" id="bild" class="form-control"  value="<?php if (!empty($_POST['bild']) ){ echo $_POST['bild'];} ?>" > 
			</div>
			
			<div class="form-group">
				<label for="thumbnail">Thumbnail </label>
				<input onblur ="pruefe(this);" type="text" name="thumbnail" placeholder="thumbnail.jpg" id="thumbnail" class="form-control"  value="<?php if (!empty($_POST['thumbnail']) ){ echo $_POST['thumbnail'];} ?>" > 
			</div>
			
			
			
			<div class="form-group">
				<label for="region">Region </label>
				<select name="region" placeholder="region" type="text" id="region" class="form-control"> 
					
					<?php foreach($regionen as $region): ?>
					<option value="<?php echo $region->getId();  ?>">
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
				
				<button class="btn btn-success" disabled name="speichern"> 
				Beitrag speichern  <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> <!--- kleine Floppi-disk aus Bootstrap holen icon --->
				</button>
			</div>
			
			
			
				
		
		</form>
		
	</div>
</div>

<script>

  document.getElementById("neu").className = "active";

</script>


<?php include("views/_footer.tpl.php"); ?>