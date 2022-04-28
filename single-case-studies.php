<?php
get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>

<div class="wrapper case-study-detail" id="full-width-page-wrapper">

  <section class="bg-grey-half">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h1>
            <?php the_field('main_heading'); ?>
            <span class="text-higlighted"><?php the_field('heading_higlighted_part'); ?></span>
          </h1>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
          <div class="website-image">
            <img src="<?php the_field('website_image'); ?>" alt="Náhled na stránku" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="case-study-content">
    <div class="container">
      <div class="row mb-4">
        <p class="m-0 highlighted-green text-center">
          <span class="bg-none">
            <?php the_field('boxes_prefix'); ?>
          </span>
        </p>
        <h2 class="text-center"><?php the_field('boxes_heading'); ?> <span class="text-higlighted"><?php the_field('boxes_heading_highlighted'); ?></span></h2>
      </div>
      <div class="row">
        <div class="col-12 col-lg-6 mt-4">
          <div class="case-study-box promo">
            <span class="percentage"><?php the_field('fourth_box_heading'); ?></span>
            <span class="suffix"><?php the_field('fourth_box_content'); ?></span>
          </div>
        </div>
        <div class="col-12 col-lg-6 mt-4">
          <div class="case-study-box">
            <h2>
              <?php the_field('first_box_heading'); ?>
            </h2>
            <p>
              <?php the_field('first_box_content'); ?>
            </p>
          </div>
        </div>
        <div class="col-12 col-lg-6 mt-4">
          <div class="case-study-box">
            <h2>
              <?php the_field('second_box_heading'); ?>
            </h2>
            <p>
              <?php the_field('second_box_content'); ?>
            </p>
          </div>
        </div>
        <div class="col-12 col-lg-6 mt-4">
          <div class="case-study-box">
            <h2>
              <?php the_field('third_box_heading'); ?>
            </h2>
            <p>
              <?php the_field('third_box_content'); ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part( 'global-templates/promo-banner' ); ?>

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
