<?php
/*
 * TODO : Traduire le site et remplacer le contenu par les site que j'ai réalisés : fsih, golf, ...
 * TODO : Créer une intrerface d'admin avec bootstrap :
 * 							- gestion des réalisations
 * 							- gestion des pages
 * 							- gestion des news
 * 							- gestion des utilisateurs
 * 							- gestion des  paramètres de base (Nom du site, Titre, social icon)
 * 							- statistique du site : visite, clics, news par user,  ...
 */

require_once 'inc/config.php';
require_once 'model/Portfolio.php';

$pageTitle = "Accueil";
$section = "home";

include 'part/header.php';

?>
<section>
	<h2 class="cache">Mes réalisations</h2>
	<ul id="gallerie">
		<?php
		foreach($portfolio as $key => $work) :
			?><li>
			<a href="work.php?id=<?php echo $key ?>"
			   title="Voir <?php echo $work['titre'] ?>">
				<img src="<?php echo is_file(PORTFOLIO_DIR . $work['image']) ? PORTFOLIO_URL . $work['image'] : IMG_URL . 'none.png' ?>"
					 alt="<?php echo $work['titre'] ?>"/>

				<p><?php echo $work['description'] ?></p>
			</a>
			</li><?php
		endforeach; ?>
	</ul>
</section>

<?php include 'part/footer.php' ?>
