<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bienvenue sur le site de Novaneos, entreprise spécialisée dans la création de sites internet sur mesure, le développement web et l'accompagnement en stratégie digitale. Notre équipe de développeurs experts crée des solutions web performantes, adaptées à vos besoins. De la conception de sites vitrines à l'e-commerce, en passant par l'optimisation SEO et la gestion des réseaux sociaux, Novaneos vous aide à booster votre présence en ligne.">
    <meta name="keywords" content="création de site internet, développement web, développement de sites, conception de site sur mesure, stratégie digitale, SEO, réseaux sociaux, e-commerce, développement front-end, développement back-end, optimisation web, web design, responsive design, référencement SEO, développement WordPress, stratégie de communication digitale, marketing digital">
    <meta name="author" content="Neihos">
    <meta name="title" content="Novaneos - Création de Sites Internet & Développement Web | Stratégie Digitale et Réseaux Sociaux">
    <meta name="robots" content="index, follow">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <title>Novaneos</title>
    <?php wp_head(); ?>
</head>
    
<header id="siteHeader">

  <div class="headerContainer">
    <figure class="logoSite">
      <?php
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo_url = wp_get_attachment_image_url($custom_logo_id, 'full');

        if ($logo_url) {
            echo '<img class="imgLogo" src="' . esc_url($logo_url) . '" alt="Logo">';
        }
      ?>
    </figure>
    <nav class="desktopNav">
      <?php
      // menu main déclaré dans functions.php
			wp_nav_menu(array('theme_location' => 'main')); 
		  ?>
    </nav>
    <a class="contactUsNav" href="<?php echo home_url( '/contact' ); ?>">
      <span><p>Contactez nous</p><i class="fa-solid fa-envelope"></i></span>
    </a>
  </div>

  <div class="mobileNavContainer">
    <figure class="logoSiteMobile">
      <?php
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo_url = wp_get_attachment_image_url($custom_logo_id, 'full');

        if ($logo_url) {
            echo '<img class="imgLogoMobile" src="' . esc_url($logo_url) . '" alt="Logo">';
        }
      ?>
    </figure>
    <div class="burgerMenu">
      <img class="burgerIcon" src="<?php echo get_template_directory_uri(); ?>/assets/images/burgerIcone.svg" alt="icone burger menu">
      <img class="crossIcon hiddenNow" src="<?php echo get_template_directory_uri(); ?>/assets/images/crossIcone.svg" alt="Icone croix">
    </div>
  </div>

  <nav class="mobileNav close">
      <?php
      // menu main déclaré dans functions.php
			wp_nav_menu(array('theme_location' => 'main')); 
		  ?>
  </nav>

</header>

<div class="accueil">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digitalization.webp" alt="Illustration d'accueil">
</div>
  
</div>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>