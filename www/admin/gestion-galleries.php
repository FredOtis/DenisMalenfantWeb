<?php include('statics/php/header.php'); ?>
<div id="contentContainer">
	<div id="GestionGalleries">
		<span class="welcome">GESTION DES GALLERIES</span>
		<label>Veuillez choisir une gallerie :</label>
		<select>
			<option value="0">- - -</option>
			<option value="1">Oiseaux</option>
			<option value="4">Vie Sauvage</option>
		</select>
		<span class="clear"></span>
		<div id="HidingPanel">
			<span class="welcome">GALLERIE OISEAUX</span>
			<div id="newSubGal">
				<label>Titre de la sous gallerie :</label>
				<input type="text" />
				<span id="btnAdd" class="button">AJOUTER</span>
			</div>
			<ul id="subGal_List">
				<li>
					<label>Gaie Bleu</label>
				</li>
				<li>
					<label>Oies d'Amérique</label>
				</li>
				<li>
					<label>Flamant Rose</label>
				</li>
				<li>
					<label>Corbeau</label>
				</li>
			</ul>
			<span id="btnCancel" class="button">ANNULER</span>
		</div>
	</div>
</div>
<?php include('statics/php/footer.php'); ?>