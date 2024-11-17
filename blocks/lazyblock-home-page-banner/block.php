<section class="home__hero">
  <div class="home__hero-wrapper">
    <div class="home__hero-text-wrapper">
      <h1 class="home__hero-heading"><?php echo esc_html($attributes['banner-heading']) ?></h1>
      <h2 class="home__hero-sub-heading"><?php echo esc_html($attributes['banner-subheading']) ?></h2>
      <a href="./contact/" class="home__hero-link">Book Now</a>
    </div>
    <div class="home__hero-img-wrapper">
      <?php if (isset($attributes['banner-img']['url'])): ?>
        <img class="home__hero-img" src="<?php echo esc_url($attributes['banner-img']['url']); ?>"
          alt="<?php echo esc_attr($attributes['control_name']['alt']); ?>">
      <?php endif; ?>
    </div>
  </div>
</section>