<section class="about">
        <div class="about__welcom-section-wrapper">
          <div class="about__welcom-img-wrapper">
            <?php if(isset($attributes['welcome-section-img']['url'])) : ?>
              <img src="<?php echo esc_url($attributes['welcome-section-img']['url'])?>" alt="<?php echo esc_attr($attributes['welcome-section-img']['alt'])?>">
              <?php endif?>
          
          </div>
          <div class="about__welcom-text-wrapper">
            <h2 class="about__welcom-heading"><?php echo esc_html($attributes['welcome-section-heading'])?></h2>

            <p class="about__text">
             <?php echo esc_html($attributes['welcome-section-text'])?>
            </p>
          </div>
        </div>
      </section>