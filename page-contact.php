<?php
/*
Template Name: Contact
*/
/**
 * The Template for displaying contact page
 *
 * @package WordPress
 * @subpackage novaneos theme
 * @since novaneos 1.0
 */

// Inclure le fichier avec les données des médias photos
include('template_parts/home_parts.php');

get_header(); 
?>
<div id="contactContainer">
    <div class="illustrationContact">
        <?php echo get_image_html(38); ?>
    </div>
    <div class="moyenDeContact">
        <div class="formulaire">
            <?php 
                // Affiche le formulaire Contact Form 7 avec l'ID ou le titre
                echo do_shortcode('[contact-form-7 id="76c77e5" title="Formulaire de contact 1"]'); 
            ?>
        </div>
        <div class="infoEntreprise">
            <?php echo get_image_html(21); ?>
        </div>
    </div>
</div>
<?php
get_sidebar();
get_footer();
?>