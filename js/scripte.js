/*========================================================================
EXCLUSIVE ON themeforest.net
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
Template Name   : cropar
Author          : ThemePaa
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
Copyright (c) 2018 - ThemePaa
========================================================================*/
  

(function($){
    "use strict"
    var CROP = {};

    /*--------------------
      * Pre Load
    ----------------------*/
    CROP.WebLoad = function(){
      document.getElementById("loading").style.display = "none"; 
    }

    /*--------------------
        * Header Class
    ----------------------*/
    CROP.HeaderSticky = function(){
        $(".navbar-toggler").on("click", function(a) {
            a.preventDefault(), $(".header").addClass("fixed-header")
        });
    }

    /*--------------------
        * Menu Close
    ----------------------*/
    CROP.MenuClose = function(){
      $('s.navbar-nav .nav-link').on('click', function() {
       var toggle = $('.navbar-toggler').is(':visible');
       if (toggle) {
         $('.navbar-collapse').collapse('hide');
       }
      });
    }

    	// pageSlider
		function pageSlider() {
			$('.page-slider').slick({
				fade: true,
				slidesToShow: 1,
				slidesToScroll: 1,
				autoplay: true,
				dots: false,
				speed: 600,
				arrows: true,
				prevArrow: '<button type="button" class="carousel-control left" aria-label="carousel-control"><i class="fas fa-chevron-left"></i></button>',
				nextArrow: '<button type="button" class="carousel-control right" aria-label="carousel-control"><i class="fas fa-chevron-right"></i></button>'
			});
		}
		pageSlider();



    /*--------------------
        * Header Fixed
    ----------------------*/
    CROP.HeaderFixed = function(){
        if ($(window).scrollTop() >= 60) {
           $('.header').addClass('fixed-header');
        }
        else {
           $('.header').removeClass('fixed-header');
        }
    }    


    
    // Window on Load
    $(window).on("load", function(){
      CROP.WebLoad();
    });

 

})(jQuery);


