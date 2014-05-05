<?php include('statics/php/header.php'); ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-3 divGallerie">
			<span id="FT_GalTitle">MES&nbsp;GALLERIES</span>
			<div id="FT_Galleries">
				<ul>
					<li><a href="categorie.php">OISEAUX</a></li>
					<li><a href="categorie.php">MACROS</a></li>
					<li><a href="categorie.php">PAYSAGES</a></li>
					<li><a href="categorie.php">VIE SAUVAGE</a></li>
				</ul>
			</div>
		</div>
		<div class="col-md-9" style="margin-top:20px;">
			<div class="row">
				<h2 id="FT_Bio" style="width:100%;text-align:center;margin-bottom:20px;">OISEAUX</h2>
			</div>
			<div class="row">
				<div class="col-md-12">
					<ul id="FT_CategList">
						<li><p><a href="#">AMAZONE&nbsp;À&nbsp;FRONT&nbsp;JAUNE</a></p></li>
						<li><p><a href="#">BÉCASSEAU&nbsp;MINUSCULE</a></p></li>
						<li><p><a href="#">CANARD&nbsp;BRANCHU</a></p></li>
						<li><p><a href="#">ÉPIVIER&nbsp;DE&nbsp;COOPER</a></p></li>
						<li><p><a href="#">GEAI&nbsp;BLEU</a></p></li>
						<li><p><a href="#">GRAND&nbsp;HÉRON</a></p></li>
						<li><p><a href="#">MÉSANGE&nbsp;À&nbsp;TÊTE&nbsp;NOIR</a></p></li>
						<li><p><a href="#">OIE&nbsp;DES&nbsp;NEIGES</a></p></li>
						<li><p><a href="#">PARULINE&nbsp;JAUNE</a></p></li>
						<li><p><a href="#">PETIT&nbsp;CHEVALIER</a></p></li>
						<li><p><a href="#">SARCELLE&nbsp;D'HIVER</a></p></li>
						<li><p><a href="#">SIZERIN&nbsp;FLAMMÉ</a></p></li>
						<li><p><a href="#">TÉTRAS&nbsp;DU&nbsp;CANADA</a></p></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	jQuery("#FT_Bio").fitText();
	jQuery("#FT_Galleries").fitText();
	jQuery("#FT_GalTitle").fitText();
	//jQuery("#FT_CategList").fitText();
</script>
<?php include('statics/php/footer.php'); ?>