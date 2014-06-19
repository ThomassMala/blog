<?php
    require_once('includes/authenticated.php');
	$title="Mon espace administration"; 		 						
	include_once('includes/actions.php');
	include_once('includes/header.php');
  ?>

<div id="mainpage">
	<div class="MBloc">
		<div class="MContent">
          <h1>Ajouter un article</h1>
		</div>
	</div>
	

  <form action="add_article.php" method="post">
    <input type="hidden" name="action" value="addarticle" />
			<fieldset class="field1">
			    <div class="row">
				  <label for="title">Titre</label>
				  <input type="text" name="title" id="title"" value="<?php 
				    if (isset ($_POST['title'])) 
				      {
					    echo $_POST['title'];
				      }
				  ?>" />
				  <?php
				    if (isset($messages) && isset($messages['title']))
					  {
					    echo '<div class="error">' .$messages['title'] .'</div>';
					  }
				  ?>
				</div>
			    <div class="row">
				  <label for="text">Article</label>
				  <!-- la balise textarea permet a l'utilisateur d'employer la touche enter dans le corps de son texte. -->
				  <textarea name="text"><?php
				    if (isset ($_POST['text'])) 
				      {
					    echo $_POST['text'];
					  }
				  ?></textarea>
				  <?php
				    if (isset($messages) && isset($messages['text']))
					  {
					    echo '<div class="error">' .$messages['text'] .'</div>';
					  }
				  ?>
				</div>
			</fieldset>
			<fieldset class="field2">
  			  	<div class="bouton">
				  <button type="submit">Enregistrer</button>						
				</div>
			</fieldset>

  </form>

</div>
<?php
  include_once ('includes/footer.php');
?>