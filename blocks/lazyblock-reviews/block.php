<section class="reviews">
  <div class="reviews__image-wrapper">
    <?php if (isset($attributes['reviews-image']['id'])): ?>
      <?php
      $image_url = wp_get_attachment_image_url($attributes['reviews-image']['id'], 'large');
      $alt_text = get_post_meta($attributes['reviews-image']['id'], '_wp_attachment_image_alt', true);
      ?>
      <img class="reviews__img" src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($alt_text); ?>" />
    <?php endif; ?>
  </div>
  <div class="reviews__text-wrapper">
    <p class="reviews__text"><?php echo esc_html($attributes['reviews-text']) ?></p>
    <p class="reviews__text"><?php echo esc_html($attributes['reviews-author']) ?></p>
  </div>
</section>