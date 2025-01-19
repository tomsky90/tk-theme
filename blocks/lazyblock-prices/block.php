<section id="prices" class="prices">
  <h2 class="prices__heading"><?php echo esc_html($attributes['prices-heading']) ?></h2>
  <div class="prices__prices-wrapper">
    <h3 class="prices__subheading"><?php echo esc_html($attributes['prices-subheading']) ?></h3>
    <p class="prices__price-text"><span
        class="prices__span">£<?php echo esc_html($attributes['prices-hosting-price']) ?></span> - Design and
      development
    </p>
    <p class="prices__price-text"><span
        class="prices__span">£<?php echo esc_html($attributes['prices-design-price']) ?></span> -1 year Hosting + free
      domain</p>
    <p class="prices__price-text"><span
        class="prices__span">£<?php echo esc_html($attributes['prices-total-price']) ?></span> - Total Price</p>
    <p class="prices__text"></p>
    <a href="/contact" target="blank" class="cta-link">Contact Me</a>
  </div>
  <div class="prices__text-wrapper">
    <ul class="prices__text-list">Includes</ul>
    <?php foreach ($attributes['prices-includes'] as $benefit): ?>

      <li class="prices__list-item">
        <p class="prices__list-item-text"><span><?php echo esc_html($benefit['prices-includes-benefit']) ?></span></p>
      </li>


    <?php endforeach; ?>
    </ul>
  </div>
</section>