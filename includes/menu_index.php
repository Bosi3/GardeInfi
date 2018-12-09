<?php
    function active($url)
    {
      
        $string = $_SERVER["PHP_SELF"];
        // echo end(explode('/', $string));
         echo end((explode('.', $string)));
  
      if ($_SERVER["PHP_SELF"] == $url)
      {
        echo ' class="active"';
      }
    }
?>

<!-- Collect the nav links, forms, and other content for toggling -->

				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav navbar-right">
							<li <?php active('index.php'); ?> ><a href="../index.php" >Accueil</a></li>
							<li class="dropdown">
								<a href="Quisommesnous.php" class="dropdown-toggle" data-toggle="dropdown">Qui sommes nous <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="pages/Quisommesnous.php">Qui sommes nous</a></li>
									<li><a href="pages/Nosvaleurs.php">Nos valeurs</a></li>
								</ul>
							</li>
							<li class="dropdown">
							<a href="Nosservices.php" class="dropdown-toggle" data-toggle="dropdown">Nos services<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="pages/Nosservices.php">Nos services</a></li>
								<li><a href="pages/ServicesRemplacement.php">Service de remplacement d’infirmière indépendante</a></li>
								<li><a href="pages/ServicesHome.php">Service «HOME SWEET HOME</a></li>
								<li><a href="pages/PedicureMedicale.php">Pédicure médicale</a></li>
								<li><a href="pages/SoinsInfirmiers.php">Soins infirmiers</a></li>
								<li><a href="pages/ServicesAide.php">Service d’aide à domicile</a></li>
							</ul>
						</li>
						<li <?php active('ServicesAide.php'); ?> ><a href="pages/Informations.php">Vos avantages</a></li>	
						<li><a href="pages/Job.php">Nous recrutons</a></li>
						
						<li><a href="pages/contact.php">Contact</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->