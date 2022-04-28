<?php
/**
 * Template Name: Hlavní stránka
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>

<div class="wrapper" id="full-width-page-wrapper">

  <section class="hero-section" id="o-nas">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6 order-2 order-lg-1 mt-7 mt-lg-0">
          <div class="d-flex flex-column justify-content-center h-100 text-center text-lg-start">
            <p class="m-0 highlighted-green">
              <span>
                <?php the_field('hero_prefix'); ?>
              </span>
            </p>
            <h1>
              <?php the_field('hero_heading'); ?>
            </h1>
            <p class="m-0">
              <a href="<?php the_field('hero_btn_link'); ?>" class="btn btn-primary"><?php the_field('hero_btn_text'); ?></a>
            </p>
          </div>
      </div>
      <div class="col-12 col-lg-6 order-1 order-lg-2">
        <div class="play-video-overlay">
          <?php if ( get_field( 'hero_play_btn_exist' ) ): ?>

            <div class="play-button-wrapper">
              <i class="play-button modal-open" data-modal-target="#youtube-arsov"></i>
            </div>

          <?php endif; // end of if field_name logic ?>
          <img src="<?php the_field('hero_image'); ?>" alt="Ukázková práce - případová studie" />
        </div>
      </div>
    </div>
  </section>
  

  <section class="case-studies bg-grey-half" id="reference">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
          <p class="m-0 text-center highlighted-green">
            <span class="bg-none">
              <?php the_field('hp_case_study_prefix'); ?>
            </span>
          </p>
          <h2 class="text-center">
            <?php the_field('hp_case_study_heading'); ?>
          </h2>
          <div class="case-studies-wrapper slider-centered-v1">
            <?php
            $args = array(
                'post_type' => 'case-studies',
                'posts_per_page' => 5
            );
            $the_query = new WP_Query( $args ); ?>

            <?php if ( $the_query->have_posts() ) : ?>
              <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="case-study-detail">
                  <div class="case-study-image-overlay" style="background-image: url(<?php the_field('website_image'); ?>)">
                    <div class="inner-content">
                      <h2><?php the_title(); ?></h2>
                      <p class="mb-0"><?php the_field('main_heading'); ?></p>
                      <p class="m-0">
                        <a href="<?php echo get_the_permalink(get_the_ID()); ?>" class="btn btn-outline">Ukázat případovou studii</a>
                      </p>   
                    </div>
                  </div>
                </div>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="services" id="sluzby">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <p class="m-0 text-center highlighted-green">
            <span class="bg-none">
              <?php the_field('hp_services_prefix'); ?>
            </span>
          </p>
          <h2 class="text-center">
            <?php the_field('hp_services_heading'); ?>
          </h2>
          <div class="row services-wrapper">
            <div class="col-12 col-md-6 col-lg-4">
              <div class="service-detail text-center">
                <i class="<?php the_field('hp_services_first_box_icon'); ?>"></i>
                <h3><?php the_field('hp_services_first_box_heading'); ?></h3>
                <p><?php the_field('hp_services_first_box_content'); ?></p>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="service-detail text-center">
                <i class="<?php the_field('hp_services_second_box_icon'); ?>"></i>
                <h3><?php the_field('hp_services_second_box_heading'); ?></h3>
                <p><?php the_field('hp_services_second_box_content'); ?></p>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="service-detail text-center">
                <i class="<?php the_field('hp_services_third_box_icon'); ?>"></i>
                <h3><?php the_field('hp_services_third_box_heading'); ?></h3>
                <p><?php the_field('hp_services_third_box_content'); ?></p>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="service-detail text-center">
                <i class="<?php the_field('hp_services_fourth_box_icon'); ?>"></i>
                <h3><?php the_field('hp_services_fourth_box_heading'); ?></h3>
                <p><?php the_field('hp_services_fourth_box_content'); ?></p>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="service-detail text-center">
                <i class="<?php the_field('hp_services_fifth_box_icon'); ?>"></i>
                <h3><?php the_field('hp_services_fifth_box_heading'); ?></h3>
                <p><?php the_field('hp_services_fifth_box_content'); ?></p>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="service-detail text-center">
                <i class="<?php the_field('hp_services_sixth_box_icon'); ?>"></i>
                <h3><?php the_field('hp_services_sixth_box_heading'); ?></h3>
                <p><?php the_field('hp_services_sixth_box_content'); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="brands bg-grey">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <p class="m-0 text-center highlighted-green">
            <span class="bg-none">
              <?php the_field('hp_brands_prefix'); ?>
            </span>
          </p>
          <h2 class="text-center">
          <?php the_field('hp_brands_heading'); ?> <span class="text-higlighted"><?php the_field('hp_brands_higlighted'); ?></span>
          </h2>
          <ul class="brands-list">
            <?php if ( get_field( 'hp_brands_first' ) ): ?>
              <li><img src="<?php the_field('hp_brands_first'); ?>" /></li>
            <?php endif; ?>

            <?php if ( get_field( 'hp_brands_second' ) ): ?>
              <li><img src="<?php the_field('hp_brands_second'); ?>" /></li>
            <?php endif; ?>

            <?php if ( get_field( 'hp_brands_third' ) ): ?>
              <li><img src="<?php the_field('hp_brands_third'); ?>" /></li>
            <?php endif; ?>

            <?php if ( get_field( 'hp_brands_fourth' ) ): ?>
              <li><img src="<?php the_field('hp_brands_fourth'); ?>" /></li>
            <?php endif; ?>

            <?php if ( get_field( 'hp_brands_fifth' ) ): ?>
              <li><img src="<?php the_field('hp_brands_fifth'); ?>" /></li>
            <?php endif; ?>

            <?php if ( get_field( 'hp_brands_sixth' ) ): ?>
              <li><img src="<?php the_field('hp_brands_sixth'); ?>" /></li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part( 'global-templates/promo-banner' ); ?>

  <div class="modal theme-v2" id="youtube-arsov">
    <div class="modal-overlay modal-toggle"></div>
    <div class="modal-wrapper modal-transition">
      <div class="modal-header">
        <button class="modal-close modal-toggle">
        </button>
        <h2 class="modal-heading"></h2>
      </div>
      
      <div class="modal-body">
        <div class="modal-content">
          <iframe width="100%" height="385" src="<?php the_field('hero_youtube_link'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
