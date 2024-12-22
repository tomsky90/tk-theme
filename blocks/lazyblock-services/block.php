<section class="services">
  <h2 class="services__heading"><?php echo esc_html($attributes['services-heading']) ?></h2>
  <?php foreach ($attributes['services-tile'] as $tile): ?>
    <div class="services__tile">
      <div class="services__tile-img-wrapper">
        <img class="services__tile-img" src="<?php echo esc_url($tile['service-img']['url']) ?>">
      </div>
      <div class="services__tile-text-wrapper">
        <h3 class="services__tile-heading"><?php echo esc_html($tile['service-subheading']) ?></h3>
        <p class="services__tile-text"><?php echo esc_html($tile['service-text']) ?></p>
        <h4 class="services__benefits-heading"><?php echo esc_html($tile['service-benefits-heading']) ?></h4>
        <div class="services__benefit-wrapper">
          <img class="services__done-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/Done.webp"
            alt='done icon'>
          <p class="services__benefit"><?php echo esc_html($tile['service-benefit-one']) ?></p>
        </div>
        <div class="services__benefit-wrapper">
          <img class="services__done-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/Done.webp"
            alt='done icon'>
          <p class="services__benefit"><?php echo esc_html($tile['service-benefit-two']) ?></p>
        </div>
        <div class="services__benefit-wrapper">
          <img class="services__done-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/Done.webp"
            alt='done icon'>
          <p class="services__benefit"><?php echo esc_html($tile['service-benefit-three']) ?></p>
        </div>



      </div>
    </div>

  <?php endforeach; ?>
</section>