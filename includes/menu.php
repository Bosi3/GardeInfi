<?php
    function active($page)
    {
      
        $string = $_SERVER["PHP_SELF"];
        // $url = end(explode('/', $string));
        $url = end((explode('.', $string)));
  
      if ($url == $page)
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
									<li <?php active('Quisommesnous.php'); ?> ><a href="Quisommesnous.php">Qui sommes nous</a></li>
									<li <?php active('Nosvaleurs.php'); ?> ><a href="Nosvaleurs.php">Nos valeurs</a></li>
								</ul>
							</li>
							<li class="dropdown">
							<a href="Nosservices.php" class="dropdown-toggle" data-toggle="dropdown">Nos services<b class="caret"></b></a>
							
							<ul class="dropdown-menu">
								<li <?php active('Nosservices.php'); ?> ><a href="Nosservices.php">Nos services</a></li>
								<li  <?php active('ServicesRemplacement.php'); ?> ><a href="ServicesRemplacement.php">Service de remplacement d’infirmière indépendante</a></li>
								<li <?php active('ServicesHome.php'); ?> ><a href="ServicesHome.php">Service «HOME SWEET HOME</a></li>
								<li <?php active('PedicureMedicale.php'); ?> ><a href="PedicureMedicale.php">Pédicure médicale</a></li>
								<li <?php active('Nosvaleurs.php'); ?> ><a href="SoinsInfirmiers.php">Soins infirmiers</a></li>
								<li <?php active('ServicesAide.php'); ?> ><a href="ServicesAide.php">Service d’aide à domicile</a></li>
							</ul>
						</li>
						<li <?php active('ServicesAide.php'); ?> ><a href="Informations.php">Vos avantages</a></li>	
						<li <?php active('Job.php'); ?> ><a href="Job.php">Nous recrutons</a></li>
						
						<li <?php active('contact.php'); ?> ><a href="contact.php">Contact</a></a></li>
					</ul>
				</div><!-- /.navbar-collapse -->