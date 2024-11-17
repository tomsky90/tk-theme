<section class="home__hero">
  <div class="home__hero-wrapper">
    <div class="home__hero-text-wrapper">
      <h1 class="home__hero-heading"><?php echo esc_html($attributes['banner-heading']); ?></h1>
      <h2 class="home__hero-sub-heading"><?php echo esc_html($attributes['banner-subheading']); ?></h2>
      <a href="http://labellatheme.local/contact/" class="home__hero-link">Book Now</a>
    </div>
    <div class="home__hero-img-wrapper">
      <?php
      if (isset($attributes['banner-img']['id'])) {
        echo wp_get_attachment_image(
          $attributes['banner-img']['id'],
          'full',
          false,
          array(
            'class' => 'home__hero-img',
            'alt' => esc_attr($attributes['banner-img']['alt']),
            'sizes' => '(max-width: 768px) 100vw, 50vw',
          )
        );
      }
      ?>
    </div>
  </div>
</section>