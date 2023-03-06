<?php
/**
 * Template Name: Home Page Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package template-10
 */

/**
 * ACF fields for the Home page of Template 10
 *
 * @Boolean Banner Display Section 'banner_display_section'
 * @Group Banner Section 'banner_section'
 * @Accordion Left Section
 *     @Text Text Section 'text_banner'
 *     @ColorPicker Border Color 'border_color'
 * @Accordion Right Section
 *     @Image First Image 'first_image'
 *     @Image Second Image 'second_image'
 *     @Image Third Image 'third_image'
 */

$banner_display_section = get_field( 'banner_display_section' ) ?? true;
$banner_section = get_field( 'banner_section' );

$cta_display_section = get_field( 'we_live_together_display_section' );
$cta = get_field( 'we_live_together_as_one' );

$background_img_display_section = get_field( 'background_image_display_section' );
$background_img = get_field( 'background_image' );

$about_us_display_section = get_field( 'about_us_display_section' );
$about_us = get_field( 'about_us' );

//echo "<pre>";
//var_dump($banner_section);
//echo "</pre>";

get_header();
?>

    <main class="main-content">
        <?php
            if ( $banner_display_section )
            {
                get_template_part(
                    'template-parts/components/home-page-banner',
                    '',
                    array( "data" => $banner_section )
                );
            }

            if ( $cta_display_section )
            {
                get_template_part(
                    'template-parts/components/cta',
                    '',
                    array( "data" => $cta )
                );
            }

            if ( $background_img_display_section ) {
                get_template_part(
                    'template-parts/components/background_image',
                    '',
                array( "data" => $background_img )
                );
            }

            if ( $about_us_display_section ) {
                get_template_part(
                    'template-parts/components/about_us',
                    '',
                    array( "data" => $about_us )
                );
            }
        ?>
    </main>



<?php
get_footer();
?>