<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf8">
		<title>Point Jardin</title>
		<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="./style.css">
		<link href='https://fonts.googleapis.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<?php
			include("./_header.php");
		?>
<!--nouveautés -->
		<section>
			<h2>Nos nouveautés</h2>
			<div class="row">
				<div class="col-xs-12 col-md-4">
					<a href=""><div id="grosgalets" class="illustration"><p class="description">Galet de rivière</p></div></a>
				</div>
				<div class="col-xs-12 col-md-4">
					<a href=""><div id="petitgalets" class="illustration"><p class="description">Petit galet de rivière</p></div></a>
				</div>
				<div class="col-xs-12 col-md-4">
					<a href=""><div id="gazondeplacage" class="illustration"><p class="description">Gazon de placage</p></div></a>
				</div>
			</div>
<!-- produits -->
			<h2>Découvrez nos produits</h2>
			<div class="row">
				<div class="col-xs-12 col-md-4">
					<a href=""><div id="mineral" class="illustration"><p class="description">Mineral</p></div></a>
				</div>
				<div class="col-xs-12 col-md-4">
					<a href=""><div id="vegetal" class="illustration"><p class="description">Vegetal</p></div></a>
				</div>
				<div class="col-xs-12 col-md-4">
					<a href=""><div id="accessoires" class="illustration"><p class="description">accessoires</p></div></a>
				</div>
			</div>
<!-- services mag -->
			<div class="row">
				<div class="col-xs-2 col-xs-offset-1 col-md-1 col-md-offset-1">
					<img class="imgservices" src="./img/quantite.jpg" alt="achat quantité">
				</div>
				<div class="col-xs-9 col-md-4">
					<p class="services">Achetez la quantité dont vous avez besoin</p>
				</div>
				<div class="col-xs-2 col-xs-offset-1 col-md-1 col-md-offset-0">
					<img class="imgservices" src="./img/paillage.jpg" alt="paillage">
				</div>
				<div class="col-xs-9 col-md-4">
					<p class="services">Embellisez votre jardin avec notre gamme de paillage variés</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-2 col-xs-offset-1 col-md-1 col-md-offset-1">
					<img class="imgservices" src="./img/conseil.jpg" alt="conseil">
				</div>
				<div class="col-xs-9 col-md-4">
					<p class="services">En panne d’inspiration? Nous vous conseillons et dessinons votre jardin</p>
				</div>
				<div class="col-xs-2 col-xs-offset-1 col-md-1 col-md-offset-0">
					<img class="imgservices" src="./img/vehicule.jpg" alt="vehicule">
				</div>
				<div class="col-xs-9 col-md-4">
					<p class="services">Pas de véhicule adapté? Point jardin vous livre chez vous, petite ou grande quantité</p>
				</div>
			</div>
		</section>
		<?php
			include("./_footer.php");
		?>
	</body>
</html>