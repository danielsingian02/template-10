<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package template-10
 */

?>

    <footer id="colophon" class="site-footer">
        <div class="footer-content">
            <div class="footer-content__wrapper footer-content__text">
                <div class="site-footer-icon">
                    <?php
                    if ( ! function_exists('the_custom_logo') && (! empty(get_custom_logo())) ) :
                        the_custom_logo(); ?>
                    <?php
                    else :
                        ?>
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <?php
                    endif;
                    ?>
                </div>
                <div class="footer-text-content">
                    <nav id="site-navigation" class="">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-1',
                                'menu_id'        => 'primary-menu',
                            )
                        );
                        ?>
                    </nav><!-- #site-navigation -->
                </div>
                <div class="copyright">
                    <p>
                        <?php
                        echo get_option("footer_copyright") ?? "© Copyright 2021 HOA Management Name Here";
                        ?>
                    </p>
                </div>
            </div>
            <div class="footer-content__wrapper">
                <div class="google-map-container">
                    <?php
                    get_template_part(
                        'template-parts/google-map',
                        'component',
                        array(
                            "link" => get_option("footer_google_maps") ?? 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3339717.318218167!2d-79.860994!3d35.1705173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88541fc4fc381a81%3A0xad3f30f5e922ae19!2sNorth%20Carolina%2C%20USA!5e0!3m2!1sen!2sph!4v1670564659285!5m2!1sen!2sph',
                            "height" => 450,
                        )
                    )
                    ?>
                </div>
            </div>
        </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
