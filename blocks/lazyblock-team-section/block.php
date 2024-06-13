 <section class="team">
        <h2 class="team__heading"><?php echo esc_html($atttributes['team-section-heading'])?></h2>
        <div class="team__wrapper">
          <?php foreach( $attributes['team-section-cards'] as $inner ): ?>
            <div class="team__card">
            <div class="team__img-wrapper">
              <?php if(isset($inner['team-section-card-img']['url'])) :?>
              <img src="<?php echo esc_url($inner['team-section-card-img']['url'])?>" alt="<?php echo esc_attr($inner['team-section-card-img']['alt'])?>" class="team__img" />
              <?php endif ?>
            </div>
            <h3><?php echo esc_html($inner['team-section-card-name'])?></h3>
            <p>
              <?php echo esc_html($inner['team-section-card-desc'])?>
            </p>
          </div>
          <?php endforeach; ?>
          
        </div>
      </section>