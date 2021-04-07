$(document).ready(function () {
  $('.fade').slick({
    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    nextArrow:$('.btnSlider-next'),
    prevArrow:$('.btnSlider-prev'),
  });

  $(window).scroll(function(){
    if ($(this).scrollTop() > 240) {
        $('.on__top').fadeIn();
    } else {
        $('.on__top').fadeOut();
    }
  });

  $('.on__top').click(function(){
    $("html, body").animate({ scrollTop: 0 }, 1100);
    return false;
  });

  $(window).bind('scroll', function() {
    var navHeight = $( window ).height()-450;
      if ($(window).scrollTop() > navHeight) {
        $('.header__nav').addClass('fixed');
      }
      else {
        $('.header__nav').removeClass('fixed');
      }
  }); 

  $('.responsive').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 3,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
   ]
  });

  $('.carousel__content').slick({
  dots: false,
  infinite: false,
  speed: 300,
  slidesToShow: 2,
  slidesToScroll: 2,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
   ]
  });

  $('.story__wrap').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    nextArrow:$('.next-item'),
    prevArrow:$('.prev-item'),
  });
  $('.sugges__wrap').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    nextArrow:$('.next-item__sugges'),
    prevArrow:$('.prev-item__sugges'),
  });
  $('.category__wrap').slick({
    slidesToShow: 6,
    slidesToScroll: 3,
    autoplay: true,
    autoplaySpeed: 3000,
    nextArrow:$('.next-item__category'),
    prevArrow:$('.prev-item__category'),
  });
  $('.top__wrap').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    nextArrow:$('.next-item__top'),
    prevArrow:$('.prev-item__top'),
  });
  $('.new__wrap').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    nextArrow:$('.next-item__new'),
    prevArrow:$('.prev-item__new'),
  });
  
  new WOW().init();
  $('.single-item').slick({
    nextArrow:$('.btn__carousel--next'),
    prevArrow:$('.btn__carousel--prev'),
    cssEase:'cubic-bezier(.34,.45,.84,.55)',
  });

  $('.story-nation__wrap').isotope({
    itemSelector: '.slider__story',
  });

  $('ul.storyBook__nation>li>a').click(function (event) { 
    $('ul.storyBook__nation>li>a').removeClass('active');
    $(this).addClass('active');

    var nation = $(this).data('class');
    nation = '.' + nation;
    $('.story-nation__wrap').isotope({filter : nation});
    return false;
  });
  
  $(window).on('load', function(){
    setTimeout(removeLoader, 700); //wait for page load PLUS two seconds.
  });
  function removeLoader(){
      $( "#loader-wrapper" ).fadeOut(300, function() {
        // fadeOut complete. Remove the loading div
        $( "#loader-wrapper" ).remove(); //makes page more lightweight 
    });  
  }
});
