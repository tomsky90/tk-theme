<section class="values">
  <h2 class="values__heading"><?php echo esc_html($attributes['values-heading']) ?></h2>
  <div class="values__wrapper">
    <?php foreach ($attributes['values-tiles'] as $tile): ?>

      <div class="values__tile">
        <div class="values__icon-wrapper">
          <?php if (isset($tile['values-icon']['url'])) ?>
          <img class="values__icon" src="<?php echo esc_url($tile['values-icon']['url']) ?>"
            alt="<?php echo esc_attr($tile['values-icon']['alt']); ?>" />
        </div>
        <h3 class="values__tile-heading"> <?php echo esc_html($tile['values-tile-heading']) ?></h3>
        <p class="values__tile-text">
          <?php echo esc_html($tile['values-text']) ?>
        </p>
      </div>

    <?php endforeach ?>

  </div>


</section>