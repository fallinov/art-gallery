<?php
require_once 'inc/config.php';

$work = [];
if (isset($_GET['id'])) {
    //$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $id = (int) $_GET['id'];
    $work  = $portfolio[$id];
}

$pageTitle = $work['titre'];
$section = "artwork";

include 'part/header.php';

?>
<section>
    <?php if(!empty($work)) : ?>
        <h3><?php echo $work['titre']; ?></h3>
        <figure>
            <img src="img/<?php echo $work['image'] ?>" alt="<?php echo $work['titre'] ?>"/>
            <figcaption><?php echo $work['description'] ?></figcaption>
        </figure>
    <?php else: ?>
        <h3>Pas de chance, le tableau <?php echo $id ?> a été dérobé hier soir !</h3>
    <?php endif; ?>
</section>

<?php include 'part/footer.php' ?>
