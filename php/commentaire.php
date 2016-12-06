<?php
if (isset($_POST['submit'])) {
	if ((empty($_POST['nom'])) OR (empty($_POST['email'])) OR (empty($_POST['commentaire']))) //Oublie d'un champ
	{
		?>
		<p>
			<script type="text/javascript">alert('Invalide..!')
				document.location.href="#tab_commentaire"
			</script>
		</p>

		<?php
	} else {//

		// On ajoute une entrée dans la table utilisateur
		// $bdd->exec('INSERT INTO utilisateur(nom,prenom,age,adresse,email,mp) VALUES(\''.$_POST['nom'].'\',\''.$_POST['prenom'].'\',\''.$_POST['age'].'\',\''.$_POST['adresse'].'\',\''.$_POST['email'].'\',\''.$_POST['mp'].'\')');
		$bdd->exec("INSERT INTO utilisateur(nom,email,commentaire) VALUES('" . $_POST['nom'] . "','" . $_POST['email'] . "','" . $_POST['commentaire'] . "')");
		?>

		<p>

			<script type="text/javascript">alert('Votre commentaire a bien ajouter..!')
				document.location.href="#tab_afficher_commentaire"
			</script>
		</p>
		<?php
	}

}
?>