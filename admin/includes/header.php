<!DOCTYPE html> 													<!-- On indique au navigateur que le document est code en HTML5 -->
<html> 																<!-- Balise qui englobe tout le code html saisi dans le fichier texte -->

<head> 																<!-- Balise entête -->

	<meta charset="utf-8"/>
	<title><?php echo $title; ?></title> 							<!-- Affiche sur l'onglet du navigateur -->
	<meta name="description" content="Mésaventures quotidiennes de PoissGrôle, celui dont les astres se sont définitvement détournés." /> 
	<meta name="author" content="Th0mass" />
	<link rel="stylesheet" type="text/css" href="includes/blog_style.css" media="screen"/>  				<!-- Incere le css du fichier style dans le document -->

</head>

<body>

<header class="head">
	<div class="HBloc">
		<div class="HContent">
		  <h2 class="title">
		  Administration de mon blog
		  </h2>
    </div>

		<nav>
	     	<ul>
				<?php if (isset($_SESSION) && isset($_SESSION['user'])) { ?>
				<li class="pull-left"><a href="index.php">Home</a></li>
				<li class="pull-normal"><a href="gestion_articles.php">Gestion des articles</a></li>
				<li class="pull-right"><a href="?action=deconnexion">Déconnexion</a></li>
				<?php } ?>
			</ul>
			<div style="clear: both;"></div>
		</nav>	
	</div>
</header>	
<p>&nbsp;</p>
<p>&nbsp;</p>

