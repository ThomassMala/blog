<?php
    require_once('includes/authenticated.php');
	$title="Mon espace administration"; 		 						
	include_once('includes/actions.php');
	include_once('includes/header.php');
	
	$query = mysql_query('SELECT id_article, title, date FROM tblarticles');
 ?>
 
<div id="mainpage">
	<div class="MBloc">
		<div class="MContent">
          <h1>Gestion des articles</h1>
		</div>
	</div>
	
  <div class="actions">
    <a href="add_article.php">Ajouter un article</a>
  </div>

  <table id="tblarticles"">
    <thead>
	  <tr>
        <th class="col1">ID</th>
        <th class="col2">Titre</th>
        <th class="col3">Date</th>
        <th class="col4">Actions</th>
	  <tr>
    </thead>
  
  <?php
    while ($row = mysql_fetch_assoc($query)){
	  echo '<tr>
	          <td>' .$row['id_article'] .'</td>
			  <td>' .$row['title'] .'</td>
			  <td>' .$row['date'] .'</td>
			</tr>
	  ';
	}
  ?>	
</table>  

</div>
<?php
  include_once ('includes/footer.php');
?>