<?php

$about_us = $args["data"];
$title_icon = $about_us['title_icon'] ?: 'https://raw.githubusercontent.com/danielsingian02/template_10/main/assets/images/Asset%2011%202.png';
$cta_background_image = $about_us['background_image'] ?: 'https://raw.githubusercontent.com/danielsingian02/template_10/main/assets/images/desc%20bg%20leaf.png';
?>

<section class="homepage-about-us">
    <div class="homepage-about-us-content-wrapper">
        <?php echo acf_esc_html($about_us['content']); ?>
    </div>

    <div class="homepage-about-us-text-wrapper">
        <div class="homepage-about-us-title-wrapper">
            <h3 class="cta-title">
                <?php echo esc_attr($about_us['title']); ?>
            </h3>
            <h3 class="cta-about-us-tagline">
                <?php echo esc_attr($about_us['title_tagline']); ?>
            </h3>
        </div>
        <?php if ($about_us['display_title_icon']) : ?>
            <div class="homepage-about-us-icon-wrapper">
                <img src="<?php echo esc_url($title_icon); ?>" alt="" class="cta-icon">
            </div>
        <?php endif; ?>

    </div>
</section>