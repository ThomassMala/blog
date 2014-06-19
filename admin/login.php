<?php 
  $title="Page d'authenfication";
  include_once('includes/actions.php');
  include_once('includes/header.php'); 
?>

<!--mainpage-->
<div id="mainpage">
	<div class="MBloc;">
		<div class="MContent;">
			<h1>Formulaire d'authenfication</h1>
			Veuillez vous identifier pour accéder à cet espace protégé.
			<form action="login.php" method="post">
			<!-- eviter l'inclusion de variables dans l'url -->
			<input type="hidden" name="action" id="action" value="login" />				
			  <fieldset class="field1">
			    <div class="row">
				  <label for="username">&spades; Username :&nbsp;</label>
				  <input type="text" name="username" value="<?php 
				    if (isset ($_POST['username'])) 
				      {
					    echo $_POST['username'];
				      }
				  ?>" />
				  <?php
				    if (isset($messages) && isset($messages['username']))
					  {
					    echo '<div class="error">' .$messages['username'] .'</div>';
					  }
				  ?>

				</div>
			    <div class="row">
				  <label for="motdpasse">&hearts; PassWord :&nbsp;</label>
			<!-- le type password permet le remplacement de la saisie en dot -->
				  <input type="password" name="motdpasse" id="motdpasse" value="<?php 
				    if (isset ($_POST['motdpasse'])) 
				      {
					    echo $_POST['motdpasse'];
					  }
				  ?>" />
				  <?php
				    if (isset($messages) && isset($messages['motdpasse']))
					  {
					    echo '<div class="error">' .$messages['motdpasse'] .'</div>';
					  }
				  ?>
				  
				</div>
			  </fieldset>
			  <fieldset class="field2">
  			  	<div class="bouton">
			<!-- le type submit permet la validation grâce à la touche "Enter" -->
				  <button type="submit">Login</button>						
				</div>
			  </fieldset>
			</form>  
		</div>
	</div>
</div>

<?php 
  include_once('includes/footer.php'); 
?>

