<?php
require_once 'inc/config.php';

//Nettoye les données formulaire : espaces et injections HTML/JS
foreach ($_POST as &$post) {
    $post = trim(strip_tags($post));
}

//Récupération des données du formulaire
$name       = $_POST['name'];
$email      = $_POST['email'];
$message    = $_POST['message'];
$copy       = $_POST['copy'];


$errors = [];

//Champs obligatoire
if (!$name OR !$email OR !$message) {
    $errors[] = "Nom, email et message obligatoires !";
}

//Si email invalide
if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Email invalid !';
}

$pageTitle = "Confirmation";
$section = "contact";

include 'part/header.php';
?>

    <section id="about">
        <?php if($errors): ?>
            <h3>Erreurs</h3>
            <ul>
            <?php foreach($errors as $error): ?>
                <li><?php echo $error ?></li>
            <?php endforeach; ?>
            </ul>
            <a href="contact.php">&lt;&lt; Retourner au formulaire</a>
        <?php else: ?>
            <h3>Confirmation</h3>

            <p>Bonjour <?php echo $name ?>, nous avons bien reçu votre message :</p>
            <pre><?php echo $message ?></pre>

            <?php if($copy): ?>
                <p>Une copie de cet email vous a été envoyé à votre adresse <em><?php echo $email ?></em>.</p>
            <?php endif; ?>

            <p>Belle journée !</p>
        <?php endif; ?>
    </section>

<?php include 'part/footer.php'; ?>