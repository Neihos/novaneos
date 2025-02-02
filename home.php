<?php
/**
 * The template for home page
 *
 * This is the template that displays home by default.
 *
 * @package WordPress
 * @subpackage novaneos theme
 * @since novaneos 1.0
 */

get_header(); 
?>

<div class="main-container">

<section class="citation">    
        <p>
            « Un bon site web est la pierre angulaire de votre présence en ligne dans un monde connecté et un outil crucial pour votre réussite. Transformons votre entreprise ensemble ! »
        </p>    
</section>

<section class="partenaire">
    <div class="partenaireContainer">
        <div class="partenaireTexte">
            <h3 class="littleTitle">Novaneos: Votre partenaire digital</h3>
            <h2>Des solutions sur-mesure pour une transformation digitale réussie.</h2>
            <p>La satisfaction de nos clients: Notre priorité !</p>
            <p>Nous sommes à l’écoute de vos besoins et nous nous engageons à vous fournir un site web :</p>
            <ul class="checkIt">
                <li><i class="fa-solid fa-check"></i><p>Facile à utiliser</p></li>
                <li><i class="fa-solid fa-check"></i><p>Visuellement attractif</p></li>
                <li><i class="fa-solid fa-check"></i><p>Optimisé pour les moteurs de recherche</p></li>
                <li><i class="fa-solid fa-check"></i><p>Adapté à tous les supports</p></li>
            </ul>
        </div>
        <img src="wp-content\themes\novaneos\assets\images\homme-travaillant-sur-des-plans.webp" alt="illustration de travail méthodique">
    </div>
</section>

<section class="services">
    <div class="servicesContainer">
        <div class="servicesColonne">            
                <div class="littleTitle"><p>Nos Services</p></div>
                <div class="topServices">
                    <div class="service1">
                        <img class="cubeNovaneos" src="wp-content\themes\novaneos\assets\images\cubeNovaneos.webp" alt="cube avec logo Novaneos">
                        <div class="serviceContent">
                            <h3 class="titleService">Créations de site</h3>
                            <p>Nous concevons des sites web professionnels et esthétiques, adaptés à vos besoins et à l'image de votre entreprise.</p>
                        </div>
                    </div>
                    <div class="service2">
                        <img class="cubeNovaneos" src="wp-content\themes\novaneos\assets\images\cubeNovaneos.webp" alt="cube avec logo Novaneos">
                        <div class="serviceContent">
                            <h3 class="titleService">Optimisation SEO</h3>
                            <p>Nous améliorons le classement de votre site web dans les moteurs de recherche afin d'augmenter sa visibilité et d'attirer davantage de visiteurs qualifiés.</p>
                        </div>
                    </div>
                    <div class="service3">
                        <img class="cubeNovaneos" src="wp-content\themes\novaneos\assets\images\cubeNovaneos.webp" alt="cube avec logo Novaneos">
                        <div class="serviceContent">
                            <h3 class="titleService">Développement Web</h3>
                            <p>Notre entreprise développe des solutions web personnalisées, répondant à vos exigences spécifiques et exploitant les dernières technologies.</p>
                        </div>
                    </div>
                    <div class="service1">
                        <img class="cubeNovaneos" src="wp-content\themes\novaneos\assets\images\cubeNovaneos.webp" alt="cube avec logo Novaneos">
                        <div class="serviceContent">
                            <h3 class="titleService">Solutions de communications</h3>
                            <p>Nous vous proposons des stratégies de communication efficaces, intégrant les canaux en ligne pour maximiser votre portée et votre impact.</p>
                        </div>
                    </div>
                    <div class="service3">
                        <img class="cubeNovaneos" src="wp-content\themes\novaneos\assets\images\cubeNovaneos.webp" alt="cube avec logo Novaneos">
                        <div class="serviceContent">
                            <h3 class="titleService">Marketing digital</h3>
                            <p>Nous mettons en place des campagnes de marketing digital ciblées pour accroître votre notoriété, générer des leads et stimuler les ventes en ligne.</p>
                        </div>
                    </div>
                </div>           
        </div>

    </div>
</section>

<?php get_footer(); ?>