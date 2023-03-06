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

$first_image = $banner_section['first_image'] ?: "https://raw.githubusercontent.com/danielsingian02/template_10/main/assets/images/Asset%208.png";
$second_image = $banner_section['second_image'] ?: "https://raw.githubusercontent.com/danielsingian02/template_10/main/assets/images/Asset%209.png";
$third_image = $banner_section['third_image'] ?: "https://raw.githubusercontent.com/danielsingian02/template_10/main/assets/images/Asset%2010.png";

get_header();
?>

    <div class="main-content">
        <?php
            if ($banner_display_section) :
        ?>

        <section class="banner">
            <div class="banner-wrapper">
                <h2 class="banner-title">
                    <?php echo $banner_section['text_banner']; ?>
                </h2>

                <div class="banner-hr" style="background-color: <?php echo $banner_section['border_color'] ?>"></div>
            </div>
            <div class="banner-wrapper__image-grid">
                <div class="image-grid">
                    <?php if($banner_section['display_first_image']) : ?>
                        <div class="first-image">
                            <img src="<?php echo $first_image ?>" alt="">
                        </div>
                    <?php endif; ?>

                    <?php if($banner_section['display_second_image']) : ?>
                    <div class="second-image">
                        <img src="<?php echo $second_image ?>" alt="">
                    </div>
                    <?php endif; ?>

                    <?php if($banner_section['display_third_image']) : ?>
                    <div class="third-image">
                        <img src="<?php echo $third_image ?>" alt="">
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <?php endif ?>

    </div>

<?php
get_footer();
?>
