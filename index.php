<?php
require_once 'inc/config.php';

$pageTitle = "Accueil";
$section = "home";

/**
$artWork  = array();

$artWork[0] = array(
	'titre' 		=> 'Tableau le chiffre 1',
	'image' 		=> 'numbers-01.jpg',
	'description' 	=> 'Expérimentation de couleurs');

$artWork[1] = array(
	'titre' 		=> 'Tableau le chiffre 2',
	'image' 		=> 'numbers-02.jpg',
	'description' 	=> 'Jeu de fondus');

$artWork[2] = array(
	'titre' 		=> 'Tableau le chiffre 6',
	'image' 		=> 'numbers-06.jpg',
	'description' 	=> '80\'s style');

$artWork[3] = array(
	'titre' 		=> 'Tableau le chiffre 9',
	'image' 		=> 'numbers-09.jpg',
	'description' 	=> 'Travail avec les pinceaux');

$artWork[4] = array(
	'titre' 		=> 'Tableau le numéro 12',
	'image' 		=> 'numbers-12.jpg',
	'description' 	=> 'Répétition de formes');


 */

/*echo"<pre>";
print_r($artWork);
echo"</pre>";
exit;
*/

include 'part/header.php';

?>
<section>
	<h2 class="cache">Mes réalisations</h2>
	<ul id="gallerie">
		<?php
		/*
		 * 		foreach (array_expression as $key => $value){
		 * 			//commandes
		 * 		}
		 */
		foreach($portfolio as $i => $work) : ?><li>
			<a href="work.php?id=<?php echo $i ?>" title="Voir <?php echo $work['titre'] ?>">
				<img src="img/<?php echo $work['image'] ?>" alt="<?php echo $work['titre'] ?>" />
				<p><?php echo $work['description'] ?></p>
			</a>
			</li><?php endforeach; ?>
	</ul>
	<!--
	<ul id="gallerie">
		<li>
			<a href="img/numbers-01.jpg" title="Voir le tableau chiffre 1">
				<img src="img/numbers-01.jpg" alt="Tableau le chiffre 1" />
				<p>Expérimentation de couleurs</p>
			</a>
		</li><li>
			<a href="img/numbers-02.jpg" title="Voir le tableau chiffre 2">
				<img src="img/numbers-02.jpg" alt="Tableau le chiffre 2" />
				<p>Jeu de fondus</p>
			</a>
		</li><li>
			<a href="img/numbers-06.jpg" title="Voir le tableau chiffre 6">
				<img src="img/numbers-06.jpg" alt="Tableau le chiffre 6" />
				<p>80's style</p>
			</a>
		</li><li>
			<a href="img/numbers-09.jpg" title="Voir le tableau chiffre 9">
				<img src="img/numbers-09.jpg" alt="Tableau le chiffre 9" />
				<p>Travail avec les pinceaux</p>
			</a>
		</li><li>
			<a href="img/numbers-12.jpg" title="Voir le tableau numéro 12">
				<img src="img/numbers-12.jpg" alt="Tableau le numéro 12" />
				<p>Répétition de formes</p>
			</a>
		</li>
	</ul>
	-->
</section>

<?php include 'part/footer.php' ?>
