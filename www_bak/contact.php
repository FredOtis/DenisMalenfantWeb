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
		<div class="col-md-9" style="margin-top:30px;">
			<div class="row">
				<h2 id="FT_Bio" style="width:85%">ME JOINDRE</h2>
			</div>  
			<div class="row">			
				<div class="col-md-9">
					<form id="contact_form" method="post" action="statics/php/mail.php">
						<div class="row">
							<div class="col-md-12">
								<input id="txtName" class="form-control input-lg" type="text" name="name" placeholder="Nom Complet" />
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-12">
								<input id="txtPhone" class="form-control input-lg" type="text" name="phone" placeholder="Téléphone" />
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-12">
								<input id="txtMail" class="form-control input-lg" type="text" name="email" placeholder="Courriel" />
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-12">
								<textarea id="txtMsg" class="form-control input-lg" name="message" placeholder="Votre Message" style="height:200px;"></textarea>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-12">
								<div id="submitButton">Envoyer mon message</div><br><br>
								<label id="message"></label>
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-3 contact">
					<h3 id="FT_InfoTitle" style="width:65%;">INFORMATIONS</h3>
					<br>
					<p><strong>Denis Malenfant</strong></p>
					<p><strong>Tél :</strong> 418.570.2247</p>
					<p><strong>@ :</strong> malenfantdenis@videotron.ca</p>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	jQuery("#FT_Bio").fitText();
	jQuery("#FT_Galleries").fitText();
	jQuery("#FT_GalTitle").fitText();
	jQuery("#FT_InfoTitle").fitText();
</script>
<?php include('statics/php/footer.php'); ?>