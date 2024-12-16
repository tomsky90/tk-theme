<section class="gallery">
  <h2 class="gallery__heading"><?php echo esc_html($attributes['recent-work-heading']) ?></h2>

  <div class="gallery__images-wrapper">
    <?php foreach ($attributes['recent-work-repeater'] as $image): ?>
      <div class='gallery__image-wrapper'>
        <img loading="lazy" class="gallery__image" src="<?php echo esc_url($image['url']); ?>"
          alt="<?php echo esc_attr($image['alt']); ?>">
      </div>
    <?php endforeach; ?>
    <div class="gallery__fullscreen-background ">
      <button class="gallery__fullscreen-close-btn">x</button>
      <button class="gallery__fullscreen-btn gallery__fullscreen-btn--prev">&lt;</button>
      <button class="gallery__fullscreen-btn gallery__fullscreen-btn--next">></button>
      <img class="gallery__fullscreen-image" src="" alt="">
    </div>
  </div>

</section>