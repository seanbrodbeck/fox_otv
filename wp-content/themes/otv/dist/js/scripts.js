if (window.matchMedia("(max-width: 992px)").matches) {
	(function($) {
		headerHeight = $("#tu-header").outerHeight();
		navHeight = $(".menu").outerHeight();
    //  Story Toggle
	 	$('.story-nav li h2').click(function() {
	 		$('.story-item').hide();
	 		var slideTitle = $(this).find('span').text();
		 	$('.story-item h2:contains(' + slideTitle + ')').parent().parent().parent().show();

		 	$('html, body').animate({
        scrollTop: $("#story-jump").offset().top - headerHeight - navHeight + 2
      })


		});

	 	$('.close-story').click(function() {
		  $('.story-item').hide();
		});


		$('.nojumpmobile a').removeAttr("href");


	})( jQuery );
} else {
	(function($) {

		$( ".story-nav" ).on( "click", function( event ) {
		  $('.stories').addClass('stories-open');
		});

    //  Story Toggle
	 	$('.story-nav li h2').click(function() {
	 		var slideTitle = $(this).find('span').text();
		  $('.story-nav li h2').removeClass('active-story');
		  $('.story-item').hide();
		  $('.story-nav').addClass('story-nav-open');
		  $('.story-item h2:contains(' + slideTitle + ')').parent().parent().parent().fadeIn("fast");
		  $(this).addClass('active-story');
		});

	 	$('.close-story').click(function() {
		  $('.story-item').removeClass('story-open');
		  $('.story-nav').removeClass('story-nav-open');
		  $('.story-nav li h2').removeClass('active-story');
		  $('.stories').removeClass('stories-open');
		});
	})( jQuery );
}

(function($) {

	 var pageTitle = $("#article-header h1").text();
		$('.page-template-page-article .menu .story-list-link a span:contains('+ pageTitle +')').css("font-weight", "600").prev().css("opacity", "1");

		$('.menu-items-text').mouseover(function() {
			$('.page-template-page-article .menu .story-list-link a img').css("opacity", "0");
		});

		$('.menu-items-text').mouseout(function() {
			$('.page-template-page-article .menu .story-list-link a span:contains('+ pageTitle +')').css("font-weight", "600").prev().css("opacity", "1");
		});


	// Things on Timers

	setTimeout(function(){
		$('#landing-hero .dotfade').fadeIn(1000);
		$('#article-header .dotfade').fadeIn(1000);
	}, 1200);

	setTimeout(function(){
		$('#landing-hero .dotfade2').fadeIn(1000);
		$('#article-header .dotfade2').fadeIn(1000);
	}, 1500);

	setTimeout(function(){
	 	$('.menu').addClass('showmenu');
	 	$('#tu-header').addClass('showtuheader');
	 }, 2000);

	setTimeout(function(){
	 	$('.logo').fadeIn(700);
	 }, 2500);

	 setTimeout(function(){
	 	$('.badge').fadeIn(700);
	 	$('.headlines').fadeIn(700);
	 	$('.keep-scrolling').fadeIn(700);
	 	$('#landing-hero .jumpdownlink').fadeIn(700);
	 }, 3000);

	 // Menu Toggle 

	 //Desktop

	$( ".menu-bottom" ).click(function() {
	  $(".overlay").toggleClass( "open" );
	  $(".open-menu").toggleClass("hideme");
	  $(".menu-items-text").fadeToggle();
	});

	$( ".open-menu" ).click(function() {
	  $(".overlay").toggleClass( "open" );
	  $(".open-menu").toggleClass("hideme");
	  $(".menu-items-text").fadeToggle();
	});

	$( ".stories-open-menu" ).click(function() {
	  $(".overlay").toggleClass( "open" );
	  $(".open-menu").toggleClass("hideme");
	  $(".menu-items-text").fadeToggle();
	  $(".close-menu-mobile").fadeToggle();
	});

	$( ".close-menu" ).click(function() {
		$(".overlay").toggleClass( "open" );
	  $(".open-menu").toggleClass("hideme");
	  $(".menu-items-text").fadeToggle();
	});

	// Mobile 

	$( ".stories-open-menu-mobile" ).click(function() {
	  $(".overlay").toggleClass( "open" );
	  $(".open-menu-mobile").toggleClass("hideme");
	  $(".menu-items-text").fadeToggle();
	});

	$( ".open-menu-mobile" ).click(function() {
	  $(".overlay").toggleClass( "open" );
	  $(".open-menu-mobile").hide();
	  $(".menu-items-text").fadeToggle();
	  $(".close-menu-mobile").fadeToggle();
	});

	$( ".close-menu-mobile" ).click(function() {
		$(".overlay").toggleClass( "open" );
	  $(".open-menu-mobile").show();
	  $(".menu-items-text").fadeToggle();
	  $(this).toggle();
	});

	// Smooth Scrolling Anchors 

	$('a[href*="#"]')
	  .not('[href="#"]')
	  .not('[href="#0"]')
	  .click(function(event) {
	    if (
	      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
	      && 
	      location.hostname == this.hostname
	    ) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
	      if (target.length) {
	        event.preventDefault();
	        $('html, body').animate({
	          scrollTop: target.offset().top
	        }, 700, function() {
	          var $target = $(target);
	          $target.focus();
	          if ($target.is(":focus")) { 
	            return false;
	          } else {
	            $target.attr('tabindex','-1'); 
	            $target.focus();
	          };
	        });
	      }
	    }
	  });

	  // Waypoints Stats

	  var waypoint = new Waypoint({
		  element: document.getElementById('stat-1'),
		  handler: function() {
		    $('.stat-text-1').css("opacity","1");
		  },
		  offset: '70%'
		})

		var waypoint = new Waypoint({
		  element: document.getElementById('stat-2'),
		  handler: function() {
		    $('.stat-text-2').css("opacity","1");
		  },
		  offset: '70%'
		})

		var waypoint = new Waypoint({
		  element: document.getElementById('stat-3'),
		  handler: function() {
		    $('.stat-text-3').css("opacity","1");
		  },
		  offset: '70%'
		})

		var waypoint = new Waypoint({
		  element: document.getElementById('stat-4'),
		  handler: function() {
		    $('.stat-text-4').css("opacity","1");
		  },
		  offset: '70%'
		})
		var waypoint = new Waypoint({
		  element: document.getElementById('stat-5'),
		  handler: function() {
		    $('.stat-text-5').css("opacity","1");
		  },
		  offset: '70%'
		})

		var waypoint = new Waypoint({
		  element: document.getElementById('stat-6'),
		  handler: function() {
		    $('.stat-text-6').css("opacity","1");
		  },
		  offset: '70%'
		})

		// Remove Scroll Note

		// var waypoint = new Waypoint({
		//   element: document.getElementById('colophon'),
		//   handler: function() {
		//     $('.keep-scrolling').css("opacity","0");
		//   },
		//   offset: '70%'
		// })

		var waypoints = $('#colophon').waypoint(function(direction) {
		  $('.keep-scrolling div').fadeToggle();
		}, {
		  offset: '70%'
		})

		// Diagram

		var waypoint = new Waypoint({
		  element: document.getElementById('data-science-diagram'),
		  handler: function() {
		  	// animate rings
		  	$('.ring').addClass('animate-rings');
		  	//animate other diagram sections
		  	setTimeout(function(){
					$('.diagram-title').fadeIn(800);
				}, 1000);
				setTimeout(function(){
					$('.diagram-title-overlap').fadeIn(800);
				}, 1300);
		  	setTimeout(function(){
					$('.diagram-dots').fadeIn(800);
					$('.diagram-section-title').fadeIn(800);
				}, 1600);
		  },
		  offset: '50%'
		})

		// Animate Burst On Scroll 

		var waypoint = new Waypoint({
		  element: document.getElementById('why-is-data-science-important'),
		  handler: function() {
		    $("#bkg-burst-why-svg").show();
		    setTimeout(function(){
					$('#bkg-burst-why-svg .dotfade').fadeIn(1000);
				}, 1200);

				setTimeout(function(){
					$('#bkg-burst-why-svg .dotfade2').fadeIn(1000);
				}, 1500);
		  },
		  offset: '70%'
		})

		var waypoint = new Waypoint({
		  element: document.getElementById('how-do-we-innovate-in-data-science'),
		  handler: function() {
		    $("#bkg-burst-how-svg").show();
		    setTimeout(function(){
					$('#bkg-burst-how-svg .dotfade').fadeIn(1000);
				}, 1200);

				setTimeout(function(){
					$('#bkg-burst-how-svg .dotfade2').fadeIn(1000);
				}, 1500);
		  },
		  offset: '70%'
		})

		var waypoint = new Waypoint({
		  element: document.getElementById('what-is-data-science'),
		  handler: function() {
		    $("#bkg-burst-what-svg").show();
		    setTimeout(function(){
					$('#bkg-burst-what-svg .dotfade').fadeIn(1000);
				}, 1200);

				setTimeout(function(){
					$('#bkg-burst-what-svg .dotfade2').fadeIn(1000);
				}, 1500);
		  },
		  offset: '70%'
		})


		// Constant Contact Form - Remove Labels on Focus

	$(".ctct-text").focus(function() {
      $(this).prev('label').css('opacity','0');       
  });

	$('.ctct-text').blur(function(){
    if( !$(this).val() ) {
      $(this).prev('label').css('opacity','1');
    }
  });

  $(".ctct-email").focus(function() {
      $(this).prev('label').css('opacity','0');       
  });

	$('.ctct-email').blur(function(){
    if( !$(this).val() ) {
      $(this).prev('label').css('opacity','1');
    }
  });



  $('.footer-bottom .back-to-top').click(function() {
		  $('html, body').animate({
        scrollTop: $("#page").offset().top - 86
      })
	});







})( jQuery );
