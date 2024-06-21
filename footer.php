<?php $logo = get_theme_mod('custom_logo'); ?>

<footer class="footer">
      <div class="footer__wrapper">
        <div class="footer__links-wrapper">
          <h3 class="footer__heading">Contact</h3>
          <div class="footer__link-wrapper">
            
            <img class="footer__link-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/maps-pin-line-icon.webp" alt="map pin" />
            <p class="footer__link">Manchester M1 LZ</p>
          </div>
          <div class="footer__link-wrapper">
            <img class="footer__link-icon" src="<?php echo get_template_directory_uri()?>/assets/images/phone-line-icon.webp" alt="phone" />
            <a class="footer__link" href="tel:078645723">
              078645723
            </a>
          </div>
          <div class="footer__link-wrapper">
            <img class="footer__link-icon" src="<?php echo get_template_directory_uri()?>/assets/images/envelope-line-icon.webp" alt="mail" />
            <a class="footer__link" href="mailto:hi@labella.com">
              hi@labella.com
            </a>
          </div>
        </div>
        <div class="footer__links-wrapper">
          <h3 class="footer__heading">Socials</h3>
          <div class="footer__link-wrapper">
            <img
              class="footer__link-icon"
              src="<?php echo get_template_directory_uri()?>/assets/images/black-instagram-icon.webp"
              alt="instagram"
            />
            <a class="footer__link" href="www.instagram">
              labella-instagram
            </a>
          </div>
          <div class="footer__link-wrapper">
            <img class="footer__link-icon" src="<?php echo get_template_directory_uri()?>/assets/images/x-social-media-black-icon.webp" alt="x" />
            <a class="footer__link" href="www.x.com">
              labella-twitter
            </a>
          </div>
        </div>
        <div class="footer__links-wrapp">
          <h3 class="footer__heading">We Are Open</h3>
          <div class="footer__link-wrapper">
            <p class="footer__link">Monday - Friday: 8am - 4pm</p>
          </div>
          <div class="footer__link-wrapper">
            
            <p class="footer__link">Saturday: 8am - 12pm</p>
          </div>
        </div>
         <div class="footer__links-wrapper">
          <a href="./home">
            <img class="footer__logo" src="<?php echo get_template_directory_uri()?>/assets/images/logo.webp" alt="footer logo" />
          </a>
        </div>
      </div>
    </footer>

    <?php wp_footer()?>