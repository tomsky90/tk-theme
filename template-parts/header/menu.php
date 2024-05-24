
<header class="top-navigation">
    <nav class="nav">
      <div class="nav__container">
        <div class="nav__logo-wrapper">
          
        </div>
        <div class="nav__desktop-nav">
         <?php wp_nav_menu(array('theme_location' => 'header-menu', 'container_class' => 'top-navigation__menu')); ?>
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

