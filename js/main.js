//@prepros-prepend jquery.smooth-scroll.js
//@prepros-prepend jquery.fitvids.js

$(document).ready( function(){

  // EVENT LISTENER FOR MENU OPEN BUTTON
  $(".hamburger").on("click", function(){

  		// Toggle class nav_hide on to hamburger
      $(".hamburger").toggleClass("nav_hide");

      //  Toggle class nav_hide from hamburger__close
      $(".hamburger__close").toggleClass("nav_hide");

      // Toggle class mobile_nav_display from nav
      $("nav#mainMenu").toggleClass("mobile-nav_display");

    });


   // EVENT LISTENER FOR MENU CLOSE BUTTON
   $(".hamburger__close").on("click", function(){

  		// Toggle class nav_hide on to hamburger
      $(".hamburger").toggleClass("nav_hide");

      //  Toggle class nav_hide from hamburger__close
      $(".hamburger__close").toggleClass("nav_hide");

      // Toggle class mobile_nav_display from nav
      $("nav#mainMenu").toggleClass("mobile-nav_display");

    });

    // ACTIVATE SMOOTH SCROLL
    $("a").smoothScroll({speed: 700,});

    // ACTIVATE RESPONSIVE VIDEOS - Uses FitVids.js
    // See https://github.com/davatron5000/FitVids.js/releases

    $(".video").fitVids();

})
