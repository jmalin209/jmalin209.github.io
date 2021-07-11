<!DOCTYPE HTML>
<!--
	Hielo by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>CuMoRa : Contact</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="Radiateurs réparation et remplacement. Radiateur Multi-tubulaire, Tubulaire ou à plaques. Fabrication sur mesure" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="index.html"><img src="images/homepage.png"/></a><span> | </span><a href="Culasses.html">Culasses</a><span> | </span><a href="Moteurs.html">Moteurs</a><span> | </span><a href="Radiateurs.html">Radiateurs</a><span> | </span><a href="myform.php"><img src="images/envelope.jpg"/></a></div>
				<!-- <div class="logo"><a href="index.html"><img src="images/homepage.png"/></a><span> | </span><a href="Culasses.html">Culasses</a><span> | </span><a href="Moteurs.html">Moteurs</a><span> | </span><a style="color: RGB(0, 153, 184);"</a> href="Radiateurs.html">Radiateurs</a></div> -->
				<a class="headermenu" href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Accueil</a></li>
					<li><a href="Culasses.html">Culasses</a></li>
					<li><a href="Moteurs.html">Moteurs</a></li>
					<li><a href="Radiateurs.html">Radiateurs</a></li>
                    <li><a href="Contact.html">Contact</a></li>
				</ul>
			</nav>

		<!-- One -->
		<section id="One" class="wrapper style3">
			<div class="inner">
				<header class="align-center">
					<h2>Contact</h2>
                    <span><img style="width: 25%;" src="images/LogoCulasses77.jpg" alt="LogoCulasses77"/></span>
					<span><img style="width: 25%; display: block; margin-left: auto;margin-right: auto;" src="images/Radiateurs/RDMCTransp.png" alt="LogoRDMC"/></span>
				</header>
			</div>
		</section>

		<!-- Two -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">

<?php

/*
// On vérifie si la fonction ini_set() a été désactivée...
$desactive = ini_get('disable_functions');
if (preg_match("/ini_set/i", "$desactive") == 0) {
// Si elle n'est pas désactivée, on définit ini_set de manière à n'afficher que les erreurs...
ini_set("error_reporting" , "E_ALL & ~E_NOTICE");
}

// Vérifier que le formulaire a été envoyé...
if (isset($_POST['envoi'])) {


//On commence une session pour enregistrer les variables du formulaire...

session_start();

$_SESSION['champ1'] = $_POST['name'];
$_SESSION['champ1'] = $_POST['champ1'];

//Enregistrement des zones de texte...
$_SESSION['champ2'] = $_POST['zone_texte2'];

// Définir l\'icone apparaissant en cas d\'erreur...


// Définir sur 0 pour afficher un petit x de couleur rouge.
// Définir sur 1 pour afficher l\'image d\'une croix rouge telle que celle utilisée dans l\'assistant
// Si vous utilisez l\'option 1, l\'image de la croix rouge \'icone.gif\' doit se trouver dans le répertoire \'images\',
// ce dernier devant se trouver au même niveau que votre formulaire...
$flag_icone = 0;

// On vérifie si $flag_icone est défini sur 0 ou 1...
if ($flag_icone == 0) {
$icone = "<b><font size=\"3\" face=\"Arial, Verdana, Helvetica, sans-serif\" color=\"#CC0000\">x</font></b>";
} else {
$icone = "<img src=\"images/icone.gif\"";
}

// Définir l'indicateur d'erreur sur zéro...
$flag_erreur = 0;
// N'envoyer le formulaire que s'il n'y a pas d'erreurs...
if ($flag_erreur == 0) {					
*/
// Addresse de réception du formulaire
$dest = 'CuMoRa<jmalin.code@gmail.com>';
$subject = 'El gran menù !';

$content_head = "<html>\n<head>\n<title>Formulaire</title>\n<meta http-equiv=Content-Type content=text/html; charset=iso-8859-1>\n</head>\n<body bgcolor=#FFFFFF>\n";
$content_main = 'Nom :' . htmlspecialchars($_POST['name']) .' <br/>Email : '. htmlspecialchars($_POST['email']) .'<br/>Message' . htmlspecialchars($_POST['message']) .'<br/>';
$content_foot = "</body></html>";
$content = $content_head . $content_main . $content_foot;

$headers = "MIME-Version: 1.0 \n";
	$headers .="Return-Path: CuMoRa<jmalin.code@gmail.com>\n";
	$headers .="Reply-To: CuMoRa<jmalin.code@gmail.com>\n";
	$headers .="Content-Type: text/html; charset=iso-8859-1 \n";

//mail($dest, $subject, $content, $headers);
//header("Location:Sushishop.html");
					// Send the e-mail
//					if (@!mail($dest,$subject,$content,$headers)) {
//						echo("Envoi du formulaire impossible");
//						exit();
//						} else {
							mail($dest,$subject,$content,$headers);
						// Rediriger vers la page de remerciement
						header("Location:Contact.html");
						exit();
//					  } // Fin else
//					} // Fin du if ($flag_erreur == 0) {
//				} // Fin de if POST

?>
                            <!-- Form -->
							
							<form id="contact" method="post" action="Sushishop.php">
								<h3>Il faut se décider</h3>
								<div class="row uniform">
									<div class="6u 12u$(xsmall)">
										<input type="text" name="name" id="name" value="" placeholder="Votre nom" />
									</div>
									<div class="6u$ 12u$(xsmall)">
										<input type="text" name="choix1" id="choix1" value="" placeholder="Ouloulou ça va être bon" />
									</div>
									<!-- Break -->
									<div class="12u$">
										<input type="text" name="choix2" id="choix2" value="" placeholder="Ouloulou ça va être très bon" />
									</div>
									<!-- Break -->
									<div class="12u$">
										<input type="text" name="choix3" id="choix3" value="" placeholder="Ouloulou" />
									</div>
									<!-- Break -->
									<div class="6u$ 12u$(small)">
										<input type="checkbox" id="human" name="human" required>
										<label for="human">Je ne suis pas un robot</label>
									</div>
									<!-- Break -->
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="Envoyer" /></li>
											<li><input type="reset" value="Recommencer" class="alt" /></li>
										</ul>
									</div>
								</div>
							</form>
                        </div>
					</div>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
                    <h2>Nous trouver</h2>
                    <div class="mapouter"><div class="gmap_canvas"><iframe width="800" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=Culasses%2077,%2014%20Avenue%20Louise%20Michel,%2077100%20Nanteuil-l%C3%A8s-Meaux&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br><style>.mapouter{position:relative;text-align:center;height:400px;width:100%;}</style><a href="https://www.embedgooglemap.net">map embed iframe</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:100%;}</style></div></div>
				</div>
			</footer>


	</body>
</html>