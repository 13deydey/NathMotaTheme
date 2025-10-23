?>
<!doctype html>
<html lang="fr"> 
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Mota Photo</title>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <header class="header">
        <div class="nav__logo">
            <a href=" ">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Logo.png" alt="Logo Mota Photo">
            </a>
        </div>
        <div class="nav__menu">
            <ul>
                <li><a href="#accueil">ACCUEIL</a></li>
                <li><a href="#about">À PROPOS</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </header>