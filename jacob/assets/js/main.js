jQuery(document).ready(function ($) {


  	"use strict";
  	if (jQuery('html').offset().top < 100) {

  		jQuery('#to-top').hide();
  	};

  	jQuery(window).scroll(function(){

  		if (jQuery(this).scrollTop() > 100 ) {

  			jQuery('#to-top').fadeIn();
  		}else{

  			jQuery('#to-top').fadeOut();
  		};
  	});

  	jQuery('.scroll-button').on("click",function(){

  		jQuery('body,html').animate({

  			scrollTop: '0px'
  		},1000);

  		return false;
  	});


  // wow animations
  new WOW().init();

  // niceSelect init
  $('.perPageSelector, .woocommerce .woocommerce-ordering select').niceSelect();

  $('.site-header .mainHeader .userInfoBlock .userSection .userOptions .list .current').click(function () {
    $(this).closest('.list').toggleClass('active');
  });

  $('.site-header .mobileHeader .mobileHeaderTopLine .row > .burgerButton').click(function (e) {
    $('body').toggleClass('mobileMenuActive');
    $('.mobileHeader').toggleClass('activeMenu');
    if ($('.mobileHeader').hasClass('activeMenu')) {
      let scrollMenuWidth = 0;
      $('.site-header .mobileHeader .fullscreenMenu .slideLine ul a').each(function (i, el) {
        scrollMenuWidth += $(el).outerWidth();
      });
      $('.site-header .mobileHeader.activeMenu .fullscreenMenu .slideLine ul').css('width', scrollMenuWidth+50);
    }
  });

  $('.site-header .mobileHeader .searchAndProfile .searchIcon').click(function (e) {
    $('.site-header .mobileHeaderTopLine .searchBar').toggleClass('active');
  });

var productName = $('.productContent .product_title').text();
console.log(productName);
$('.formWrapepr .productName input').val(productName);


  // homepage

  // homepage main slider
  $('.homepageTemplate .firstScreenSlider .slick_slider').slick({
    rtl: true,
    dots: true,
    infinite: true,
    speed: 1000,
    autoplay: true,
    autoplaySpeed: 3000,
    fade: true,
    // cssEase: 'linear',
    prevArrow: `<button type="button" class="slick-prev"><img src="${location.origin}/wp-content/themes/jacob/assets/images/icons/sliderArrow.svg" alt="" /></button>`,
    nextArrow: `<button type="button" class="slick-next"><img src="${location.origin}/wp-content/themes/jacob/assets/images/icons/sliderArrow.svg" alt="" /></button>`,
    responsive: [
      {
        breakpoint: 480,
        settings: {
          dots: false,
        }
      }
    ]
  });

  $('.prodCarousel .carouselContent').slick({
    rtl: true,
    dots: false,
    infinite: true,
    speed: 500,
    slidesToShow: 5,
    cssEase: 'linear',
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

  // homepage tabulator

  $('.homepageTemplate .celebrationShopSection .shopContent .topBar .tabs a').click(function (e) {
    e.preventDefault();
    let tabName = $(this).attr('href');
    let toShowTab = $(tabName);
    $(this).closest('.tabs').find('a').removeClass('active');
    $(this).addClass('active');
    $('.homepageTemplate .celebrationShopSection .shopContent .line').removeAttr('class').addClass('line').addClass(tabName.slice(1));
    $(toShowTab).closest('.tabContentContainer').find('.active').removeClass('active');
    $(toShowTab).addClass('active');
  });

  // homepage category after tabulator
  $('.current-cat-parent').addClass('opened');
  $('.sidebar .product-categories > .cat-parent > a').click(function (e) {
    e.preventDefault();
    $(this).parent().toggleClass('opened');
  });

  // homepage tabulator mobile buttons
  $('.homepageTemplate .celebrationShopSection .shopContent .arrowRigth').click(function () {
    $('.homepageTemplate .celebrationShopSection .shopContent .topBar .tabs').find('.active').parent().next().find('a').trigger('click');
  });
  $('.homepageTemplate .celebrationShopSection .shopContent .arrowLeft').click(function () {
    $('.homepageTemplate .celebrationShopSection .shopContent .topBar .tabs').find('.active').parent().prev().find('a').trigger('click');
  });


  // SINGLE PRODUCT
  if ($('.woocommerce div.product > .container')) {
    if ($('.woocommerce div.product .buyAndWishlist .addToWishlist .yith-wcwl-wishlistexistsbrowse').hasClass('show')) {
      $('.woocommerce div.product .buyAndWishlist .addToWishlist').addClass('added');
    }

    $('.woocommerce div.product .buyAndWishlist .addToWishlist').click(function (e) {
      location.href = $('.woocommerce div.product .buyAndWishlist .addToWishlist .show a').attr('href');
    });

    // quantity section
    let inputmin = $('.woocommerce div.product .productInfoPart .qantitySection input[type="number"]').attr('min');
    let inputmax = $('.woocommerce div.product .productInfoPart .qantitySection input[type="number"]').attr('max');
    inputmin = inputmin ? inputmin : 0;
    inputmax = inputmax ? inputmax : 100;

    $('.woocommerce div.product .productInfoPart .qantitySection .plus').click(function (e) {
      let now = $('.woocommerce div.product .productInfoPart .qantitySection .label').text();
      if (now >= inputmin && now < inputmax) {
        $('.woocommerce div.product .productInfoPart .qantitySection input[type="number"]').val(++now);
        $('.woocommerce div.product .productInfoPart .qantitySection form').trigger('change');
      };
    });
    $('.woocommerce div.product .productInfoPart .qantitySection .minus').click(function (e) {
      let now = $('.woocommerce div.product .productInfoPart .qantitySection .label').text();
      if (now > inputmin && now <= inputmax) {
        $('.woocommerce div.product .productInfoPart .qantitySection input[type="number"]').val(--now);
        $('.woocommerce div.product .productInfoPart .qantitySection form').trigger('change');
      };
    });

    $('.woocommerce div.product .productInfoPart .qantitySection form').change(function (e) {
      $('.woocommerce div.product .productInfoPart .qantitySection .label').text($('.woocommerce div.product .productInfoPart .qantitySection input[type="number"]').val());
    });
    // gallery
    if ($('.woocommerce div.product .galleryPart .imageSliderWrapper .imageSlider img, .woocommerce div.product .galleryPart .imageSliderWrapper .imageSliderMobile img').length > 4) {
      $('.productContent .imageSlider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,

        asNavFor: '.productContent .currentImage',
        focusOnSelect: true,
        rtl: true,
        centerMode: true,
        nextArrow: `
        <a class="slick-next">
          <i class="fas fa-angle-left"></i>
        </a>
        `,
        prevArrow: `
        <a class="slick-prev">
          <i class="fas fa-angle-right"></i>
        </a>
        `,
        responsive: [
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            }
          }
        ]
      });
    }
    else {
      $('.productContent .imageSlider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.productContent .currentImage',
       focusOnSelect: true,
        rtl: true,
        nextArrow: `
        <a class="slick-next">
          <i class="fas fa-angle-left"></i>
        </a>
        `,
        prevArrow: `
        <a class="slick-prev">
          <i class="fas fa-angle-right"></i>
        </a>
        `,
        responsive: [
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            }
          }
        ]
      });

    }


    $('.productContent .currentImage').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      focusOnSelect: true,
      asNavFor: '.productContent .imageSlider',
      rtl: true,
      fade: true,
      arrows: false,
    });
    $('.woocommerce div.product .productInfoPart .buyAndWishlist .addToCart').click(function (e) {
      e.preventDefault();
      $('.woocommerce div.product .productInfoPart .qantitySection .button').trigger('click');
    });
  }

  // mobile slider product list
  $('.featuredProductsMobileContainer .productsList ').slick({
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
    responsive: [
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          rows: 1
        }
      }
    ]

  });

  // featured products section (product single page)
  if ($('.featuredProductsSection').length > 0) {
    let containerWidth = 0;
    let padding = 100;
    jQuery('.featuredProductsSection .featuredProductsContainer ul li').each(function (i, el) {
      containerWidth += $(el).innerWidth();
      containerWidth += padding;
    });
    $('.featuredProductsSection .featuredProductsContainer').css('width', containerWidth);
    $('.featuredProductsSection .featuredProductsContainer a.woocommerce-LoopProduct-link').click(function (e) { e.preventDefault(); });
    $('.featuredProductsSection .featuredProductsContainer a.woocommerce-LoopProduct-link h2').click(function (e) {
      location.href = $(this).parent().attr('href');
    });
    $('.featuredProductsSection .featuredProductsWrapper').css('padding-right', $('.container').offset().left);
  }


  // header popups
  $('.site-header .mainHeader .userInfoBlock .register').click(function (e) {
    e.preventDefault();
    $('#registerPopup').fadeIn();
  });
  $('.site-header .mainHeader .userInfoBlock .login').click(function (e) {
    e.preventDefault();
    $('#loginPopup').fadeIn();
  });
  $('.overlay').click(function (e) {
    if (e.target != this) return;
    $('#registerPopup').fadeOut();
    $('#loginPopup').fadeOut();
  });

  // header cart counter
  $( document.body ).on( 'added_to_cart', function(){
    let data = {
      action: 'get_cart_count'
    };
    jQuery.post( myajax, data, function(response) {
			$('.site-header .mainHeader .userInfoBlock .userSection .cart .cartCount').text(response);
		});

  });

  // header animations
  let activeListOffset = '100%';
  let activeListWidth = 0;
  if ($('.site-header .main-navigation ul .current_page_item a').length > 0) {
    activeListOffset  = $('.site-header .main-navigation ul .current_page_item a').position().left;
    activeListWidth   = $('.site-header .main-navigation ul .current_page_item a').outerWidth();
  }
  $('.mainNavigationContainer .activeLine').animate({
    left: activeListOffset,
    width: activeListWidth,
  }, 100);
  $('.site-header .main-navigation ul li').hover(function hover(e) {
      let activeListOffsetNow  = $(this).position().left;
      let activeListWidthNow   = $(this).outerWidth();
      $('.mainNavigationContainer .activeLine').stop().animate({
        left: activeListOffsetNow,
        width: activeListWidthNow,
      }, 500);
    }
  );
  $('.site-header .main-navigation ul .sub-menu li').hover(function hover(e) {
      let activeListOffsetNow  = $(this).parent().parent().position().left;
      let activeListWidthNow   = $(this).parent().parent().outerWidth();
      $('.mainNavigationContainer .activeLine').stop().animate({
        left: activeListOffsetNow,
        width: activeListWidthNow,
      }, 500);
    }
  );
  $('.site-header .main-navigation ul').hover(null, function out(e) {
    $('.mainNavigationContainer .activeLine').stop().animate({
      left: activeListOffset,
      width: activeListWidth,
    }, 500);
  });
  // header animations end

  // header ajax search
  initSearch();
  function initSearch() {
    let timer, request;
    var data = {
			action: 'searchAjaxHeader',
			string: ''
		};

    $('.site-header .mainHeader .siteSearch form').on('input', function (e) {

      clearTimeout(timer);
        data.string = $('.site-header .mainHeader .siteSearch form input[type="text"]').val();

        if (data.string.length > 3) {
          timer = setTimeout(function () {
            $.get( myajax, data, function(response) {
              if (response != '') {
                $('.site-header .mainHeader .siteSearch form .searchResult').html($(response)).fadeIn();
                $('.site-header .mainHeader .siteSearch form .searchResult').find('a').each(function (i, el) {
                  if ($(el).text().length > 20) {
                    let text = $(el).text();
                    text = text.substring(0 , 20);
                    $(el).text(text + '...');
                  }
                });
              } else {
                $('.site-header .mainHeader .siteSearch form .searchResult').fadeOut();
              }
        		})
            .fail(function (e) {
              console.log('some error', e);
            });
          }, 500);
        } else {
          $('.site-header .mainHeader .siteSearch form .searchResult').fadeOut();
        }

    });
  }

  let queryString = $('.site-header .mainHeader .siteSearch form input[type="text"]').val();
  if (queryString.length>0) {
    markSearchQuery(queryString);
  }
  function markSearchQuery(text) {
    let keyWords = text.split(' ');
    console.log('keyWords', keyWords);
    keyWords.forEach(function (el) {
      $(".woocommerce ul.products, .woocommerce-page ul.products").mark(el);
    });
  }


  // user register n header ajax
  $('#usreReg').submit(function (e) {
    e.preventDefault();
    let newUserName = jQuery('#registerPopup.overlay .popupcontent input[name="Username"]').val();
    let newUserEmail = jQuery('#registerPopup.overlay .popupcontent input[name="user_email"]').val();
    let newUserPassword = jQuery('#registerPopup.overlay .popupcontent input[name="user_password"]').val();
    let newUserConfirmPassword = jQuery('#registerPopup.overlay .popupcontent input[name="user_password_conf"]').val();
    let newUserPhone = jQuery('#registerPopup.overlay .popupcontent input[name="user_tel"]').val();
    let validate = true;

    if (newUserName == '' || newUserEmail == '' || newUserPassword == '' || newUserPhone == '' || newUserConfirmPassword != newUserPassword) {
      validate = false;
    }
    if (validate) {
      jQuery.ajax({
        type:"POST",
        url: myajax.url,
        data: {
          action: "register_user_front_end",
          new_user_name : newUserName,
          new_user_email : newUserEmail,
          new_user_password : newUserPassword,
          // new_user_phone: newUserPhone,
        },
        success: function(results){
          console.log(results);
          let res = JSON.parse(results);
          $('.overlay .popupcontent .messagesBlock').empty().text(res.message).show();
          if (res.redirect) {
            setTimeout(function () {
              location.href = res.redirect;
            }, 1000);
          }
        },
        error: function(results) {
        }
      });
    } else {
      $('.overlay .popupcontent .messagesBlock').empty().text('Some error').show();
    }

  });
});
jQuery(document).ready(function ($) {
  $('.title').click(function(event) {
   $(this).parent().toggleClass('active');
  });
  
  // user login n header ajax
  $('#usreLogin').submit(function (e) {
    e.preventDefault();
    let userName = jQuery('#loginPopup.overlay .popupcontent input[name="Username"]').val();
    let userPassword = jQuery('#loginPopup.overlay .popupcontent input[name="user_password"]').val();
    let validate = true;

    if (userName == '' || userPassword == '') {
      validate = false;
    }
    if (validate) {
      jQuery.ajax({
        type:"POST",
        url: myajax.url,
        data: {
          action: "login_user_front_end",
          user_name : userName,
          user_password : userPassword,
          user_remember: true,
        },
        success: function(results){
          console.log(results);
          // let res = JSON.parse(results);
          let res = results;
          $('.overlay .popupcontent .messagesBlock').empty().html(res).show();
          if (res = 'success') {
            location.href = location.origin + '/my-account';
          }
        },
        error: function(results) {
        }
      });
    } else {
      $('.overlay .popupcontent .messagesBlock').empty().text('Some error').show();
    }

  });

});