<section class="offers">
  <div class="offers__img-wrapper">
    <?php if(isset($attributes['offers-img']['url'])) : ?>
      <img class="offers__img" src='<?php echo esc_url($attributes['offers-img']['url'])?>' alt="<?php echo esc_attr($attributes['offers-img']['alt'])?>" />
    <?php endif?>
  </div>
</section>