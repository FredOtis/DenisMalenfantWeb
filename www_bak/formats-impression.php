<?php include('statics/php/header.php'); ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3 divGallerie">
			<span id="FT_GalTitle">MES GALLERIES</span>
			<div id="FT_Galleries">
				<ul>
					<li><a href="categorie.php">OISEAUX</a></li>
					<li><a href="categorie.php">MACROS</a></li>
					<li><a href="categorie.php">PAYSAGES</a></li>
					<li><a href="categorie.php">VIE SAUVAGE</a></li>
				</ul>
			</div>
		</div>
		<div class="col-md-9 biographie">
			<div class="row">
				<h2 id="FT_Bio" style="width:105%;margin-top:10px;">FORMATS</h2>
			</div>
			<div class="row">
				<p>Il vous est également possible de commander mes photographies en haute résolution pour impression.</p>
				<p>Voici les formats disponibles : </p>
				<BR><BR>
				<h3>LAMINAGE MASONITE 1/8</h3>
				<ul>
					<li><p>12″ x 18″ = 60,00$</p></li>
					<li><p>20″ x 24″ = 100,00$</p></li>
					<li><p>30″ x 36″ = 160,00$</p></li>
				</ul><BR><BR>
				<h3>LAMINAGE SUR BOIS 1/4</h3>
				<ul>
					<li><p>12″ x 18″ = 80,00$</p></li>
					<li><p>20″ x 24″ = 125,00$</p></li>
					<li><p>30″ x 36″ = 180,00$</p></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	jQuery("#FT_Bio").fitText();
	jQuery("#FT_Galleries").fitText();
	jQuery("#FT_GalTitle").fitText();
</script>
<?php include('statics/php/footer.php'); ?>