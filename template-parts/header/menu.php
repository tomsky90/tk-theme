
<?php $logo = get_theme_mod('custom_logo'); ?>



<header class="top-navigation">
    <nav class="nav">
      <div class="nav__container">
        <div class="nav__logo-wrapper">
          <?php
            if (function_exists('the_custom_logo') && has_custom_logo()) {
                the_custom_logo();
            } else {
                echo '<h1>' . get_bloginfo('name') . '</h1>';
            }
            ?>
        </div>
        <div class="nav__desktop-nav">
         <?php wp_nav_menu(array('theme_location' => 'header-menu', 'menu_class' => 'nav__menu')); ?>
        </div>
        <button class="nav__mobile-show-btn">
         
        </button>
        <div
          class="nav__mobile-nav"
        >
          <button  class="nav__mobile-close-btn">
           
          </button>
          <?php wp_nav_menu(array('theme_location' => 'header-menu', 'container_class' => 'top-navigation__menu')); ?>
        </div>
      </div>
    </nav>
</header>

