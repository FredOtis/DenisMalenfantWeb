<?php include('statics/php/header.php'); ?>
			<div id="contentContainer">
				<div class="half">
					<span class="welcome">ME JOINDRE</span>
					<p>Pour me joindre, rien de plus facile ! Remplissez simplement le formulaire ci-dessous et je vous répondrai dans les plus brefs délais.</p>
					<br>
					<form id="contactForm" action="statics/php/mail.php" method="post">
						<label>Nom complet :</label>
						<input type="text" id="txt_name" name="name" />
						<br>
						<label>Adresse courriel :</label>
						<input type="text" id="txt_mail" name="mail" />
						<br>
						<label>Numéro de téléphone :</label>
						<input type="text" id="txt_phone" name="phone" />
						<br>
						<label>Message :</label>
						<textarea type="text" id="txt_msg" name="message"></textarea>
						<div style="width:91%;">
							<div id="submitBtn" class="button">Envoyer</div>
							<label id="message"></label>
							<span class="clear"></span>
						</div>
					</form>
				</div>
				<div class="half">
					<span class="welcome">INFORMATIONS</span>
					<span class="clear"></span>
					<h3>Denis Malenfant</h3>
					<p>Tél. <strong>418 570 2247</strong></p>
					<p>Courriel. <strong>denis.malenfant2@gmail.com</strong></p>
				</div>
			</div>
<?php include('statics/php/footer.php'); ?>