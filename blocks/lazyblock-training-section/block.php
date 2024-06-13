<section class="about-training">
        <h2 class="about-training__heading"><?php echo esc_html($attributes['training-section-heading'])?></h2>
        <div class="about-training__wrapper">
          <div class="about-training__text-wrapper">
            <h3 class="about-training__subheading"><?php echo esc_html($attributes['training-section-subheading'])?></h3>
            <p>
             <?php echo esc_html($attributes['training-section-text'])?>
            </p>
          </div>
          <div class="about-training__img-wrapper">
            <?php if(isset($attributes['training-section-img']['url'])) : ?>
              <img src="<?php echo esc_url($attributes['training-section-img']['url'])?>" alt="<?php echo esc_attr($attributes['training-section-img']['alt'])?>">
            <?php endif?>
          </div>
        </div>
      </section>