<?php

$banner_section = $args["data"];


$first_image = $banner_section['first_image'] ?: "https://raw.githubusercontent.com/danielsingian02/template_10/main/assets/images/Asset%208.png";
$second_image = $banner_section['second_image'] ?: "https://raw.githubusercontent.com/danielsingian02/template_10/main/assets/images/Asset%209.png";
$third_image = $banner_section['third_image'] ?: "https://raw.githubusercontent.com/danielsingian02/template_10/main/assets/images/Asset%2010.png";

?>
<section class="banner">
    <div class="banner-wrapper">
        <h2 class="banner-title">
            <?php echo acf_esc_html($banner_section['text_banner']); ?>
        </h2>

        <div class="banner-hr" style="background-color: <?php echo esc_attr($banner_section['border_color']) ?>"></div>
    </div>
    <div class="banner-wrapper__image-grid">
        <div class="image-grid">
            <?php if ($banner_section['display_first_image']) : ?>
                <div class="first-image">
                    <img src="<?php echo esc_url($first_image) ?>" alt="">
                </div>
            <?php endif; ?>

            <?php if ($banner_section['display_second_image']) : ?>
                <div class="second-image">
                    <img src="<?php echo esc_url($second_image) ?>" alt="">
                </div>
            <?php endif; ?>

            <?php if ($banner_section['display_third_image']) : ?>
                <div class="third-image">
                    <img src="<?php echo esc_url($third_image) ?>" alt="">
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>