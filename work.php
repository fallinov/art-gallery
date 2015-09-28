<?php
require_once 'inc/config.php';
require_once 'model/Portfolio.php';


//Initialisation
$work = [];
$id = 0;
$pageTitle = 'Tableau introuvable !';
$section = "artwork";

//Récupération du paramètre d'URL id
//$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
$id = (int)$_GET['id'];

//Test si id existe
if ($id AND array_key_exists($id, $portfolio)) {
    $work  = $portfolio[$id];
    $pageTitle = $work['titre'];
}


include 'part/header.php';

?>
<section>
    <?php if(!empty($work)) : ?>
        <h3><?php echo $work['titre']; ?> |
            <small><a href="<?php echo $_SERVER["HTTP_REFERER"] ?>">Retour</a></small>
        </h3>
        <figure>
            <img src="<?php echo is_file(PORTFOLIO_DIR . $work['image']) ? PORTFOLIO_URL . $work['image'] : IMG_URL . 'none.png' ?>"
                 alt="<?php echo $work['titre'] ?>"/>
            <figcaption><?php echo $work['description'] ?></figcaption>
        </figure>
    <?php else: ?>
        <h3>Pas de chance, le tableau <?php echo $id ?> a été dérobé hier soir !</h3>
    <?php endif; ?>
</section>

<?php include 'part/footer.php' ?>
