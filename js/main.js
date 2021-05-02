$(document).ready(function () {

  // scroll on top
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

  // scroll on top fix menu
  $(window).bind('scroll', function() {
    var navHeight = $( window ).height()-500;
      if ($(window).scrollTop() > navHeight) {
        $('.header__nav').addClass('fixed');
      }
      else {
        $('.header__nav').removeClass('fixed');
      }
  }); 

  // slide story__wrap
  $('.story__wrap').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    nextArrow:$('.next-item'),
    prevArrow:$('.prev-item'),
  });

  // slide sugges__wrap
  $('.sugges__wrap').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    nextArrow:$('.next-item__sugges'),
    prevArrow:$('.prev-item__sugges'),
  });

  // slide category__wrap
  $('.category__wrap').slick({
    slidesToShow: 6,
    slidesToScroll: 3,
    autoplay: true,
    autoplaySpeed: 3000,
    nextArrow:$('.next-item__category'),
    prevArrow:$('.prev-item__category'),
  });

  // slide top__wrap
  $('.top__wrap').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    nextArrow:$('.next-item__top'),
    prevArrow:$('.prev-item__top'),
  });

  // slide new__wrap
  $('.new__wrap').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    nextArrow:$('.next-item__new'),
    prevArrow:$('.prev-item__new'),
  });
  
  // start wow
  new WOW().init();

  // sort storyBook__nation
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

  // start load web
  
  $(window).on('load', function(){
    setTimeout(removeLoader, 700);
  });
  function removeLoader(){
      $( "#loader-wrapper" ).fadeOut(300, function() {
        $( "#loader-wrapper" ).remove();
    });  
  }

  // Search filter 
  $(document).ready(function () {
    $("#comic").keyup(function () {
      let comic = $(this).val();
      // debugger;
      if (comic != "") {
        $.ajax({
          url: "backend/search.php",
          method: "POST",
          cache:false,
          data: {
            comic:comic,
          },
          success: function (data) {
            $("#comic-list").html(data);
            console.log(data);
          },
        });
      } else {
        $("#comic-list").html("");
      }
    });
    $(document).on("click", "a", function () {
      $("#comic").val($(this).text());
      $("#comic-list").html("");
    });
  });

});
