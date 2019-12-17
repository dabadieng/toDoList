
<style>
	body {
		font-family: Verdana, Geneva, Tahoma, sans-serif;
	}
	
	fieldset {
		background-color:#9DA;
		margin:auto 30%;			
	}
	
	legend {
		text-shadow:  5px 5px #558ABB;
	}
	
	label {
		display:inline-block;
		width:200px;
		text-align:right;
	}
	
	.textCenter {
		text-align:center;
	}
</style>
<body>
	<fieldset>
		<legend>Authentification</legend>
		<?= $message ?>
		<form method="post">
			<p>
				<label for="uti_username">username : </label>
				<input type="text" name="uti_username" id="uti_username">
			</p>
			<p>
				<label for="uti_mot_de_passe">votre mot de passe : </label>
				<input type="password" name="uti_mot_de_passe" id="uti_mot_de_passe">
			</p>
			<p class="textCenter"><input type="submit" value="Envoyer" name="btSubmit" /></p>
			<p class="textCenter"><input type="submit" value="S'inscrire" name="btInscriret" /></p>
			
			<a href='<?php hlien("inscription", "index"); ?>>Inscription</a>";
			
		</form>
	</fieldset>

</body>
