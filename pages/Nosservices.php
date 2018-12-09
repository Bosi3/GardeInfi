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
		
		<title>Contact</title>
	</head>
	<body>
		<!---debut header-->
		<header class="">
				<div class="container full-width">
					<div class="row">
						<div class="col-xs-1 col-lg-1 col-lg-offset-1 ">
							<img id="logo" class="logo" src="../img/logo-1.png" alt="logo" >
						</div>
					</div>
				</div>
				<div class="container full-width">
					<div class="row">
					<div id="slogan" class="red push-right">
						<h2 >Actif à Bruxelles et en Wallonie</h2>
					</div>	
						<div id="title" class=" col-xs-9 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-5 col-md-offset-3 col-lg-4 col-lg-offset-3">
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
				
						<!-- Collect the nav links, forms, and other content for toggling -->
						<?php include('../includes/menu.php'); ?>
					</div>
				</nav>
		</header>
		<!--fin header-->
		<div class="container full-width photoser backblue" >
				<div class="row ">
					<!--<img  src="../img/services1.jpg" id="photo" class="hidden-xs hidden-sm full-width" alt="">-->
					<div class="text-center text-uppercase">
						<h2 class="">Nos valeurs au service de votre confort</h2>
					</div>
				</div>
		</div>
		<div class="container services">
			<div class="row ">
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 gauche">
						<h2 class="red text-uppercase">Nos services</h2>
						<h2>Service de remplacement </br>d’infirmière indépendante</h2>
						<p>Nous mettons à votre disposition une infirmière qui assurera les soins auprès de vos patients.</p>
						<div class="col-md-12">
							<a class = "btn btn-default backred  lire" href = "ServicesRemplacement.html" role = "button">Lire plus</a>			
					    </div> 
					    <h2>Service</br>  «HOME SWEET Home»</h2>
						<p>Notre service «  Home Sweet Home » 
						C’est l’alternative aux institutions de soins et de maisons de repos pour rester à domicile près de ses souvenirs et de ses proches. </p>
						<div class="col-md-12">
							<a class = "btn btn-default backred  lire" href = "ServicesHome.html" role = "button">Lire plus</a>				
						</div>
				</div>
				<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 col-lg-offset-1 droite ">
							<h2>Service d’aide à domicile </br>d’infirmière indépendante</h2>
								<p>Nous vous offrons un panel de services sur mesure, des soins adaptés et entièrement dédiés aux personnes en perte d’autonomie, adultes, enfants, personnes âgées et personnes handicapées.</p>
						<div class="col-md-12">
							<a class = "btn btn-default backred  lire" href = "ServicesAide.html" role = "button">Lire plus</a>				
						</div>
					    <h2>Soins infirmiers</h2>
							<p>Notre objectif est de prodiguer des soins infirmiers de qualité et d’accompagnement auprès du patient, tout au long du traitement, dans le respect, l’empathie et la dignité afin d’établir une relation de confiance.</p>
							<div class="col-md-12">
								<a class = "btn btn-default backred  lire" href = "SoinsInfirmiers.html" role = "button">Lire plus</a>				
						    </div> 
						<h2>Pédicure médicale</h2>
							<p>Nos professionnels de métier sont spécialisés dans les différents problèmes liés à la santé du pied comme l’ongle incarné, le corps, l’oeil de perdrix, les durillons, les callosités, les crevasses, les mycoses, les kératoses, les infections des ongles…</p>
							<div class="col-md-12">
								<a class = "btn btn-default backred  lire" href = "PedicureMedicale.html" role = "button">Lire plus</a>				
							</div>
				</div>
			</div>
		</div>
				<?php include('../includes/footer.php'); ?>
    		<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top " role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>

	
	</body>
</html>	
	 