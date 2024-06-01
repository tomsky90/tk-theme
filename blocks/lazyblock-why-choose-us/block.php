 <section class="home-choose-us">
        <h2 class="home-choose-us__heading"><?php echo esc_html($attributes['choose-us-heading'])?></h2>
        <div class="home-choose-us__wrapper">
          <?php foreach($attributes['choose-us-tiles'] as $tile):?>

            <div class="home-choose-us__tile">
            <div class="home-choose-us__icon-wrapper">
              <?php if(isset( $tile['choose-us-icon']['url'] ) )?>
              <img src="<?php echo esc_url($tile['choose-us-icon']['url'] )?>"  alt="<?php echo esc_attr( $tile['choose-us-icon']['alt'] ); ?>"/>
            </div>
            <h3 class="home-choose-us__tile-heading"> <?php echo esc_html($tile['choose-us-tile-heading'])?></h3>
            <p class="home-choose-us__tile-text">
              <?php echo esc_html($tile['choose-us-text'])?>
            </p>
          </div>

          <?php endforeach ?>
        </div>
      </section>