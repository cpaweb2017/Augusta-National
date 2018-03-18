

$('a[href*="#"]').on('click touchend', function(event) {
    event.preventDefault();
    if ($(window).width() > 768) {
        var footerHeight = 65
    } else {
        var footerHeight = 65
    }
    var target = $(this).attr("href");
    var scrollToPosition = $(target).offset().top - footerHeight;
    $('body, html').animate({
        'scrollTop': scrollToPosition
    }, 1000)
});

// $(document).ready(function() {
  
//   $(window).scroll(function () {
//       //if you hard code, then use console
//       //.log to determine when you want the 
//       //nav bar to stick.  
//       console.log($(window).scrollTop())
//     if ($(window).scrollTop() > 810) {
//       $('#nav_bar2').addClass('navbar-fixed');
//     }
//     if ($(window).scrollTop() < 811) {
//       $('#nav_bar2').removeClass('navbar-fixed');
//     }
//   });
// });

