<?php $reviews_number = count($attributes['reviews']) ?>

<section class="reviews">
  <h2 class="reviews__heading"><?php echo esc_html($attributes['reviews-heading']) ?></h2>
  <div class="reviews__slider">

    <?php foreach ($attributes['reviews'] as $review): ?>
      <div class='reviews__review-wrapper'>
        <img class="reviews__quote" src="<?php echo get_template_directory_uri(); ?>/assets/images/quote.webp" alt=''>
        <div class="reviews__image-wrapper">
          <?php if (isset($review['reviews-image']['id'])): ?>
            <?php
            $image_url = wp_get_attachment_image_url($review['reviews-image']['id'], 'large');
            $alt_text = get_post_meta($review['reviews-image']['id'], '_wp_attachment_image_alt', true);
            ?>
            <img class="reviews__img" src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($alt_text); ?>" />
          <?php endif; ?>
        </div>
        <div class="reviews__text-wrapper">
          <img class="reviews__stars" src="<?php echo get_template_directory_uri(); ?>/assets/images/stars.webp"
            alt='Five stars review'>
          <p class="reviews__text"><?php echo esc_html($review['reviews-text']) ?></p>
          <p class="reviews__text"><?php echo esc_html($review['reviews-author']) ?></p>
        </div>
      </div>
    <?php endforeach ?>
  </div>
  <div class="reviews__nav-wrapper">
    <?php for ($i = 0; $i < $reviews_number; $i++) {
      echo '<button class="reviews__nav-btn"></button>';
    } ?>
  </div>
</section>