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
				<!-- Brand and toggle get grouped for better mobile display -->
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
					<img  src="../img/contact1.jpg" id="photo" class=" hidden-xs hidden-sm full-width" alt="">
					<div class="text-center text-uppercase">
						<h2 class="">Nous nous déplaçons dans la région de Bruxelles capitale et la région wallonne</h2>
					</div>
				</div>
		</div>-->
		<div class="container ">
			<div class="row ">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h2 class="red text-uppercase">Contact</h2>
				</div>
			</div>
		</div>
<!-- 		<div id="form" class="bandeau">
					<div class="container">
						<div class="row">	
							<section class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-lg-offset-3">
								<form class="form-horizontal" role="form" action="#" method="POST" target="">
									<div class="form-group">
		  								<p><label class="col-sm-3 control-label" for="nom">Nom</label></p>
										<div class="col-sm-9"><input class="form-control" id="nom" name="nom" placeholder="Nom" tabindex="1" type="text">
										</div>
									</div>
									<div class="form-group">
										<p><label class="col-sm-3 control-label" for="prenom">Prénom</label></p>
										<div class="col-sm-9"><input class="form-control" id="prenom" name="prenom" placeholder="Prénom" tabindex="2" type="text">
										</div>
									</div>
									<div class="form-group">
										<p><label class="col-sm-3 control-label" for="Téléphone">Téléphone</label></p>
										<div class="col-sm-9"><input class="form-control" id="Téléphone" name="Téléphone" placeholder="Téléphone" tabindex="3" type="email">
										</div>
									</div>
									<div class="form-group">
										<p><label class="col-sm-3 control-label" for="email">Email</label></p>
										<div class="col-sm-9"><input class="form-control" id="email" name="email" placeholder="Email" tabindex="4" type="email">
										</div>
									</div>
									<div class="form-group">
										<p><label class="col-sm-3 control-label" for="sujet">Sujet</label></p>
										<div class="col-sm-9">
											<select class="form-control maliste" id="sujet" name="sujet" tabindex="5">
												<option value="Z">Sélectionner un sujet</option>
												<option value="Nosservices">Nos services</option>
												<option value="Service de remplacement d’infirmière indépendante">Service de remplacement d’infirmière indépendante</option>
												<option value="Service «HOME SWEET Home»">Service «HOME SWEET Home»</option>
												<option value="Pédicure médicale">Pédicure médicale</option>
												<option value="Soins infirmiers">Soins infirmiers</option>
												<option value="Service d’aide à domicile">Service d’aide à domicile</option>
												<option value="Job">Job</option>
												<option value="autres">Autres</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<p><label class="col-sm-3 control-label" for="remarques">Votre message</label></p>
											<div class="col-sm-9">
												<textarea class="form-control" id="remarques" name="remarques" rows="5" tabindex="6">Veuillez laisser votre message dans cette zone de texte:</textarea>
											</div>
									</div>
										<p><input class="suppl" name="infoComplB" id="infoComplB" value="" type="text"></p>
									<div class="form-group">
										<div class="col-sm-offset-3 col-sm-9">
											<button class="btn btn-default button backred"  type="button" tabindex="6">Envoyer</button>
										</div>
									</div>
									
								</form>
						
							</section>
							<section class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<div id="carte">					
								<script>
									function initMap() {
									var uluru = {lat: 50.796451, lng: 4.335791};
									var map = new google.maps.Map(document.getElementById('carte'), {
									zoom: 18,
									center: uluru
							
									});
							
									var marker = new google.maps.Marker({
									position: uluru,
									map: map,
									// animation: google.maps.Animation.BOUNCE,
									title: 'Nous sommes ici',
									icon:"../img/newmarker.png",
									styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]}]
							
									});
									}
								</script>
								<script async defer
									src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-chGrp22ujKvE9TmYRt8DrPE8gVfQz68&callback=initMap">
								</script>   	
							
							</div>
						</section>
						</div>
					</div>
		</div> -->
					<div id="form" class="bandeau">
				<div class="container">
					<div class="row">	
						<section class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<form class="form-horizontal" role="form" action="#" method="POST" target="">
								<div class="form-group">
	  								<p><label class="col-sm-3 control-label" for="nom">Nom</label></p>
									<div class="col-sm-9"><input class="form-control" id="nom" name="nom" placeholder="Nom" tabindex="1" type="text">
									</div>
								</div>
								<div class="form-group">
									<p><label class="col-sm-3 control-label" for="prenom">Prénom</label></p>
									<div class="col-sm-9"><input class="form-control" id="prenom" name="prenom" placeholder="Prénom" tabindex="2" type="text">
									</div>
								</div>
								<div class="form-group">
									<p><label class="col-sm-3 control-label" for="Téléphone">Téléphone</label></p>
									<div class="col-sm-9"><input class="form-control" id="Téléphone" name="Téléphone" placeholder="Téléphone" tabindex="3" type="email">
									</div>
								</div>
								<div class="form-group">
									<p><label class="col-sm-3 control-label" for="email">Email</label></p>
									<div class="col-sm-9"><input class="form-control" id="email" name="email" placeholder="Email" tabindex="4" type="email">
									</div>
								</div>
								<div class="form-group">
									<p><label class="col-sm-3 control-label" for="sujet">Sujet</label></p>
									<div class="col-sm-9">
										<select class="form-control maliste" id="sujet" name="sujet" tabindex="5">
											<option value="Z">Sélectionner un sujet</option>
											<option value="Nosservices">Nos services</option>
											<option value="Service de remplacement d’infirmière indépendante">Service de remplacement d’infirmière indépendante</option>
											<option value="Service «HOME SWEET Home»">Service «HOME SWEET Home»</option>
											<option value="Pédicure médicale">Pédicure médicale</option>
											<option value="Soins infirmiers">Soins infirmiers</option>
											<option value="Service d’aide à domicile">Service d’aide à domicile</option>
											<option value="Job">Job</option>
											<option value="autres">Autres</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<p><label class="col-sm-3 control-label" for="remarques">Votre message</label></p>
										<div class="col-sm-9">
											<textarea class="form-control" id="remarques" name="remarques" rows="5" tabindex="6">Mon message est le suivante:</textarea>
										</div>
								</div>
									<p><input class="suppl" name="infoComplB" id="infoComplB" value="" type="text"></p>
								<div class="form-group">
									<div class="col-sm-offset-3 col-sm-9">
										<button class="btn btn-default button backred"  type="button" tabindex="6">Envoyer</button>
									</div>
								</div>
							</form>
						
						</section>
						<section class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<div id="carte">					
								<script>
									function initMap() {
									var uluru = {lat: 50.796451, lng: 4.335791};
									var map = new google.maps.Map(document.getElementById('carte'), {
									zoom: 18,
									center: uluru
							
									});
							
									var marker = new google.maps.Marker({
									position: uluru,
									map: map,
									// animation: google.maps.Animation.BOUNCE,
									title: 'Nous sommes ici',
									icon:"../img/newmarker.png",
									styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]}]
							
									});
									}
								</script>
								<script async defer
									src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-chGrp22ujKvE9TmYRt8DrPE8gVfQz68&callback=initMap">
								</script>   	
							
							</div>
						</section>
					</div>
				</div>
			</div>
		</section>	
		<?php include('../includes/footer.php'); ?>
    	<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top " role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
	</body>
</html>	