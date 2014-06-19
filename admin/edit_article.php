<?php
    require_once('includes/authenticated.php');
	$title="Modifier votre article"; 		 						
	include_once('includes/actions.php');
	include_once('includes/header.php');
	
	/* recupération du titre et de l'article a modifier via l'action "modifier" de la page gestion_articles.php */
	$query = mysql_query("SELECT title, text FROM tblarticles WHERE id_article =" .mysql_real_escape_string($_GET['id_article']));
	$article = mysql_fetch_assoc($query);
  ?>

<div id="mainpage">
	<div class="MBloc">
		<div class="MContent">
          <h1>Modifier votre article</h1>
		</div>
	</div>
	

  <form action="edit_article.php?id_article=<?php echo $_GET['id_article']; ?>" method="post">
    <input type="hidden" name="action" value="editarticle" />
			<fieldset class="field1">
			    <div class="row">
				  <label for="title">Titre</label>
				  <input type="text" name="title" id="title"" value="<?php 
				    if (isset ($_POST['title'])) 
				      {
					    echo $_POST['title'];
				      }
					  else {
					    echo $article['title'];
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
                      else {
					    echo $article['text'];
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