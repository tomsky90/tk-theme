<section class="about">
  <div class="about__wrapper">
    <h2 class="about__heading"><?php echo esc_html($attributes['about-heading']) ?></h2>

    <div class="about__tile">
      <div class="about__img-wrapper">
        <?php if (isset($attributes['about-image']['id'])): ?>
          <?php
          $image_url = wp_get_attachment_image_url($attributes['about-image']['id'], 'large');
          $alt_text = get_post_meta($attributes['about-image']['id'], '_wp_attachment_image_alt', true);
          ?>
          <img class="about__img" src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($alt_text); ?>" />
        <?php endif; ?>


      </div>
      <div class="about__text-wrapper">
        <p class="about__text">
          <?php echo esc_html($attributes['about-text']) ?>
        </p>


      </div>

    </div>
  </div>
</section>