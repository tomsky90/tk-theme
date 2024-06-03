<section class="slider">
  <h2 class="slider__heading"><?php echo esc_html($attributes['recent-work-heading'])?></h2>
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <?php foreach( $attributes['recent-work-repeater'] as $image ): ?>
        <div class='swiper-slide'>
          <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>">
        </div>
      <?php endforeach; ?>
    </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
  </div>
</section>