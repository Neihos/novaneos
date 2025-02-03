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
        <?php 
            $image_id = 25;
            $image_url = wp_get_attachment_image_url($image_id, 'full'); 
            $srcset = wp_get_attachment_image_srcset($image_id, 'full');
            $sizes = '(max-width: 2560px) 100vw, 1200px';
            $alt_text = get_post_meta($image_id, '_wp_attachment_image_alt', true);

            if ($image_url): ?>
                <img src="<?php echo esc_url($image_url); ?>" 
                srcset="<?php echo esc_attr($srcset); ?>" 
                sizes="<?php echo esc_attr($sizes); ?>" 
                alt="<?php echo esc_attr($alt_text); ?>">
        <?php endif; ?>
    </div>
</section>

<section class="services">
    <div class="servicesContainer">
        <div class="servicesColonne">            
                <h3 class="littleTitle">Nos Services</h3>
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

<section class="activityWeb">
    <div class="activityWebContainer">
        <h3 class="littleTitle">L'activité avec le web, c'est aujourd'hui !!!</h3>
        <h2>L'importance d'internet pour votre activité en quelques chiffres :</h2>
        <div class="pourcentContainer">
            <div id="pourcentBlock1">
                <div id="number">0%</div>
                <p>des entreprises déclarent que leur site web est leur principal canal de génération de leads.</p>
            </div>
            <div id="pourcentBlock2">
                <div id="number">0%</div>
                <p>des internautes utilisent internet pour rechercher des informations.</p>
            </div>
            <div id="pourcentBlock3">
                <div id="number">0%</div>
                <p>plus efficace : le marketing digital vs le marketing traditionnel.</p>
            </div>
            <div id="pourcentBlock4">
                <div id="number">0%</div>
                <p>des TPE, PME ont un site web.<br>(Pour les micro-entreprises: 66 %)</p>
            </div>
        </div>
    </div>
</section>

<section class="humanFirst">
    <div class="humanFirstContainer">        
        <?php 
            $image_id = 24;
            $image_url = wp_get_attachment_image_url($image_id, 'full'); 
            $srcset = wp_get_attachment_image_srcset($image_id, 'full');
            $sizes = '(max-width: 2560px) 100vw, 1200px';
            $alt_text = get_post_meta($image_id, '_wp_attachment_image_alt', true);

            if ($image_url): ?>
                <img src="<?php echo esc_url($image_url); ?>" 
                srcset="<?php echo esc_attr($srcset); ?>" 
                sizes="<?php echo esc_attr($sizes); ?>" 
                alt="<?php echo esc_attr($alt_text); ?>">
        <?php endif; ?>        
        <div class="contentHuman">
            <h3 class="littleTitle">L'humain avant tout</h3>
            <h2>Vous êtes intéressé par nos services web, mais vous appréciez le contact direct ?</h2>
            <p>Nous sommes sur la même longueur d’onde ! Ne perdez plus de temps, contactez-nous dès maintenant par téléphone ou remplissez notre formulaire en ligne.</p>
            <a class="contactUs" href="http://">Formulaire en ligne</a>
        </div>
    </div>
</section>

<section class="support">
    <div class="supportContainer">
        <div class="supportMain">
            <h3 class="littleTitle">Notre support</h3>
            <h2>Création de site Wordpress</h2>
            <p>WordPress se distingue comme le CMS dominant, propulsant plus de 40% des sites web mondiaux. Notre entreprise spécialisée vous offre la flexibilité évolutive, une gestion de contenu intuitive et une optimisation pour le référencement Google.</p>
        </div>
        <div class="blockSupport">
            <div class="blockSupportAlone">
                <?php 
                    $image_id = 21;
                    $image_url = wp_get_attachment_image_url($image_id, 'full'); 
                    $srcset = wp_get_attachment_image_srcset($image_id, 'full');
                    $sizes = '(max-width: 2560px) 100vw, 1200px';
                    $alt_text = get_post_meta($image_id, '_wp_attachment_image_alt', true);

                    if ($image_url): ?>
                        <img src="<?php echo esc_url($image_url); ?>" 
                        srcset="<?php echo esc_attr($srcset); ?>" 
                        sizes="<?php echo esc_attr($sizes); ?>" 
                        alt="<?php echo esc_attr($alt_text); ?>">
                <?php endif; ?>
                <div class="supportBlockTexte">
                    <h3>WordPress</h3>
                    <p>La plateforme incontournable pour la création de sites web, alimentant plus de 40% des sites à travers le monde.</p>
                </div> 
            </div>
            <div class="blockSupportAlone">
                <?php 
                    $image_id = 21;
                    $image_url = wp_get_attachment_image_url($image_id, 'full'); 
                    $srcset = wp_get_attachment_image_srcset($image_id, 'full');
                    $sizes = '(max-width: 2560px) 100vw, 1200px';
                    $alt_text = get_post_meta($image_id, '_wp_attachment_image_alt', true);

                    if ($image_url): ?>
                        <img src="<?php echo esc_url($image_url); ?>" 
                        srcset="<?php echo esc_attr($srcset); ?>" 
                        sizes="<?php echo esc_attr($sizes); ?>" 
                        alt="<?php echo esc_attr($alt_text); ?>">
                <?php endif; ?> 
                <div class="supportBlockTexte">
                    <h3>Flexibilité Évolutive :</h3>
                    <p>Avec WordPress, votre site peut croître avec votre entreprise, offrant une adaptabilité sans pareille pour répondre à vos besoins changeants.</p>
                </div>    
            </div>
            <div class="blockSupportAlone">
                <?php 
                    $image_id = 21;
                    $image_url = wp_get_attachment_image_url($image_id, 'full'); 
                    $srcset = wp_get_attachment_image_srcset($image_id, 'full');
                    $sizes = '(max-width: 2560px) 100vw, 1200px';
                    $alt_text = get_post_meta($image_id, '_wp_attachment_image_alt', true);

                    if ($image_url): ?>
                        <img src="<?php echo esc_url($image_url); ?>" 
                        srcset="<?php echo esc_attr($srcset); ?>" 
                        sizes="<?php echo esc_attr($sizes); ?>" 
                        alt="<?php echo esc_attr($alt_text); ?>">
                <?php endif; ?> 
                <div class="supportBlockTexte">
                    <h3>Gestion de Contenu Intuitive :</h3>
                    <p>Grâce à WordPress, la mise à jour de votre site est simplifiée et accessible à tous, même sans expérience en programmation.</p>
                </div>
            </div>
            <div class="blockSupportAlone">
                <?php 
                    $image_id = 21;
                    $image_url = wp_get_attachment_image_url($image_id, 'full'); 
                    $srcset = wp_get_attachment_image_srcset($image_id, 'full');
                    $sizes = '(max-width: 2560px) 100vw, 1200px';
                    $alt_text = get_post_meta($image_id, '_wp_attachment_image_alt', true);

                    if ($image_url): ?>
                        <img src="<?php echo esc_url($image_url); ?>" 
                        srcset="<?php echo esc_attr($srcset); ?>" 
                        sizes="<?php echo esc_attr($sizes); ?>" 
                        alt="<?php echo esc_attr($alt_text); ?>">
                <?php endif; ?> 
                <div class="supportBlockTexte">
                    <h3>Optimisation Google Facilitée :</h3>
                    <p>WordPress offre des outils intégrés pour améliorer votre référencement, mais une agence SEO peut vous aider à exploiter pleinement ces fonctionnalités et à maximiser votre visibilité en ligne.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>