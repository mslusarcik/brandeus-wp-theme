<?php
/**
 * Promo banner
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

	?>

  <section class="promo-banner">  
    <div class="container">
      <div class="row">
        <div class="col-12 promo-content" style="background-image: url(https://brandeus.cz/wp-content/uploads/2022/04/promo-banner-bg.png);">
          <h2>
            <?php the_field('promo_banner_heading'); ?>
          </h2>
          <p>
            <?php the_field('promo_banner_content'); ?>
          </p>
          <p class="m-0">
            <a href="<?php the_field('promo_banner_btn_link'); ?>" class="btn btn-primary"><?php the_field('promo_banner_btn_text'); ?></a>
          </p>
        </div>
      </div>
    </div>
  </section>

	<?php
