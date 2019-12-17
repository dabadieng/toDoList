<div class="myflex">

	<div>
		<a href="index.php"><img src="_images/HTML5.png" width="200"></a>
	</div>
	<div>
		<h1><?= $nomApplication ?><h1>
				<?php require "inc_identification.php"; ?>
				<form method="post" action="recherche.php">
					<input type="text" id="chercher" name="chercher" value="">
					<input type="submit" value="chercher" name="btChercher">
				</form>
	</div>
</div>