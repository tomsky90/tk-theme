<section class="gallery">
  <h2 class="gallery__heading"><?php echo esc_html($attributes['recent-work-heading']) ?></h2>

  <div class="gallery__images-wrapper">
    <?php foreach ($attributes['recent-work-repeater'] as $image): ?>
      <div class='gallery__image-wrapper'>
        <?php echo wp_get_attachment_image($image['id'], 'medium', false, ['class' => 'gallery__image', 'loading' => 'lazy']); ?>
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