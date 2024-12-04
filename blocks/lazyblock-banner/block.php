<section class="banner">
  <div class="banner__text-wrapper">
    <h1 class="banner__heading"><?php echo esc_html($attributes['banner-heading']) ?></h1>
    <h2 class="banner__subheading"><?php echo esc_html($attributes['banner-subheading']) ?></h2>
    <a href="<?php echo esc_url($attributes['banner-cta']); ?>" target="blank" class="cta-link">Get a Quote</a>
  </div>
  <div class="banner__img-wrapper">

    <?php if (isset($attributes['banner-img']['id'])): ?>
      <?php
      $image_url = wp_get_attachment_image_url($attributes['banner-img']['id'], 'large');
      $alt_text = get_post_meta($attributes['banner-img']['id'], '_wp_attachment_image_alt', true);
      ?>
      <img class="banner__bgc-image" src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($alt_text); ?>" />
    <?php endif; ?>
  </div>
</section>