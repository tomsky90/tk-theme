<section class="banner">
  <div class="banner__text-wrapper">
    <h1 class="banner__heading"><?php echo esc_html($attributes['banner-heading']) ?></h1>
    <h2 class="banner__subheading"><?php echo esc_html($attributes['banner-subheading']) ?></h2>
    <a href="<?php echo esc_url($attributes['banner-cta']); ?>" class="banner__btn">Get a Quote</a>
  </div>
  <div class="banner__img-wrapper">

    <?php if (isset($attributes['banner-img']['url'])): ?>
      <img class='banner__bgc-image' src="<?php echo esc_url($attributes['banner-img']['url']) ?>"
        alt="<?php echo esc_attr($attributes['banner-img']['alt']) ?>" />
    <?php endif ?>
  </div>
</section>