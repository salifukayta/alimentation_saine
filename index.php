<!doctype html>
<html>
<head>
	<title>Alimentation saine</title>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="js/slider2_js.js"></script>
	<script src="js/popup.js"></script>

	<link rel="shortcut icon" href="img/icon2.ico" type="image/x-icon" />

	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="css/slider1.css">
	<link rel="stylesheet" href="css/slider2.css">
	
	<!--	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
	<!--	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
</head>
<body>
<?php
include("php/connexion_bd.php"); // on appelle le fichier
?>

<!-- Part 1 ---------------------------------------------->
<div class="head">
	<div class='ribbon'>
		<a href='#propos'><span>À propos</span></a>
		<a href='#secrets'><span>Les secrets</span></a>
		<a href='#erreurs'><span>Les erreurs</span></a>
		<a href='#conseils'><span>Conseils</span></a>
		<a href='#vitamines'><span>Les vitamines </span></a>
	</div>
</div>

<!-- Part 2 -->

<div id="slideshow-container">
	<div id="slideshow">
		<div id="box1"><img src="img/2.gif" class="img_slider"></div>
		<div id="box2"><img src="img/4.jpg" class="img_slider"></div>
		<div id="box3"><img src="img/5.jpg" class="img_slider"></div>
		<div id="box4"><img src="img/6.jpg" class="img_slider"></div>
		<div id="box5"><img src="img/1.jpg" class="img_slider"></div>
	</div>
</div>

<!-- Part 3 -->


<!----------------------------------------------->
<div class="p3_2">
	<div class="titre" id="propos">À propos</div>

	<div class="t2">Qu'est-ce qu'une saine alimentation?</div>

	<p class="parg">
		Bien manger signifie consommer une variété d'aliments des quatre groupes alimentaires pour se sentir bien et
		rester en bonne santé. Une alimentation saine, accompagnée d'une vie active, peut aussi diminuer votre risque de
		maladies.
	</p>
	<p class="bold"> Comment bien manger </p>

	<p class="parg">
		Suivez ces étapes pour vous aider à manger sainement :
	<div class="espace">
		- Consommez les bons types d'aliments en suivant le Guide alimentaire canadien. Choisissez une variété
		d'aliments dans chacun des quatre groupes alimentaires.
		<br>
		- Consommez les quantités d'aliments recommandées en fonction de votre âge, de votre sexe et de votre niveau
		d'activité.
		<br>
		- Lisez les étiquettes alimentaires pour comparer et choisir des aliments plus sains lorsque vous faites vos
		achats. Le tableau de la valeur nutritive et le pourcentage de la valeur quotidienne peuvent vous aider à faire
		de meilleurs choix.
		<br>
		- Limitez votre consommation d'aliments et de boissons riches en calories, matières grasses, sucre et sodium.
		<br>
		- Utilisez l'Assiette bien manger pour vous aider à visualiser les proportions de chacun des groupes d'aliments
		d'un repas sain.
	</div>
	</p>


	<!-- *********************** -->
	<div class="titre" id="secrets">Les secrets</div>
	<div class="t2"> Les bases du reglage nutritionnel</div>
	<p class="parg">
		1. Changez vos habitudes alimentaires oui…mais tout en douceur!
	<div class="espace">
		Je vous conseille d’intégrer progressivement et tranquillement ces conseils. Votre organisme peut réagir un peu
		fortement à ces changements. Ballonnements, diarrhée, langue chargée, boutons, maux de tête, peuvent apparaître
		et sont souvent simplement signes que votre organisme élimine des toxines. En changeant tranquillement et
		doucement vous évitez des réactions trop violentes. Après quelques jours vous devriez déjà ressentir des
		bénéfices comme moins de somnolence l’après-midi, une peau plus belle, un sommeil meilleur, une régulation du
		poids, du transit et de l’humeur !
	</div>
	</p>
	<p class="parg">
		2. Privilégiez l’ambiance et le plaisir à table
	<div class="espace">
		Le stress entraîne des altérations du système nerveux et endocrinien, qui sont eux-mêmes garants d’une bonne
		digestion et assimilation des aliments. C’est dire l’importance du plaisir, du calme et de la joie à table,
		seul, ou à plusieurs ! Prenez le temps de déconnecter avant de prendre votre repas avec, par exemple, une petite
		marche ou quelques respirations ventrales, puis mangez calmement et assis.
	</div>
	</p>
	<p class="parg">
		3. Mastiquez, c’est la santé
	<div class="espace">
		Mastiquer longuement entraîne de multiples bienfaits : préparer les aliments à leur passage dans l’estomac,
		pré-digérer les amidons, aseptiser via une enzyme salivaire désinfectante, programmer une bonne digestion
		(information envoyée à l’hypothalamus) et enfin apporter une sensation de satiété plus rapidement (ce serait
		l’un des meilleurs régimes !).
	</div>
	</p>
	<img src="img/pyramide.jpg" class="pyramide_img">
	<!---------- ajouter limage de regles slider------------------------------------->
	<p class="base_reglage"> LES BASES DU RÉGLAGE NUTRITIONNEL</p>
	<div id="slider2">

		<!-- Sildes -->
		<img id="one" src="img/sl2.jpg"/>
		<img id="two" src="img/sl3.jpg"/>
		<img id="three" src="img/sl4.jpg"/>
		<img id="four" src="img/sl5.jpg"/>
		<img id="five" src="img/sl6.jpg"/>

		<!-- Navigation for the slides -->
		<ul>
			<li>
				<a href="#one">1</a>
			</li>
			<li>
				<a href="#two">2</a>
			</li>
			<li>
				<a href="#three">3</a>
			</li>
			<li>
				<a href="#four">4</a>
			</li>
			<li>
				<a href="#five">5</a>
			</li>
		</ul>

	</div>
	<!-- End of Slider ----------------------------------->
	<div class="titre" id="erreurs">Les erreurs</div>
	<div class="espace">
		<table class="table_erreur">
			<tr>
				<td>
					<div class="fleche"></div>
				</td>
				<td>
					&nbsp &nbsp
					Les vitamines et les minéraux agissent en synergie. Une seule carence alimentaire peut affecter
					négativement l’ensemble de l’organisme. C’est la raison pour laquelle beaucoup de personnes mangeant
					de nombreux aliments saints se retrouvent sans les résultats escomptés. L’équilibre est important.

					Par exemple une personne ne mangeant pas d’aliments issus de la mer se retrouvera certainement
					carencée en magnésium, un minéral qui se fait rare dans les aliments terrestres.

				</td>
			</tr>

			<tr>
				<td>
					<div class="fleche"></div>
				</td>
				<td>
					&nbsp &nbsp
					Une mauvaise combinaison alimentaire peut rendre un repas indigeste et toxique. Il est important de
					savoir quelles sont les bonnes et les mauvaises combinaisons alimentaires pour ne pas faire l’erreur
					de rendre mauvais des aliments saints.
				</td>
			</tr>

			<tr>
				<td>
					<div class="fleche"></div>
				</td>
				<td>
					&nbsp &nbsp
					Ne pas manger assez de calories détruit le métabolisme et empêche de maigrir et bien manger sain.
					Pour quelle raison? Car lorsqu'on ne mange pas assez, le métabolisme se voit très ralenti. Cependant
					quand le métabolisme est ralenti, alors le sang circule trop lentement pour atteindre les zones où
					l'on souhaite perdre de la graisse (d'où le fait qu'à la plage, on a tendance à avoir les fesses et
					le ventre froids).
				</td>
			</tr>

			<tr>
				<td>
					<div class="fleche"></div>
				</td>
				<td>
					&nbsp &nbsp
					évitez au mieux les situations stressantes. En cas d'erreurs, restez fiert et passez à autre chose.
					De même pour les malheurs. Ils font partie de la vie. Séparez-vous des personnes négatives ou
					ignorez-les au mieux quand ce n'est pas possible.
			</tr>


		</table>
	</div>

	<div class="titre" id="conseils">Les conseils</div>
	<div class="espace">
		Pour bien manger, ces quelques conseils peuvent vous aider à ne pas commettre d'erreur :<br>

		1. Evitez le grignotage ou alors prenez une vraie collation avec fruits et laitages.<br>

		2. Consommez un peu de matières grasses de cuisson et d'assaisonnement (beurre, huile).<br>

		3. Mangez des fruits et/ou des légumes, crus ou cuits, à tous les repas.<br>

		4. Accordez une large place au pain.<br>

		5. Consommez plus souvent des légumes secs.<br>

		6. Limitez les confiseries.<br>

		7. Modérez votre consommation de fritures ; il n'existe pas d'huiles légères.<br>

		8. Consommez un produit laitier à chaque repas y compris au petit déjeuner, c'est la seule façon de couvrir les
		besoins en calcium à tous les âges de la vie.
		Variez les fromages aussi souvent que possible, essayez les goûts nouveaux.<br>

		9. Mangez dans le calme et consacrez du temps à vos repas.<br>

		10. Buvez de l'eau à volonté, pendant les repas ou en dehors.<br>

		11. Attention aux calories apportées par le vin et les alcools (1 g d'alcool = 7 Kcal).<br>
	</div>
	<br><br>
	<img src="img/cons1.png">
	<br><br>
	<!--------------------------------------------->
	<div class="titre" id="vitamines">Les vitamines</div>
	<br>
	<div class="shadowTitre">Vitamine A</div>
	<div class="espace">
		- Foie (de poulet, de boeuf, etc.) et huile de foie de poisson <br>
		- Légumes verts feuillus <br>
		- Fruits et légumes orange, dont le cantaloup, la mangue et la patate douce
		- Oeufs
		- Produits laitiers
	</div>
	<br>
	<div class="shadowTitre">Vitamine C</div>
	<div class="espace">
		- Poivrons verts, jaunes et rouges <br>
		- Fraises, framboises, kiwis<br>
		- Melons, mangues<br>
		- Oranges, pamplemousses<br>
		- Clémentines, mandarines<br>
		- Tomates, navets, pommes de terre avec la pelure, épinards<br>
		- Choux-fleurs, brocolis, choux de Bruxelles<br>
		- Jus de fruits et de légumes<br>
	</div>
	<br>
	<div class="shadowTitre">Vitamine D</div>
	<div class="espace">
		- Lait <br>
		- Yogourt enrichi <br>
		- Boissons de soya enrichies <br>
		- Poissons gras et huiles de poisson
	</div>
	<br>
	<div class="shadowTitre">Calcium</div>
	<div class="espace">
		- Produits laitiers (lait, yogourt, fromage...)<br>
		- Boissons de soya enrichies<br>
		- Amandes<br>
		- Poissons (saumon, sardine) en conserve avec les arêtes<br>
	</div>
	<br>
	<div class="shadowTitre">Fer</div>
	<div class="espace">
		- Viande Volaille &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
		- Fruits de mer<br>
		- Oeufs Légumineuses &nbsp; &nbsp; &nbsp;
		- Produits céréaliers enrichis en fer<br>
		- Légumes vert foncé &nbsp;&nbsp;
		- Noix et graines<br>
	</div>
	<br>
	<div class="shadowTitre">Magnésium</div>
	<div class="espace">
		- Légumes verts &nbsp; &nbsp; &nbsp;
		- Légumineuses <br>
		- Noix et graines &nbsp; &nbsp;&nbsp;
		- Produits céréaliers à grains entiers

	</div>
	<br>
	<?php
	include("php/nb_visite.php");
	?>


	<br> <br> <br>
	<!----------------------------------------------->
	<?php
	include("php/commentaire.php"); // on appelle le fichier
	$reponse = $bdd->query('SELECT * FROM utilisateur');


	?>
	<table class="tab_affich_comment" id="tab_afficher_commentaire">
		<?php while ($donnees = $reponse->fetch()) {
			?>

			<tr class="doigt">
				<td class="td1_tab_affich_comment"><?php echo $donnees['nom']; ?> </td>
				<td class="td2_tab_affich_comment"><?php echo $donnees['commentaire']; ?> </td>
			</tr>
			<?php
		}
		?>
	</table>
	<br><br><br>

	<?php

	$reponse->closeCursor();

	?>
	<form method="post">
		<table class="tab_commentaire" id="tab_commentaire">
			<tr>
				<td class="td_effet_css_commentaire">
					Nom:*
				</td>
				<td>
					<input type="text" name="nom" id="nom">
				</td>
			</tr>
			<tr>
				<td class="td_effet_css_commentaire">
					Email:*
				</td>
				<td>
					<input type="email" name="email" id="email">
				</td>
			</tr>

			<tr>
				<td class="td_effet_css_commentaire">
					Commentaire:
				</td>
				<td>
					<textarea name="commentaire" id="commentaire" rows="10" cols="50"></textarea>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" value="Laisser un commentaire" name="submit" class="butt_commentaire">
				</td>
			</tr>
		</table>
		<!------------------------------------------------->


	</form>


</div>

</body>
</html>
