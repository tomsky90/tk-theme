 <section class="home-about">
        <div class="home-about__wrapper">
          <div class="home-about__tile">
            <div class="home-about__icon-wrapper">
             <?php if ( isset( $attributes['home-about-icon']['url'] ) ) : ?>
  <img class="home-about__icon" src="<?php echo esc_url( $attributes['home-about-icon']['url'] ); ?>" alt="<?php echo esc_attr( $attributes['home-about-icon']['alt'] ); ?>">
<?php endif; ?>
            </div>
            <div class="home-about__text-wrapper">
              <h2 class="home-about__heading"><?php echo esc_html($attributes['home-about-heading'])?></h2>
              <p>
               <?php echo esc_html($attributes['home-about-text'])?>
              </p>
            </div>
          </div> 
          <div class="home-about__tile">
            <div class="home-about__img-wrapper">
              <div class="home-about__img-wrapper">
                <?php if ( isset( $attributes['home-about-image']['url'] ) ) : ?>
  <img class="home-about__img" src="<?php echo esc_url( $attributes['home-about-image']['url'] ); ?>" alt="<?php echo esc_attr( $attributes['home-about-image']['alt'] ); ?>">
<?php endif; ?>
          
              </div>
            </div>
          </div>
        </div>
      </section>