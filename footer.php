<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bap
 */

?>
</main>
<footer class="blue-footer">
    <div class="footer-content">
        <div class="social-media">
            <a href="https://www.instagram.com/association_maison_chrysalide/" target="_blank"><img src="/chrysalide/wp-content/themes/my_theme/asset/icons/Instagram.png" alt="Instagram"></a>
            <a href="https://www.facebook.com/asso.chrysalide.1" target="_blank"><img src="/chrysalide/wp-content/themes/my_theme/asset/icons/Facebook.png" alt="Facebook"></a>
            <a href="https://www.youtube.com/channel/UChbTajcxnSMQcE2Yr5yaWZw" target="_blank"><img src="/chrysalide/wp-content/themes/my_theme/asset/icons/YouTube.png" alt="YouTube"></a>
            <a href="mailto:maisonchrysalide@gmail.com"><img src="/chrysalide/wp-content/themes/my_theme/asset/icons/Mail.png" alt="Mail"></a>
        </div>
        <div class="logo">
            <img src="<?= get_template_directory_uri(); ?>/asset/Image/Logo_blanc.svg" alt="Logo">
        </div>
        <div class="mentions-legales">
            <a href="<?= get_permalink(103) ?>">Mentions légales</a>
        </div>
    </div>
</footer>


<?php wp_footer(); ?>

</body>
</html>