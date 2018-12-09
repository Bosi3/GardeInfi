<!DOCTYPE html>
<html lang="fr">
<head>

		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"><!-- bootstrap -->
		<meta name="viewport" content="width=device-width, initial-scale=1"><!-- bootstrap -->
		<link rel="stylesheet" href="../css/font-awesome.css">
		<link rel="stylesheet" href="../css/bootstrap.css">
		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" media="screen and (max-width: 970px)" href="../css/smallscreen.css" type="text/css" />
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet"> 
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js">
		</script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js">
		</script>
		<![endif]-->
	
					<!-- jQuery -->
		<script src="../js/jquery-1.12.4.min.js"></script>		
		<script src="../js/bootstrap.js"></script>
					<!-- If you'd like to support IE8 -->
		
		<title>Soins infirmiers</title>
</head>
	<body>
		<!---debut header-->
		<header class="">
			<div class="container full-width">
				<div class="row">
					<div class="col-xs-2  col-lg-1 col-lg-offset-1">
						<img id="logo" class="logo" src="../img/logo-1.png" alt="logo" >
					</div>
				</div>
			</div>
			<div class="container full-width">
				<div class="row">
				<div id="slogan" class="red push-right">
						<h2 >Actif à Bruxelles et en Wallonie</h2>
					</div>	
					<div id="title" class=" col-xs-12 col-xs-offset-4 col-sm-6 col-sm-offset-5 col-md-5 col-sm-offset-3 col-lg-4 col-lg-offset-3">
						<h1 >GARDE-INFI CONFORT</h1>
						<div id="azurex">
							<h2 >Soins et services à domicile </h2>	
						</div>
					</div>							
				</div>					
			</div>
				<!---debut menu-->
			<nav class="navbar navbar-default" role="navigation">
				<div class="container menu">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>		
					<?php include('../includes/menu.php'); ?>
				</div>
			</nav>
		</header>
		<!--fin header-->
			<!--<div class="container full-width photoser backblue">
				<div class="row ">
					<img  src="../img/services_soins1.jpg" id="photo" class="hidden-xs hidden-sm full-width" alt="">
					<div class="text-center text-uppercase">
						<h2 class="">Nous nous déplaçons dans la région de Bruxelles capitale et la région wallonne</h2>
					</div>
				</div>
			</div>-->
			<div class="container services">
				<div class="row ">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 gauche">
						<h2 class="red text-uppercase">Soins infirmiers</h2>
						<p>Notre objectif est de prodiguer des soins infirmiers de qualité et d’accompagnement auprès du patient, </br>
						tout au long du traitement, dans le respect, l’empathie et la dignité afin d’établir une relation de confiance. </p>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 red">
						<p>Nos infirmières restent à votre service <strong>7J/7</strong>, </br>
						agréée <strong>toutes mutuelles</strong>, 
						</br>pour la prise en charge de tous les types de soins:</p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="hidden-xs hidden-sm col-md-2">
						<img id="soinsinfi" class="soinsinfi" src="../img/services_soinsinfi-1.jpg" alt="coeur" >
					</div>
				</div>
			</div>
			<div class="container " id="coeurs">
				<div class="row avantages col-xs-12 col-sm-12 col-md-6 col-md-offset-5 col-lg-8 col-lg-offset-4">
					<div class="row coeur">
						<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 ">
							<img id="coeur" class="coeur" src="../img/coeur-3.png" alt="coeur" >
						</div>
						<div class="col-xs-9 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-lg-7">
							<p>Alimentation : par voie entérale ou parentérale</p>
						</div>
					</div>
					<div class="row coeur">
						<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
							<img id="coeur" class="coeur" src="../img/coeur-3.png" alt="coeur" >
						</div>
						<div class="col-xs-9 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-lg-7 ">
							<p>Cathéter : retrait et rinçage</p>
						</div>
					</div>
					<div class="row coeur">
						<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
							<img id="coeur" class="coeur" src="../img/coeur-3.png" alt="coeur" >
						</div>
						<div class="col-xs-9 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-lg-7">
							<p>Injection : sous-cutanée, intramusculaire, intraveineuse, insulinothérapie </br>
							aux multiples injections</p>
						</div>
					</div>
					<div class="row coeur">
						<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
							<img id="coeur" class="coeur" src="../img/coeur-3.png" alt="coeur" >
						</div>
						<div class="col-xs-9 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-lg-7">
							<p>Médicaments : préparation des médicaments/pilulier à donner</p>
						</div>
					</div>
					<div class="row coeur">
						<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
							<img id="coeur" class="coeur" src="../img/coeur-3.png" alt="coeur" >
						</div>
						<div class="col-xs-9 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-lg-7">
							<p>Prise de sang : normale ou profils nutritionnels</p>
						</div>
					</div>
					<div class="row coeur">
						<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
							<img id="coeur" class="coeur" src="../img/coeur-3.png" alt="coeur" >
						</div>
						<div class="col-xs-9 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-lg-7">
							<p>Prise de paramètres : tension artérielle, glycémie, température, saturation, pulsation</p>
						</div>
					</div>
					<div class="row coeur">
						<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
							<img id="coeur" class="coeur" src="../img/coeur-3.png" alt="coeur" >
						</div>
						<div class="col-xs-9 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-lg-7">
							<p>Soins des voies respiratoires : 	aspiration des voies respiratoires</p>
						</div>
					</div>
					<div class="row coeur">
						<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
							<img id="coeur" class="coeur" src="../img/coeur-3.png" alt="coeur" >
						</div>
						<div class="col-xs-9 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-lg-7">
							<p>Soins palliatifs et prise en charge de la famille</p>
						</div>
					</div>
					<div class="row coeur">
						<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
							<img id="coeur" class="coeur" src="../img/coeur-3.png" alt="coeur" >
						</div>
						<div class="col-xs-9 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-lg-7">
							<p>Soin technique spécifique : perfusion sous-cutanée ou intraveineuse</p>
						</div>
					</div>
					<div class="row coeur">
						<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
							<img id="coeur" class="coeur" src="../img/coeur-3.png" alt="coeur" >
						</div>
						<div class="col-xs-9 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-lg-7">
							<p>Thérapie de compression : mise de bande de contention, bas de contention</p>
						</div>
					</div>
					<div class="row coeur">
						<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
							<img id="coeur" class="coeur" src="../img/coeur-3.png" alt="coeur" >
						</div>
						<div class="col-xs-9 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-lg-7">
							<p>Toilette : quotidienne ou plusieurs fois par semaine (totale ou partielle)</p>
						</div>
					</div>
				</div>
			</div>
					<?php include('../includes/footer.php'); ?>
				<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
	</body>
</html>	
	 