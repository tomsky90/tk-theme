<section id="portfolio" class="portfolio">
  <h2 class="portfolio__heading"><?php echo esc_html($attributes['work-example-heading']) ?></h2>
  <div class="portfolio__section-wrapper">
    <?php foreach ($attributes['work-example-examples'] as $example): ?>
      <div class="portfolio__example-wrapper">
        <img class="portfolio__img" src="<?php echo esc_url($example['work-example-img']['url']) ?>" alt="" />
        <a class="cta-link portfoliio__link" href="<?php echo esc_url($example['work-example-link']) ?>">Live Site</a>
      </div>
    <?php endforeach; ?>
  </div>
</section>