<!DOCTYPE html>
<html lang="fr">
<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"><!-- bootstrap -->
		<meta name="viewport" content="width=device-width, initial-scale=1"><!-- bootstrap -->
		<link rel="stylesheet" href="css/font-awesome.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" media="screen and (max-width: 970px)" href="css/smallscreen.css" type="text/css"/>
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet"> 
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js">
		</script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js">
		</script>
		<![endif]-->
		
					<!-- jQuery -->
		
					<!-- Bootstrap JavaScript -->

		<script src="js/jquery-1.12.4.min.js"></script>
    	<script src="js/bootstrap.js"></script>

    	  
					<!-- If you'd like to support IE8 -->
		
		<title>Garde infi confort</title>

</head>
	<body>	
		<!---debut header-->
		<header class="">
			<div class="container full-width">
				<div class="row">
					<div class="col-xs-1 col-lg-1 col-lg-offset-1 ">
						<img id="logo" class="logo" src="img/logo-1.png" alt="logo" >
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
				<?php include('includes/menu_index.php'); ?>
				</div>
			</nav>
		</header>


		<!--fin header
		bs-
			================================================== -->
			<!-- Carousel
			================================================== -->
			<div id="myCarousel" class="carousel slide" data-interval="1000">
				<!-- Wrapper for Slides -->
				<div class="carousel-inner">
					<div class="item active">
						<div class="fill">
							<img src="img/carousel1a.jpg" class="img-responsive" alt="">
						</div>
					</div>
					<div class="item">
						<div class="fill">
							<img src="img/car7.jpg" class="img-responsive" alt="">
						</div>
					</div>
					<div class="item">
						<div class="fill">
							<img src="img/car1.jpg" class="img-responsive" alt="">
						</div>
					</div>
					<div class="item">
						<div class="fill">
							<img src="img/car3.jpg" class="img-responsive" alt="">
						</div>
					</div>
					<div class="item">
						<div class="fill">
							<img src="img/car4.jpg" class="img-responsive" alt="">
						</div>
					</div>
					
				</div>
				<!-- Controls -->
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
					<span class="icon-prev"></span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
					<span class="icon-next"></span>
				</a>
				<!-- ici -->
				<div class="hidden-xs hidden-sm">
					<div id="int">
								<!-- <img class="backflower" src="img/finalFlowerBackgroundA.png" alt="backgroundFleurs"> -->
								<a href="pages/SoinsInfirmiers.php" class="link-rond" id="rond1">
									<img class="icon-rond button hvr-grow " src="img/soinsiconA.png">
								</a>
								<a href="pages/ServicesAide.php" class="link-rond" id="rond2">
									<img class="icon-rond button hvr-grow" src="img/soinsaideA.png">
								</a>
								<a href="pages/ServicesHome.php" class="link-rond" id="rond3">
									<img class="icon-rond button hvr-grow" src="img/soinshomeA.png ">
								</a>
								
								<a href="pages/ServicesRemplacement.php" class="link-rond" id="rond4">
									<img class="icon-rond button hvr-grow" src="img/soinsremplacementA.png">
								</a>
								<a href="pages/PedicureMedicale.php" class="link-rond" id="rond5">
									<img class="icon-rond button hvr-grow" src="img/soinspedicureA.png">
								</a>
					</div>
				</div>
			</div>
			
			<!-- ici -->
			<!--fin Carousel
			================================================== -->
			<div class="container-fluid visible-xs-block visible-sm-block">
					<a href="pages/SoinsInfirmiers.html" class=" button hvr-sweep-to-right"><img class="iconcarre" src="img/iconcarreSoinInfi1.png" alt=""></a>
					<a href="pages/ServicesAide.html" class=" button hvr-sweep-to-right"><img class="iconcarre" src="img/iconcarreDomicile1.png" alt=""></a>
					<a href="pages/ServicesHome.html" class=" button hvr-sweep-to-right"><img class="iconcarre" src="img/iconcarreHome1.png" alt=""></a>
					<a href="pages/ServicesRemplacement.html" class=" button hvr-sweep-to-right"><img class="iconcarre" src="img/iconcarreRemplacement1.png" alt=""></a>
					<a href="pages/PedicureMedicale.html" class=" button hvr-sweep-to-right"><img class="iconcarre" src="img/iconcarrePedicure1.png" alt=""></a>
			</div>
		<?php 
		// include('includes/footer.php'); 
		?>
		<footer class="backblue">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 footercontainer">
                    <h2 class="footertitle">GARDE-INFI CONFORT</h2>
                    <p class="footeradresse">Chaussée de Alsemberg, 842<br>1180 UCCLE<br>0475/55.79.09</p>
                    <a href="">info@gardeinficonfort.be</a>
                    <p class="droits">Tous droits réservés, Gardeinficonfort <?php echo date('Y'); ?> </p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 contenuFGauche">
                    <div class="reseaux pull-right">
                    <p class="textereseaux">Suivez-nous:</p>
                        <div>
                        <a href=""><img class="iconReseaux" src="img/face.png" alt="Facebook"></a>
                        <a href=""><img class="iconReseaux" src="img/linkedin.png" alt="LinkedIn"></a>
                        <a href="mailto:info@gardeinficonfort.be"><img class="iconReseaux" src="img/mail.png" alt="Email"></a>
                        </div>
                        <p class="textedubinfo">Powered by Dubinfo</p>
                
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</footer>
		<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>	
	</body>
</html>		
			 