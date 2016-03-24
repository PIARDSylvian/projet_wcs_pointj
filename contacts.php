<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf8">
		<title>Point Jardin</title>
		<script type ="text/javascript" src="./js/bootstrap.min.js"></script>
		<link type="text/css" rel="stylesheet" href="./css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="./style.css">
		<link href='https://fonts.googleapis.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<?php
			include("./_header.php")
		?>
		<section>
			<h2>Contactez-nous</h2>		
			<div class="row" id="contacteznous">
				<div class="col-xs-12 col-sm-6" style="height:400px">
					<h3> Tel: 02.37.63.50.22 </br> Email: <a href="jardin@point-jardin.fr">jardin@point-jardin.fr</a> </h3>
					<h3> Adresse:</h3>
					<p>54 route Nationale 12</br>28380 Saint-Rémy-sur-Avre</p>
					<h3> Horaires:</h3>
					<p><strong>Du Lundi au vendredi:</strong></br>8h/12h - 13h30/18h</br><strong>Samedi:</strong></br>9h/17h30 non stop</br><strong>Dimanche:</strong></br>Ouverture exceptionnelle indiquée en page Accueil.</p>
					<h3> Inscrivez-vous à notre newsletters:</h3>
					<form action="index.html" method="post" class="subscribe-form">
					<input type="email" name="email" class="subscribe-input" placeholder="Entrez votre email" size="30">
					<button type="submit" class="subscribe-submit">Envoyer</button>
		    		</form>
				</div>
				<div class="col-xs-12 col-sm-6" style="height:400px;">
					<h3>Plan d'accès:</h3>
					<iframe id="googlemap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2630.185188402435!2d1.2388716502758972!3d48.75925971553528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e157058e7ef151%3A0xa2151d47c555d65d!2s12+Route+Nationale%2C+28380+Saint-R%C3%A9my-sur-Avre!5e0!3m2!1sfr!2sfr!4v1458737274294" width="95%" height="85%" allowfullscreen></iframe>
				</div>
			</div>
			<?php
				include("./_footer.php");
			?>
		</section>
	</body>
</html>