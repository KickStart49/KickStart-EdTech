
 /* jQuery Pre loader
  -----------------------------------------------*/
function progress(percent, $element) {
    var progressBarWidth = percent * $element.width() / 100;
    $element.find('div').animate({ width: progressBarWidth }, 500).html(percent + "% ");
}

$(window).load(function(){

   function p20() {    
    $(".1").fadeIn(100);
    progress(20, $('#progressBar'));
 }
 p20();

  function p35() {   
    $(".1").fadeOut(0);
    $(".2").fadeIn(100);
    progress(35, $('#progressBar'));
 }
 setTimeout(p35, 2000);

 function p63() {   
    $(".2").fadeOut(0);
    $(".3").fadeIn(100);
    progress(63, $('#progressBar'));
 }
 setTimeout(p63, 4000);

 function p100() {   
    $(".3").fadeOut(0);
    $(".4").fadeIn(100);
    progress(100, $('#progressBar'));
    $('.preloader-btn').fadeIn(500);
 }
 setTimeout(p100, 8000);

     // set duration in brackets  
    $('.preloader-btn').click(function(){
      $('.preloader').fadeOut(1000);
      $('video').each(function () { // looks for all the html5 videos
        this.currentTime = 0;
        this.pause();
      });
    });

});


/* Mobile Navigation
    -----------------------------------------------*/
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
});


/* HTML document is loaded. DOM is ready. 
-------------------------------------------*/
$(document).ready(function() {

  /* Hide mobile menu after clicking on a link
    -----------------------------------------------*/
    $('.navbar-collapse a').click(function(){
        $(".navbar-collapse").collapse('hide');
    });


 /* Parallax section
    -----------------------------------------------*/
  function initParallax() {
    $('#intro').parallax("100%", 0.1);
    $('#overview').parallax("100%", 0.3);
    $('#detail').parallax("100%", 0.2);
    $('#video').parallax("100%", 0.3);
    $('#speakers').parallax("100%", 0.1);
    $('#program').parallax("100%", 0.2);
    $('#register').parallax("100%", 0.1);
    $('#faq').parallax("100%", 0.3);
    $('#venue').parallax("100%", 0.1);
    $('#sponsors').parallax("100%", 0.3);
    $('#contact').parallax("100%", 0.2);

  }
  initParallax();


  /* Owl Carousel
  -----------------------------------------------*/
  $(document).ready(function() {
    $("#owl-speakers").owlCarousel({
      autoPlay: 6000,
      items : 4,
      itemsDesktop : [1199,2],
      itemsDesktopSmall : [979,1],
      itemsTablet: [768,1],
      itemsTabletSmall: [985,2],
      itemsMobile : [479,1],
    });
  });


  /* Back top
  -----------------------------------------------*/
    $(window).scroll(function() {
        if ($(this).scrollTop() > 200) {
        $('.go-top').fadeIn(200);
        } else {
          $('.go-top').fadeOut(200);
        }
        });   
        // Animate the scroll to top
      $('.go-top').click(function(event) {
        event.preventDefault();
      $('html, body').animate({scrollTop: 0}, 300);
      })


  /* wow
  -------------------------------*/
  new WOW({ mobile: false }).init();

  });

