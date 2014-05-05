<?php include('statics/php/header.php'); ?>

<div class="container-fluid" style="margin-top:30px;">
	<div class="row">
		<div class="col-md-3">
			<span id="FT_Welcome" style="color:white;width:100%;display:block;">BIENVENUE</span>
			<div class="introText welcome">
				<p>Bienvenue sur mon site Internet <b>denismalenfant.com</b>. J’espère que vous aimerez votre visite dans mes différentes galeries photos. Vous pouvez visualiser mes photographies par section et il est également possible de laisser un commentaire sur les photos que vous appréciez le plus.</p>
				<p>Pour laisser un commentaire général sur l’appéciation du site, j’ai placé un onglet <b>Commentaires</b> à cet effet.</p>
				<p>Un onglet <b>Nouveautés</b> a été ajouté pour vous permettre de visualiser les plus récentes photos du site.</p>
			</div>
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
		<div class="col-md-9" style="margin-top:12px;">
			<div id="gallerie">
				<div class="col-md-4">
					<div class="picture PicLink">
						<a href="statics/img/fullscreen/testPic.jpg" rel="prettyPhoto[pp_gal]" class="dark"></a>
						<div class="picComments" name="http://google.ca?color=blue">
							<img src="statics/img/icons/ico_comments.png" alt="" />
						</div>
						<img class="gallImg" src="statics/img/fullscreen/testPic.jpg" alt="" />
					</div>
				</div>
				<div class="col-md-4">
					<div class="picture PicLink">
						<a href="statics/img/fullscreen/testPic2.jpg" rel="prettyPhoto[pp_gal]" class="dark"></a>
						<div class="picComments" name="http://google.ca?color=blue">
							<img src="statics/img/icons/ico_comments.png" alt="" />
						</div>
						<img class="gallImg" src="statics/img/fullscreen/testPic2.jpg" alt="" />
					</div>
				</div>
				<div class="col-md-4">
					<div class="picture PicLink">
						<a href="statics/img/fullscreen/testPic3.jpg" rel="prettyPhoto[pp_gal]" class="dark"></a>
						<div class="picComments" name="http://google.ca?color=blue">
							<img src="statics/img/icons/ico_comments.png" alt="" />
						</div>
						<img class="gallImg" src="statics/img/fullscreen/testPic3.jpg" alt="" />
					</div>
				</div>
				<div class="col-md-4">
					<div class="picture PicLink">
						<a href="statics/img/fullscreen/testPic4.jpg" rel="prettyPhoto[pp_gal]" class="dark"></a>
						<div class="picComments" name="http://google.ca?color=blue">
							<img src="statics/img/icons/ico_comments.png" alt="" />
						</div>
						<img class="gallImg" src="statics/img/fullscreen/testPic4.jpg" alt="" />
					</div>
				</div>
				<div class="col-md-4">
					<div class="picture PicLink">
						<a href="statics/img/fullscreen/testPic5.jpg" rel="prettyPhoto[pp_gal]" class="dark"></a>
						<div class="picComments" name="http://google.ca?color=blue">
							<img src="statics/img/icons/ico_comments.png" alt="" />
						</div>
						<img class="gallImg" src="statics/img/fullscreen/testPic5.jpg" alt="" />
					</div>
				</div>
				<div class="col-md-4">
					<div class="picture PicLink">
						<a href="statics/img/fullscreen/testPic6.jpg" rel="prettyPhoto[pp_gal]" class="dark"></a>
						<div class="picComments" name="http://google.ca?color=blue">
							<img src="statics/img/icons/ico_comments.png" alt="" />
						</div>
						<img class="gallImg" src="statics/img/fullscreen/testPic6.jpg" alt="" />
					</div>
				</div>
				<div class="col-md-4">
					<div class="picture PicLink">
						<a href="statics/img/fullscreen/testPic7.jpg" rel="prettyPhoto[pp_gal]" class="dark"></a>
						<div class="picComments" name="http://google.ca?color=blue">
							<img src="statics/img/icons/ico_comments.png" alt="" />
						</div>
						<img class="gallImg" src="statics/img/fullscreen/testPic7.jpg" alt="" />
					</div>
				</div>
				<div class="col-md-4">
					<div class="picture PicLink">
						<a href="statics/img/fullscreen/testPic8.jpg" rel="prettyPhoto[pp_gal]" class="dark"></a>
						<div class="picComments" name="http://google.ca?color=blue">
							<img src="statics/img/icons/ico_comments.png" alt="" />
						</div>
						<img class="gallImg" src="statics/img/fullscreen/testPic8.jpg" alt="" />
					</div>
				</div>
				<div class="col-md-4">
					<div class="picture PicLink">
						<a href="statics/img/fullscreen/testPic9.jpg" rel="prettyPhoto[pp_gal]" class="dark"></a>
						<div class="picComments" name="http://google.ca?color=blue">
							<img src="statics/img/icons/ico_comments.png" alt="" />
						</div>
						<img class="gallImg" style="max-width:100%;" src="statics/img/fullscreen/testPic9.jpg" alt="" />
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	jQuery("#FT_Welcome").fitText();
	jQuery("#FT_Galleries").fitText();
	jQuery("#FT_GalTitle").fitText();
</script>
<?php include('statics/php/footer.php'); ?>