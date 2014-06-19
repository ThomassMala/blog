<?php
    require_once('includes/authenticated.php');
	$title="Mon espace administration"; 		 						
	include_once('includes/actions.php');
	include_once('includes/header.php');
?>	

<!--mainpage-->
<div id="mainpage">
	<div class="MBloc">
		<div class="MContent">
			<h1>
			Mon administration
			</h1>
			Bonjour <?php echo $_SESSION['user'];?>
		</div>
	</div>
</div>

<?php 
    include_once('includes/footer.php'); 
?>
