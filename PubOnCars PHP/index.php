	<?php
include 'functions.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="PubOnCars est un site web & une application mobile qui connecte les conducteurs particuliers aux entreprises souhaitant voir leur publicité sur des voitures.">
	<meta name="author" content="David Lucchesi">
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
	
	<title>PubOnCars - On the road again !</title>

	<!-- Bootstrap Core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet" type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Allerta+Stencil" rel="stylesheet" type='text/css'>

  <!-- Theme CSS -->
  <link href="css/agency.min.css" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
        <![endif]-->

      </head>
      <body id="page-top" class="index">

        <!-- Navigation -->
        <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
              </button>
              <a class="navbar-brand page-scroll" href="#page-top">PubOnCars</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                  <a href="#page-top"></a>
                </li>
                <li>
                  <a class="page-scroll" href="#general">Fonctionnement</a>
                </li>
                <li>
                  <a class="page-scroll" href="#individual">Particuliers</a>
                </li>
                <li>
                  <a class="page-scroll" href="#professional">Professionnels</a>
                </li>
                <li>
                  <a class="page-scroll" href="#contact">Nous contacter</a>
                </li>
              </ul>
            </div>
            <!-- /.navbar-collapse -->
          </div>
          <!-- /.container-fluid -->
        </nav>



        <!-- Header -->
        <header style="background-image:url(img/header-bg.JPG);">
          <div class="container">
            <div class="intro-text">
              <div class="intro-lead-in">On the road again !</div>
              <div class="intro-heading">PubOnCars</div>
              <a href="#general" class="page-scroll btn btn-xl">Découvrir</a>
            </div>
          </div>
        </header>



        <!-- Services Section -->
        <section id="general">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 text-center">
                <h2 class="section-heading">Comment ça marche ?</h2>
                <h3 class="section-subheading text-muted">PubOnCars permet à toutes sortes d'entreprises d'avoir plus de visibilité pour des prix défiant toute concurrence</h3>
              </div>
            </div>
            <div class="row text-center">
              <div class="col-md-4">
                <span class="fa-stack fa-4x">
                  <i class="fa fa-circle fa-stack-2x text-primary"></i>
                  <i class="fa fa-car fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="service-heading">Pour les particuliers</h4>
                <p class="text-muted">Gagnez jusqu'à 110€ par mois en roulant avec des stickers sur votre voiture ! Effectuez la pose en 30min, nous vous envoyons les conseils de pose et stickers directement chez vous. Vous serez guidés pas à pas pour l'opération la plus rentable de votre mois !</p>
              </div>
              <div class="col-md-4">
                <span class="fa-stack fa-4x">
                  <i class="fa fa-circle fa-stack-2x text-primary"></i>
                  <i class="fa fa-university fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="service-heading">Pour les entreprises</h4>
                <p class="text-muted">Développez un nouveau genre de campagne marketing à bas prix en achetant de l'espace publicitaire sur les voitures de votre choix ! Vous pouvez choisir les trajets que vous préférez afin de couvrir la zone géographique la plus bénéfique pour votre commerce !</p>
              </div>
              <div class="col-md-4">
                <span class="fa-stack fa-4x">
                  <i class="fa fa-circle fa-stack-2x text-primary"></i>
                  <i class="fa fa-mobile fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="service-heading">Simplicité d'utilisation</h4>
                <p class="text-muted">Nous mettons un point d'honneur à ce que ce service soit effectué de la manière la plus simple possible, aussi bien pour les entreprises que pour les conducteurs. Gérez ainsi tout votre compte depuis votre smartphone, que vous soyez un conducteur qui envoie une photo de sa voiture ou bien une entreprise qui souhaite effectuer un contrôle sur ses publicités actuelles.</p>
              </div>
            </div>
          </div>
        </section>



        <section id="individual" class="bg-light-gray">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 text-center">
                <h2 class="section-heading">S'inscrire en tant que particulier</h2>
                <h3 class="section-subheading text-muted">Afin de devenir un conducteur rémunéré et de gagner jusqu'à 110€ par mois en conduisant avec de la publicité, veuillez remplir le champs suivants :</h3>
              </div>
            </div>
            <div class="row" align="center">
              <div class="col-lg-12">
                <br/>
                <form action='' method='post'>
                  <input type='text' name='lastname_driver' class="form-control" placeholder="Votre nom de famille *" /><br/>
                  <input type='text' name='firstname_driver' class="form-control" placeholder="Votre prénom *"/><br/>
                  <input type='text' name='email_driver' class="form-control" placeholder="Votre email *"/><br/>
                  <input type='submit' value="Recevoir le formulaire d'inscription" name='driver'  class="page-scroll btn btn-xl"/>
                </form>
                <?php

                if (isset ($_POST)){
                  if (!empty ($_POST['email_driver'])){
                    extract($_POST);
                    connect_db();
                    $insert = "INSERT INTO puboncars.drivers (firstname_driver, lastname_driver, email_driver)
                    VALUES ('$firstname_driver', '$lastname_driver', '$email_driver')";
                    $req=mysql_query($insert) or die ('La requête n\'a pas fonctionné : ' . mysql_error());
                    if ($req) echo 'Inscription faite';
                  }
                }
                ?>
                <br/>
              </div>
            </div>
          </div>
        </section>



        <section id="professional">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 text-center">
                <h2 class="section-heading">S'inscrire en tant que professionnel</h2>
                <h3 class="section-subheading text-muted">Si vous souhaitez lancer une campagne de communication sur l'un ou plusieurs de nos véhicules, veuillez remplir les champs suivants :</h3>
              </div>
            </div>
            <div class="row" align="center">
              <div class="col-lg-12">
                <br/>
                <form action='' method='post'>
                  <input type='text' name='name_company' class="form-control" placeholder="Votre société"/><br/>
                  <input type='text' name='email_company' class="form-control" placeholder="Votre email *"/><br/>
                  <input type='submit' value="Recevoir le formulaire d'inscription" name='company'  class="page-scroll btn btn-xl" />
                </form>
                <?php

                if (isset ($_POST)){
                  if (!empty ($_POST['email_company'])){
                    extract($_POST);
                    connect_db();
                    $insert = "INSERT INTO puboncars.companies (name_company,email_company)
                    VALUES ('$name_company', '$email_company')";
                    $req=mysql_query($insert) or die ('La requête n\'a pas fonctionné : ' . mysql_error());
                    if ($req) echo 'Inscription faite';
                  }
                }
                ?>
                <br/>
              </div>
            </div>
          </div>
        </section>



        <section id="contact" class="bg-light-gray">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 text-center">
                <h2 class="section-heading">Nous contacter</h2>
                <h3 class="section-subheading text-muted">Si vous souhaitez nous contacter pour tout autre sujet, nous vous invitons à remplir le formulaire suivant, nous vous recontacterons dans les plus brefs délais !</h3>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <form name="sentMessage" id="contactForm" novalidate>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Votre nom *" id="name" required data-validation-required-message="Veuillez entrer votre nom.">
                        <p class="help-block text-danger"></p>
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control" placeholder="Votre email *" id="email" required data-validation-required-message="Veuillez entrer votre adresse email.">
                        <p class="help-block text-danger"></p>
                      </div>
                      <div class="form-group">
                        <input type="tel" class="form-control" placeholder="Votre numéro de téléphone *" id="phone" required data-validation-required-message="Veuillez entrer votre numéro de téléphone.">
                        <p class="help-block text-danger"></p>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <textarea class="form-control" placeholder="Votre message *" id="message" required data-validation-required-message="Veuillez entrer votre message."></textarea>
                        <p class="help-block text-danger"></p>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-12 text-center">
                      <div id="success"></div>
                      <button type="submit" class="btn btn-xl">Envoyer</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>


        <footer>
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <span class="copyright">Copyright &copy; PubOnCars 2017</span>
              </div>
              <div class="col-md-4">
                <ul class="list-inline social-buttons">
                  <li><a href="#"><i class="fa fa-twitter"></i></a>
                  </li>
                  <li><a href="#"><i class="fa fa-facebook"></i></a>
                  </li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a>
                  </li>
                </ul>
              </div>
              <div class="col-md-4">
                <ul class="list-inline quicklinks">
                  <li><a href="#">Confidentialité</a>
                  </li>
                  <li><a href="#">License d'utilisation</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </footer>


        <!-- jQuery -->
        <script src="vendor/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

        <!-- Contact Form JavaScript -->
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/contact_me.js"></script>

        <!-- Theme JavaScript -->
        <script src="js/agency.min.js"></script>
        
      </body>
      </html>