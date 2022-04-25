// Add your custom JS here.

jQuery(function() {
  jQuery("body").addClass("jquery-loaded");
  jQuery('.slider-centered-v1').slick({
    centerMode: true,
    centerPadding: '80px',
    slidesToShow: 1,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });
  // Quick & dirty toggle to demonstrate modal toggle behavior
  jQuery('.modal-open').on('click', function(e) {
    e.preventDefault();
    var id = jQuery(this).data("modal-target")
    jQuery(id).toggleClass('is-visible');
  });
  jQuery('.modal-toggle').on('click', function(e) {
    e.preventDefault();
    jQuery(this).closest('.modal').toggleClass('is-visible');
  });
});