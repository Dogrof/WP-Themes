jQuery(document).ready(function ($) {
  // $(".imageSliderWrapper .imageSlider .slick-slide #main-frame").parent().parent().remove();

$('.celebrationPostsHomepage.mobile .posts ').slick({
  rtl: true,
  slidesToShow: 2,
  slidesToScroll: 2,
  rows: 2,
  nextArrow: `
  <a class="slick-next">
    <svg width="13" height="23" viewBox="0 0 13 23" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M1.72625 22.5C2.05478 22.5 2.36098 22.374 2.59732 22.1324L12.1448 12.3747C12.6184 11.8907 12.6184 11.1093 12.1448 10.6253L2.59732 0.867559C2.1178 0.37748 1.3347 0.37748 0.855178 0.867559C0.381607 1.35156 0.381607 2.13292 0.855178 2.61692L9.54685 11.5L0.855178 20.3831C0.381607 20.8671 0.381607 21.6484 0.855178 22.1324C1.09151 22.374 1.39772 22.5 1.72625 22.5Z" fill="#DFA29D" stroke="#DFA29D"/>
  </svg>

  </a>
  `,
  prevArrow: `
  <a class="slick-prev">
    <svg width="13" height="23" viewBox="0 0 13 23" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M12.1448 22.1324L11.7892 21.7844L12.1448 22.1324C11.9085 22.374 11.6023 22.5 11.2738 22.5C10.9452 22.5 10.639 22.374 10.4027 22.1324L10.7601 21.7828L10.4027 22.1324L0.855177 12.3747C0.381607 11.8907 0.381607 11.1093 0.855177 10.6253L10.4027 0.867559C10.8822 0.37748 11.6653 0.37748 12.1448 0.867559C12.6184 1.35156 12.6184 2.13292 12.1448 2.61692L3.45315 11.5L12.1448 20.3831C12.6184 20.8671 12.6184 21.6484 12.1448 22.1324Z" fill="#DFA29D" stroke="#DFA29D"/>
  </svg>

  </a>
  `,
});

$('.carouselContent.posts ').slick({
  rtl: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  dots: true,
  // cssEase: 'linear',
  prevArrow: `<button type="button" class="slick-prev"><img src="${location.origin}/wp-content/themes/jacob/assets/images/icons/sliderArrow.svg" alt="" /></button>`,
  nextArrow: `<button type="button" class="slick-next"><img src="${location.origin}/wp-content/themes/jacob/assets/images/icons/sliderArrow.svg" alt="" /></button>`,
  responsive: [
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
      }
    }
  ]
});

// homepage range slider
 $( "#slider-range" ).slider({
   isRTL: true,
   range: true,
   min: 0,
   max: 5000,
   values: [ 0, 5000 ],
   slide: function( event, ui ) {
     $( "#amount_right" ).val( "₪" + ui.values[ 0 ]);
     $( "#amount_left" ).val("₪" + ui.values[ 1 ] );
     $( ".priceAmounts" ).trigger('input');
   }
 });
 $( "#amount_right" ).val( "₪" + $( "#slider-range" ).slider( "values", 0 ));
 $( "#amount_left" ).val( "₪" + $( "#slider-range" ).slider( "values", 1 ) );


 $(document).on('scroll', function (e) {
   if($('.wp-facebook-url').length > 0){
     var fromTop = $('.wp-facebook-url').offset().top;
   }
  fromTop -= 500;
 	var currentPos = $(window).scrollTop();
 	if(currentPos > fromTop){
    $('.wp-facebook-url').click();
 }
  });


 // homepage range slider second tab
 $( ".recomendedFilter .recContent.second #slider-range" ).slider({
   isRTL: true,
   range: true,
   min: 0,
   max: 5000,
   values: [ 0, 5000 ],
   slide: function( event, ui ) {
     $( ".recomendedFilter .recContent.second #amount_right_alco" ).val( "₪" + ui.values[ 0 ]);
     $( ".recomendedFilter .recContent.second #amount_left_alco" ).val("₪" + ui.values[ 1 ] );
   }
 });
 $( ".recomendedFilter .recContent.second #amount_right_alco" ).val( "₪" + $( ".recomendedFilter .recContent.second #slider-range" ).slider( "values", 0 ));
 $( ".recomendedFilter .recContent.second #amount_left_alco" ).val( "₪" + $( ".recomendedFilter .recContent.second #slider-range" ).slider( "values", 1 ) );


 $('.mainNavigationContainer .menu-item-has-children > a, .fullscreenMenu .menu-item-has-children > a').one('click', function (e) {
   e.preventDefault();
   $(this).parent().toggleClass('active');
   $(this).parent().find('.sub-menu').toggleClass('activeMenu');
   $('.mainNavigationContainer .activeLine').toggleClass('hide');

   $(this).one(function (e) {
     location.href = $(this).attr('href');
   });
 });


});
jQuery('.video-thumbnail').click(function () {
var clicked_img = jQuery(this).attr('data-value');
jQuery(".currentImage .slick-slide.slick-current").html('<iframe width="100%" height="560" src="https://www.youtube.com/embed/'+clicked_img+'?rel=0&amp;showinfo=0?ecver=1" frameborder="0" allowfullscreen></iframe>');
});
