jQuery(document).ready(function($) {
  $('.scroll-down').click(function(){
      $.fn.fullpage.moveSectionDown();
  });


if($(window).width() > 1023){
  if ( $( ".fullSection" ).length ) {
    $(function () {
        $('#fullpage').fullpage({
          menu: '#menu',
          lockAnchors: true,
          anchors:['Start', 'Who-we-are', 'Our-salons', 'Hair-Solutions','Be-with-us','Raphael-method','Before-After','Clients','Press','Call-now','Contact-us'],
          navigation: true,
          navigationPosition: 'left',
          navigationTooltips: ['Start', 'Who we are', 'Our salons', 'Hair Solutions','Be with us','Raphael method','Before / After','Clients','Press','Call now','Contact us'],
          showActiveTooltip: true,
          slidesNavigation: true,
          slidesNavPosition: 'left',

          //Скроллинг
          css3: true,
          scrollingSpeed: 400,
          autoScrolling: true,
          fitToSection: true,
          fitToSectionDelay: 1000,
          scrollBar: true,
          easing: 'easeInOutCubic',
          easingcss3: 'ease',
          loopHorizontal: true,

          //Доступ
          keyboardScrolling: true,
          animateAnchor: true,
          recordHistory: true,

          //Дизайн
          controlArrows: true,
          verticalCentered: true,
          paddingTop: '3em',
          paddingBottom: '10px',
          fixedElements: '#header, .footer',
          responsiveWidth: 0,
          responsiveHeight: 0,
          responsiveSlides: false,
          parallax: false,
          parallaxOptions: {type: 'reveal', percentage: 62, property: 'translate'},
          cards: false,
          cardsOptions: {perspective: 100, fadeContent: true, fadeBackground: true},

          //Настроить селекторы
          sectionSelector: '.fullSection',
          slideSelector: '.slide',

          lazyLoading: true,
          afterRender     : function(){
        	 	new WOW().init();
        	 },
          });
      });
    }
    if ( $( ".fullSection-other" ).length ) {
      $(function () {
          $('#fullpage-other').fullpage({
            navigation: false,
            scrollBar: true,
            //Скроллинг
            css3: true,
            scrollingSpeed: 400,
            autoScrolling: true,
            fitToSection: true,
            fitToSectionDelay: 1000,
            easing: 'easeInOutCubic',
            easingcss3: 'ease',
            loopHorizontal: true,

            //Доступ
            keyboardScrolling: true,
            recordHistory: true,

            //Дизайн
            controlArrows: true,
            verticalCentered: true,
            paddingTop: '3em',
            paddingBottom: '10px',
            //Настроить селекторы
            sectionSelector: '.fullSection-other',

            lazyLoading: true,
            afterRender     : function(){
          	 	new WOW().init();
          	 },
            });
        });
      }
  function resizeMasonryItem(item){
    /* Get the grid object, its row-gap, and the size of its implicit rows */
    var grid = document.getElementsByClassName('masonry-container')[0];
    if( grid ) {
      var rowGap = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-row-gap')),
          rowHeight = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-auto-rows')),
          gridImagesAsContent = item.querySelector('.masonry-item img');
      var rowSpan = Math.ceil((item.querySelector('.masonry-item img').getBoundingClientRect().height+rowGap)/(rowHeight+rowGap));
      item.style.gridRowEnd = 'span '+rowSpan;
      if(gridImagesAsContent) {
        item.querySelector('.masonry-item img').style.height = item.getBoundingClientRect().height + "px";
      }
    }
  }

  function resizeAllMasonryItems(){
    var allItems = document.querySelectorAll('.masonry-item');
    if( allItems ) {
      for(var i=0;i>allItems.length;i++){
        resizeMasonryItem(allItems[i]);
      }
    }
  }

  function waitForImages() {
    var allItems = document.querySelectorAll('.masonry-item');
    if( allItems ) {
      for(var i=0;i<allItems.length;i++){
        imagesLoaded( allItems[i], function(instance) {
          var item = instance.elements[0];
          resizeMasonryItem(item);
          console.log("Waiting for Images");
        } );
      }
    }
  }
  var masonryEvents = ['load', 'resize'];
  masonryEvents.forEach( function(event) {
    window.addEventListener(event, resizeAllMasonryItems);
  } );
  waitForImages();

}
document.addEventListener( 'wheel', this.onMouseWheel, {passive: false} );
$('.slider-image-container').slick({
  dots: true,
  infinite: true,
  speed: 500,
  autoplay: true,
  autoplaySpeed: 2000,
  slidesToShow: 2,
  slidesToScroll: 2,
  arrows: true,
  draggable:false,
  prevArrow: $('.Before-After .section-arrows .section-arrow-item.prev'),
  nextArrow: $('.Before-After .section-arrows .section-arrow-item.next'),
  responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
$('.slider-testimonials-container').slick({
  dots: true,
  infinite: true,
  speed: 500,
  autoplay: true,
  autoplaySpeed: 2000,
  slidesToShow: 3,
  slidesToScroll: 1,
  arrows: true,
  draggable:false,
  prevArrow: $('.Clients .section-arrows .section-arrow-item.prev'),
  nextArrow: $('.Clients .section-arrows .section-arrow-item.next'),
  responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
$('.branches-container').slick({
  dots: false,
  infinite: true,
  speed: 500,
  autoplay: false,
  autoplaySpeed: 2000,
  slidesToShow: 3,
  slidesToScroll: 1,
  arrows: true,
  draggable:false,
  prevArrow: $('.Press .section-arrows .section-arrow-item.prev'),
  nextArrow: $('.Press .section-arrows .section-arrow-item.next'),
  responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

$('.hair-replace .slider-replace-container').slick({
  dots: false,
  infinite: true,
  speed: 500,
  autoplay: false,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  draggable: true,
  variableWidth: true,
  prevArrow: $('.hair-replace .image-block .section-arrows .section-arrow-item.prev'),
  nextArrow: $('.hair-replace .section-arrows .section-arrow-item.next'),
});


$('.mobile-more-details').click(function(e) {
  $(this).parent('.item-text-content').toggleClass('show');
});

$('.portfolio-container .tab-item').click(function(e) {
  $('.portfolio-container .tab-item').removeClass('active');
  $(this).addClass('active');
});
$('section.Contact-us .map-btn').click(function(e) {
  $('.map-content-container, .fp-show-active').toggleClass('slide');
  $('.site-header').toggleClass('background');
});
$('.branches .branch-map-address img').click(function(e) {
  $('.branches .branch-map-container').toggleClass('slide');
});
$('.mobile-bars').click(function(e) {
  $('.mobile-side-menu, .mobile-cross').addClass('active');
  $(' .mobile-bars').removeClass('active');
});
$('.mobile-cross').click(function(e) {
  $('.mobile-side-menu, .mobile-cross').removeClass('active');
  $('.mobile-bars').addClass('active');
});

$('.site-footer .main-container img').click(function () {
  $("html, body").animate({
    scrollTop: 0
  }, 100);
  return false;
});

});
