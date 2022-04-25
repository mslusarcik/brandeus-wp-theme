<?php
/**
 * Template Name: Kontaktní formulář
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

  <section class="contact-form bg-grey-half">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h1>
            <?php the_field('main_title'); ?>
            <?php if(get_field('title_higlighted_part')) : ?>
            <br />
            <span class="text-higlighted"><?php the_field('title_higlighted_part'); ?></span>
            <?php endif; ?>
          </h1>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
          <div class="d-flex flex-column justify-content-center h-100 text-center form-wrapper">
            <p class="m-0 highlighted-green">
              <span class="bg-none">
              <?php the_field('form_section_prefix'); ?>
              </span>
            </p>
            <h2>
              <?php the_field('form_section_heading'); ?>
            </h2>
            <?php echo do_shortcode(get_field('form_shortcode')); ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-info">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <p class="m-0 highlighted-green">
            <span class="bg-none">
            <?php the_field('form_contact_prefix'); ?>
            </span>
          </p>
          <h2><?php the_field('form_contact_heading'); ?></h2>
        </div>
      </div>
      <div class="row justify-content-center mt-lg-5 mt-3">
        <div class="col-12 col-lg-5">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2560.251549852355!2d14.415239116279395!3d50.08157702175524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470b95b9b24fa60f%3A0xc13249b366253f87!2sBrandeus!5e0!3m2!1sen!2scz!4v1650742975045!5m2!1sen!2scz" width="100%" height="420" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-12 col-lg-3 align-self-center ps-lg-5">
          <div class="ml-0 ml-lg-4 mt-5 mt-lg-0 d-flex flex-column justify-content-center justify-content-lg-start contact-additional-info">
            <img src="https://brandeus.cz/wp-content/uploads/2022/04/logo-contact.png" class="mx-auto mx-lg-0" />
            <div class="text-center text-lg-start">
              <p>
                <?php the_field('form_contact_adress'); ?>
              </p>
              <p>
                <i class="fa-solid fa-phone me-1"></i> <?php the_field('form_contact_phone'); ?> <br />
                <i class="fa-solid fa-at me-1"></i> <?php the_field('form_contact_email'); ?>
              </p>
            </div>
            <h4 class="mb-0 text-center text-lg-start">Sledujte nás:</h4>
            <ul class="social-list mx-auto mx-lg-0">
              <li><a href="<?php the_field('form_contact_fb_link'); ?>"><i class="fa-brands fa-facebook-square"></i></a></li>
              <li><a href="<?php the_field('form_contact_ig_link'); ?>"><i class="fa-brands fa-instagram-square"></i></a></li>
              <li><a href="<?php the_field('form_contact_li_link'); ?>"><i class="fa-brands fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
