<?php $logo = get_theme_mod('custom_logo'); ?>

<footer class="footer">

  <div class="footer__wrapper">
    <div class="footer__links-wrapper">
      <a href="./home">
        <img loading="lazy" class="footer__logo"
          src="<?php echo get_template_directory_uri() ?>/assets/images/logo.webp" alt="footer logo" />
      </a>
    </div>
    <div class="footer__links-wrapper">
      <h3 class="footer__heading">Contact</h3>

      <div class="footer__link-wrapper">

        <img class="footer__link-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/Location-on.webp"
          alt="map pin" />
        <p class="footer__link">Wirral Ch62</p>
      </div>
      <div class="footer__link-wrapper">
        <img class="footer__link-icon" src="<?php echo get_template_directory_uri() ?>/assets/images/Local-phone.webp"
          alt="phone" />
        <a class="footer__link" href="tel:078645723">
          078645723
        </a>
      </div>
      <div class="footer__link-wrapper">
        <img class="footer__link-icon" src="<?php echo get_template_directory_uri() ?>/assets/images/Email.webp"
          alt="mail" />
        <a class="footer__link" href="mailto:hi@wirrallandscaping.com">
          hi@wirrallandscaping.com
        </a>
      </div>
    </div>
    <div class="footer__links-wrapper">
      <h3 class="footer__heading">Socials</h3>
      <div class="footer__link-wrapper">
        <img class="footer__link-icon" src="<?php echo get_template_directory_uri() ?>/assets/images/Facebook.webp"
          alt="facebook" />
        <a class="footer__link" href="www.instagram">
          wirrallandscaping facebook
        </a>
      </div>
      <div class="footer__link-wrapper">
        <img class="footer__link-icon" src="<?php echo get_template_directory_uri() ?>/assets/images/TwitterX.webp"
          alt="x" />
        <a class="footer__link" href="www.x.com">
          wirrallandscaping-twitter
        </a>
      </div>
    </div>
    <div class="footer__links-wrapper">
      <h3 class="footer__heading">We Are Open</h3>
      <div class="footer__link-wrapper">
        <p class="footer__link">Monday - Friday: 8am - 4pm</p>
      </div>
      <div class="footer__link-wrapper">

        <p class="footer__link">Saturday: 8am - 12pm</p>
      </div>
    </div>

  </div>
</footer>


<?php wp_footer() ?>