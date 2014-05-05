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
		<div class="col-md-9" style="margin-top:22px;">
			<div class="row">
				<h2 id="FT_Bio" style="width:88%">BIOGRAPHIE</h2>
			</div>
			<div class="row">
				<div class="col-md-4">
					<img src="statics/img/bio_denismalenfant.jpg" width="100%" alt="Denis Malenfant" style="margin-bottom:20px;">
				</div>
				<div class="col-md-8 biographie">
					<p>Mon nom est Denis Malenfant. Je suis né le 18 mai 1960 à Rimouski, une petite ville du Bas-St-Laurent dans la province de Québec au Canada.</p>
					<br>
					<p>J’ai complété mes études en informatique au CÉGEP de Rimouski en 1980 en plus d’avoir complété un certificat en administration en 1987 à l’Université Laval. Je demeure depuis la fin de mes études dans la belle ville de Québec. Je travaille en informatique depuis maintenant plus de trente (30) ans et j’occupe un poste de direction en gestion de projet pour une firme de consultants.</p>
					<br>
				</div>
				<div class="row">
					<div class="col-md-12 biographie">
						<p>Très jeune, j’ai développé l’amour de la nature et des animaux. Je me souviens de l’acquisition de ma première caméra (argentique) dans les années 70, un bon vieux et robuste boîtier Pentax K1000 avec un premier zoom Vivitar 100-300mm.</p>
						<br>
						<p>À cette époque, j’y avais investi presque toutes mes économies. Pour parfaire mes connaissances, je me suis inscrit à un cours de développement de photos. À l’époque, on parlait de chambre noire et d’agrandisseur pour les plus vieux.</p>
						<br>
						<p>Pour payer tout ça, j’ai fait des photos de mariage pendant environ deux ans avant de découvrir ma vraie passion, la photographie animalière.</p>
						<br>
						<p>Avec l’équipement de l’époque, je me suis vite rendu compte que ce genre de photo était des plus difficiles. L’arrivée de mes enfants dans les années 80, de même que quelques problèmes personnels, m’ont obligé à prendre une pause dans la poursuite de ma passion.</p>
						<br>
						<p>Vers la fin des années 90,  j’ai pu à nouveau acquérir de l’équipement moderne pour recommencer à faire ce que j’aime le plus la photographie de la nature.</p>
						<br>
						<p>J’espère que vous aurez autant de plaisir à parcourir mon site que j’ai eu à faire ces photos. Je vous invite également à laisser des commentaires si le coeur vous en dit. L’achat de photo est également disponible.</p>
						<br>
						<p>En terminant, je dédie ce site à mes enfants Véronique et Marc-André, à mes parents Gérald et Clémence, à mon épouse et mon amour Nathalie qui partage ma vie et à tous ceux que j’aime et qui m’encouragent à poursuivre ma passion la photographie de la nature.</p>
					</div>
				</div>
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