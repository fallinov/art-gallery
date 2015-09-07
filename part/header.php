<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> <?php echo $pageTitle ?> | Steve Fallet Designer</title>
        <!-- Polices -->
        <link href='http://fonts.googleapis.com/css?family=Changa+One|Open+Sans:400italic,700italic,400,700,800' rel='stylesheet' type='text/css'>
        <!-- Styles -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
        <header>
            <a id="logo" href="index.php">
                <h1>Steve Fallet</h1>
                <h2>Designer</h2>
            </a><nav>
                <ul>
                    <li><a href="index.php" <?php if ($section == "home") { echo 'class="selected"'; } ?>
                            >Home</a></li>
                    <li><a href="about.php" <?php if ($section == "about") { echo 'class="selected"'; } ?>
                            >About</a></li>
                    <li><a href="contact.php" <?php if ($section == "contact") { echo 'class="selected"'; } ?>
                            >Contact</a></li>
                </ul>
            </nav>
        </header>

        <div id="wrapper">