<?php

$cta = $args[ "data" ];
$cta_icon = $cta['title_icon'] ?: 'https://raw.githubusercontent.com/danielsingian02/template_10/main/assets/images/Asset%2011%202.png';
$cta_background_image = $cta['background_image'] ?: 'https://raw.githubusercontent.com/danielsingian02/template_10/main/assets/images/desc%20bg%20leaf.png';

?>

<?php if ( $cta[ 'display_background_image' ] ) :?>
    <section class="homepage-cta" style="background-image: url('<?php echo esc_url(esc_html($cta_background_image)); ?>')">
<?php else: ?>
    <section class="homepage-cta">
<?php endif; ?>
    <div class="cta-title-wrapper cta-title-wrapper__title">
        <h3 class="cta-title">
            <?php
            echo esc_attr($cta['title']);
            ?>
        </h3>
        <?php if ( $cta[ 'display_title_icon_image' ] ) :?>
            <img src="<?php echo esc_attr($cta_icon);?>" alt="" class="cta-icon">
        <? endif; ?>
    </div>

    <div class="cta-content-wrapper cta-content-wrapper__content">
        <?php echo acf_esc_html($cta['content']); ?>
    </div>
    </section>
<?php endif; ?>