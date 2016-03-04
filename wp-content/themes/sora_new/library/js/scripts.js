/*
 * Bones Scripts File
 * Author: Eddie Machado
 *
 * This file should contain any js scripts you want to add to the site.
 * Instead of calling it in the header or throwing it inside wp_head()
 * this file will be called automatically in the footer so as not to
 * slow the page load.
 *
 * There are a lot of example functions and tools in here. If you don't
 * need any of it, just remove it. They are meant to be helpers and are
 * not required. It's your world baby, you can do whatever you want.
*/


/*
 * Get Viewport Dimensions
 * returns object with viewport dimensions to match css in width and height properties
 * ( source: http://andylangton.co.uk/blog/development/get-viewport-size-width-and-height-javascript )
*/
function updateViewportDimensions() {
	var w=window,d=document,e=d.documentElement,g=d.getElementsByTagName('body')[0],x=w.innerWidth||e.clientWidth||g.clientWidth,y=w.innerHeight||e.clientHeight||g.clientHeight;
	return { width:x,height:y };
}
// setting the viewport width
var viewport = updateViewportDimensions();


/*
 * Throttle Resize-triggered Events
 * Wrap your actions in this function to throttle the frequency of firing them off, for better performance, esp. on mobile.
 * ( source: http://stackoverflow.com/questions/2854407/javascript-jquery-window-resize-how-to-fire-after-the-resize-is-completed )
*/
var waitForFinalEvent = (function () {
	var timers = {};
	return function (callback, ms, uniqueId) {
		if (!uniqueId) { uniqueId = "Don't call this twice without a uniqueId"; }
		if (timers[uniqueId]) { clearTimeout (timers[uniqueId]); }
		timers[uniqueId] = setTimeout(callback, ms);
	};
})();

// how long to wait before deciding the resize has stopped, in ms. Around 50-100 should work ok.
var timeToWaitForLast = 100;


/*
 * Here's an example so you can see how we're using the above function
 *
 * This is commented out so it won't work, but you can copy it and
 * remove the comments.
 *
 *
 *
 * If we want to only do it on a certain page, we can setup checks so we do it
 * as efficient as possible.
 *
 * if( typeof is_home === "undefined" ) var is_home = $('body').hasClass('home');
 *
 * This once checks to see if you're on the home page based on the body class
 * We can then use that check to perform actions on the home page only
 *
 * When the window is resized, we perform this function
 * $(window).resize(function () {
 *
 *    // if we're on the home page, we wait the set amount (in function above) then fire the function
 *    if( is_home ) { waitForFinalEvent( function() {
 *
 *	// update the viewport, in case the window size has changed
 *	viewport = updateViewportDimensions();
 *
 *      // if we're above or equal to 768 fire this off
 *      if( viewport.width >= 768 ) {
 *        console.log('On home page and window sized to 768 width or more.');
 *      } else {
 *        // otherwise, let's do this instead
 *        console.log('Not on home page, or window sized to less than 768.');
 *      }
 *
 *    }, timeToWaitForLast, "your-function-identifier-string"); }
 * });
 *
 * Pretty cool huh? You can create functions like this to conditionally load
 * content and other stuff dependent on the viewport.
 * Remember that mobile devices and javascript aren't the best of friends.
 * Keep it light and always make sure the larger viewports are doing the heavy lifting.
 *
*/

/*
 * We're going to swap out the gravatars.
 * In the functions.php file, you can see we're not loading the gravatar
 * images on mobile to save bandwidth. Once we hit an acceptable viewport
 * then we can swap out those images since they are located in a data attribute.
*/
function loadGravatars() {
  // set the viewport using the function above
  viewport = updateViewportDimensions();
  // if the viewport is tablet or larger, we load in the gravatars
  if (viewport.width >= 768) {
  jQuery('.comment img[data-gravatar]').each(function(){
    jQuery(this).attr('src',jQuery(this).attr('data-gravatar'));
  });
	}
} // end function


/*
 * Put all your regular jQuery in here.
*/
jQuery(document).ready(function($) {

  /*
   * Let's fire off the gravatar function
   * You can remove this if you don't need it
  */
  loadGravatars();


    var divs = $('.social');

    divs.hide();
$(window).scroll(function(){
   if($(window).scrollTop()<200){
         divs.stop(true,true).fadeIn("fast");
   } else {
         divs.stop(true,true).fadeOut("fast");
   }
});


  Height = jQuery( window ).height();
  Width = jQuery( window ).width();
  console.log(Width);

  $('#menu').slicknav({
      prependTo:'#menu-mob',
      closeOnClick: 'true'
  });

      $('.entry-content').fadeIn(1000); 
      
    function scrollToAnchor(aid, off){
      var aTag = $("a[name='"+ aid +"']");
      console.log(aTag);
      $('html,body').animate({scrollTop: aTag.offset().top + off },'slow');  // -160
      console.log('54323434234hos');
    }


  

  $('#menu-mob .slicknav_menu').on('click',(function(e) {
    console.log('ghtht');
  })
  );

  $(".menu-logo").click(function(e) {
    e.preventDefault();
    scrollToAnchor('top', -160);
  });
  $(".menu_about").click(function(e) {
    e.preventDefault();
    scrollToAnchor('about-us', -160);
  });
  $(".menu_treatments").click(function(e) {
    e.preventDefault();
    scrollToAnchor('treatments', -160 );
  });
  $(".menu_conditions").click(function(e) {
    e.preventDefault();
    scrollToAnchor('conditions', -160 );
  });
  $(".menu_prices").click(function(e) {
    e.preventDefault();
    scrollToAnchor('prices', -160);
  });
  $(".menu_why").click(function(e) {
    e.preventDefault();
    scrollToAnchor('why', -160);
  });
  $(".menu_contact").click(function(e) {
    e.preventDefault();
    scrollToAnchor('contact', -160);
  });
  $(".menu_booking").click(function(e) {
    e.preventDefault();
    scrollToAnchor('booking', -160);
  });
  $(".menu_booking").hide();

  /*$('.section-1, .section-2, .section-3, .section-4, .section-5, .section-6').css({
  'padding-top': '40px'
});*/


    


// Load this script when page loads
$(document).ready(function(){

 // Set up a listener so that when anything with a class of 'tab' 
 // is clicked, this function is run.
$('.tab').click(function (event) {
  event.preventDefault()
  // Remove the 'active' class from the active tab.
  $('li.active')
    .removeClass('active');
    
  // Add the 'active' class to the clicked tab.
  $(this).parent().addClass('active');

  // Remove the 'tab_contents_active' class from the visible tab contents.
  $('div.tab_contents_active')
    .removeClass('tab_contents_active');

  // Add the 'tab_contents_active' class to the associated tab contents.
  $(this.rel).addClass('tab_contents_active');

 });
});


/*$(".treatment-overlays").mousemove( function(e) {
    var offset = $(this).offset();
    var relativeX = (e.pageX - offset.left);
    var relativeY = (e.pageY - offset.top);
    //console.log("X: " + relativeX + "  Y: " + relativeY);

    
    if (relativeX > 70 && relativeX < 230 && relativeY < 140  ) {
      $('.treatment-overlays img').replaceWith(forehead);

      console.log(forehead);
    }
    if (relativeX < 170 && relativeX > 130 && relativeY > 141 && relativeY < 201  ) {
      $('.treatment-overlays img').replaceWith(TopNosegarbella);
    }
    if ((relativeX < 120 && relativeX > 60 && relativeY > 191 && relativeY < 241) || (relativeX < 230 && relativeX > 180 && relativeY > 191 && relativeY < 241)   ) {
      $('.treatment-overlays img').replaceWith(cheeks);
    }
    if ((relativeX < 60 && relativeX > 40 && relativeY > 180 && relativeY < 210) || (relativeX < 280 && relativeX > 230 && relativeY > 180 && relativeY < 210)   ) {
      $('.treatment-overlays img').replaceWith(eyewrinkle); 
      $('.treatment-content-area').html(eye_wrinkle_content)
    }
    if (relativeX < 170 && relativeX > 130 && relativeY > 204 && relativeY < 270  ) {
      $('.treatment-overlays img').replaceWith(nosebridge);
    }
    if (relativeX < 170 && relativeX > 130 && relativeY > 271 && relativeY < 300  ) {
      $('.treatment-overlays img').replaceWith(smokerslines);
    }
    
    if ((relativeX < 114 && relativeX > 100 && relativeY > 270 && relativeY < 300) || (relativeX < 204 && relativeX > 185 && relativeY > 270 && relativeY < 300) ) {
      $('.treatment-overlays img').replaceWith(nasiolabial);
    }
    if (relativeX < 170 && relativeX > 130 && relativeY > 301 && relativeY < 340 ) {
      $('.treatment-overlays img').replaceWith(lips);
      //$('.treatment-content-area').fadeOut();
      $('.treatment-content-area').html(lips_content)
    } */




$(function() {
  var url = 'http://sora.pushpulldev.co.uk/';

  

  var crows_feet =  $('<img />').attr('src', url + 'wp-content/themes/sora_new/library/images/face_images/Crows-Feet.png');
  var forehead = $('<img />').attr('src', url + 'wp-content/themes/sora_new/library/images/face_images/Forehead.png');
  var frown = $('<img />').attr('src', url + 'wp-content/themes/sora_new/library/images/face_images/Frown-Lines.png');
  var marionette = $('<img />').attr('src', url + 'wp-content/themes/sora_new/library/images/face_images/Marionette-Lines.png');
  var nose = $('<img />').attr('src', url + 'wp-content/themes/sora_new/library/images/face_images/Nose-To-Mouth.png');
  var lips = $('<img />').attr('src', url + 'wp-content/themes/sora_new/library/images/face_images/Thin-Lips.png');
  var general = $('<img />').attr('src', url + 'wp-content/themes/sora_new/library/images/face_images/General-Skin.png');
    
  


  //var eyewrinkle = $('<img />').attr('src', url + 'wp-content/themes/sora_new/library/images/treatments/eye-wrinkle.png');
  //var nasiolabial = $('<img />').attr('src', url + 'wp-content/themes/sora_new/library/images/treatments/nasio-labial.png');
  //var lips = $('<img />').attr('src', url + 'wp-content/themes/sora_new/library/images/treatments/lips.png');
  
  //var lips_content = $('.Lips').html();
  //var eye_wrinkle_content = $('.eye_wrinkle').html();
  
  

  $('.face_1').hover(function(){
    $('.treatment-overlays img').replaceWith(forehead);
    $('.treament-text-list').find('.active').removeClass('active').fadeOut(100, function(){
      $('.treament-text-list').find('#forehead_lines').fadeIn().addClass('active');
    });
    
  }, function(){

  });

  $('.face_2').hover(function(){
    $('.treatment-overlays img').replaceWith(frown);
    $('.treament-text-list').find('.active').removeClass('active').fadeOut(100, function(){
      $('.treament-text-list').find('#frown').fadeIn().addClass('active');
    });
    
  }, function(){

  });

  $('.face_3, .face_4').hover(function(){
    $('.treatment-overlays img').replaceWith(crows_feet);
    $('.treament-text-list').find('.active').removeClass('active').fadeOut(100, function(){
      $('.treament-text-list').find('#crows_feet').fadeIn().addClass('active');
    });
  }, function(){
    
  });

  $('.face_5, .face_6').hover(function(){
    $('.treatment-overlays img').replaceWith(general);
    $('.treament-text-list').find('.active').removeClass('active').fadeOut(100, function(){
      $('.treament-text-list').find('#skin_concerns').fadeIn().addClass('active');
    });
  }, function(){
    
  });

  $('.face_9, .face_10').hover(function(){
    $('.treatment-overlays img').replaceWith(marionette);
    $('.treament-text-list').find('.active').removeClass('active').fadeOut(100, function(){
      $('.treament-text-list').find('#marionette').fadeIn().addClass('active');
    });
  }, function(){
    
  });

  $('.face_7, .face_8').hover(function(){
    $('.treatment-overlays img').replaceWith(nose);
    $('.treament-text-list').find('.active').removeClass('active').fadeOut(100, function(){
      $('.treament-text-list').find('#nose').fadeIn().addClass('active');
    });
  }, function(){
    
  });

  $('.face_11').hover(function(){
    $('.treatment-overlays img').replaceWith(lips);
    $('.treament-text-list').find('.active').removeClass('active').fadeOut(100, function(){
      $('.treament-text-list').find('#thin_lips').fadeIn().addClass('active');
    });
  }, function(){
    
  });

  

  

});
}); /* end of as page load scripts */

/*
 * jQuery Anystretch
 * Version 1.0
 * https://github.com/danmillar/jquery-anystretch
 *
 * Add a dynamically-resized background image to the body
 * of a page or any other block level element within it
 *
 * Copyright (c) 2012 Dan Millar (@danmillar / decode.uk.com)
 * Dual licensed under the MIT and GPL licenses.
 *
 * This is a fork of jQuery Backstretch (v1.2)
 * Copyright (c) 2011 Scott Robbin (srobbin.com)
*/

;(function($) {
    
    $.fn.anystretch = function(src, options, callback) {
        return this.each(function(i){
        
            var defaultSettings = {
                centeredX: true,         // Should we center the image on the X axis?
                centeredY: true,         // Should we center the image on the Y axis?
                speed: 0,                // fadeIn speed for background after image loads (e.g. "fast" or 500)
                elPosition: 'relative',  // position of containing element when not being added to the body
                useInnerWidth: false     // set to true if dealing with elements with borders 
            },
            el = $(this),
            isBody = (el.get(0).tagName == undefined) ? true : false, // Decide whether anystretch is being called on an element or not
            container = isBody ? $('.anystretch') : el.children(".anystretch"),
            settings = container.data("settings") || defaultSettings, // If this has been called once before, use the old settings as the default
            existingSettings = container.data('settings'),
            imgRatio, bgImg, bgWidth, bgHeight, bgOffset, bgCSS;
            
            // Extend the settings with those the user has provided
            if(options && typeof options == "object") $.extend(settings, options);
            
            // Just in case the user passed in a function without options
            if(options && typeof options == "function") callback = options;
        
            // Initialize
            $(document).ready(_init);
      
            // For chaining
            return this;
        
            function _init() {
                // Prepend image, wrapped in a DIV, with some positioning and zIndex voodoo
                if(src) {
                    var img;
                    
                    if(!isBody) {
                        // If not being added to the body set position to elPosition (default: relative) to keep anystretch contained
                        el.css({position: settings.elPosition, background: "none"});
                    }
                    
                    // If this is the first time that anystretch is being called
                    if(container.length == 0) {
                        container = $("<div />").attr("class", "anystretch")
                                                .css({left: 0, top: 0, position: (isBody ? "fixed" : "absolute"), overflow: "hidden", zIndex: (isBody ? -999999 : -999998), margin: 0, padding: 0, height: "100%", width: "100%"});
                    } else {
                        // Prepare to delete any old images
                        container.find("img").addClass("deleteable");
                    }
    
                    img = $("<img />").css({position: "absolute", display: "none", margin: 0, padding: 0, border: "none", zIndex: -999999})
                                      .bind("load", function(e) {                                          
                                          var self = $(this),
                                              imgWidth, imgHeight;
        
                                          self.css({width: "auto", height: "auto"});
                                          imgWidth = this.width || $(e.target).width();
                                          imgHeight = this.height || $(e.target).height();
                                          imgRatio = imgWidth / imgHeight;
    
                                          _adjustBG(function() {
                                              self.fadeIn(settings.speed, function(){
                                                  // Remove the old images, if necessary.
                                                  container.find('.deleteable').remove();
                                                  // Callback
                                                  if(typeof callback == "function") callback();
                                              });
                                          });
                                          
                                      })
                                      .appendTo(container);
                     
                    // Append the container to the body, if it's not already there
                    if(el.children(".anystretch").length == 0) {
                        if(isBody) {
                            $('body').append(container);
                        } else {
                            el.append(container);
                        }
                    }
                    
                    // Attach the settings
                    container.data("settings", settings);
                        
                    img.attr("src", src); // Hack for IE img onload event
                    
                    // Adjust the background size when the window is resized or orientation has changed (iOS)
                    $(window).resize(_adjustBG);
                }
            }
                
            function _adjustBG(fn) {
                try {
                    bgCSS = {left: 0, top: 0};
                    bgWidth = _width();
                    bgHeight = bgWidth / imgRatio;
    
                    // Make adjustments based on image ratio
                    // Note: Offset code provided by Peter Baker (http://ptrbkr.com/). Thanks, Peter!
                    if(bgHeight >= _height()) {
                        bgOffset = (bgHeight - _height()) /2;
                        if(settings.centeredY) $.extend(bgCSS, {top: "-" + bgOffset + "px"});
                    } else {
                        bgHeight = _height();
                        bgWidth = bgHeight * imgRatio;
                        bgOffset = (bgWidth - _width()) / 2;
                        if(settings.centeredX) $.extend(bgCSS, {left: "-" + bgOffset + "px"});
                    }
    
                    container.children("img:not(.deleteable)").width( bgWidth ).height( bgHeight )
                                                       .filter("img").css(bgCSS);
                } catch(err) {
                    // IE7 seems to trigger _adjustBG before the image is loaded.
                    // This try/catch block is a hack to let it fail gracefully.
                }
          
                // Executed the passed in function, if necessary
                if (typeof fn == "function") fn();
            }
            
            function _width() {
                return isBody || settings.useInnerWidth ? el.width() : el.outerWidth();
            }
            
            function _height() {
                return isBody || settings.useInnerWidth ? el.height() : el.outerHeight();
            }
            
        });
    };
    
    $.anystretch = function(src, options, callback) {
        var el = ("onorientationchange" in window) ? $(document) : $(window); // hack to acccount for iOS position:fixed shortcomings
        
        el.anystretch(src, options, callback);
    };

    $('.condition-treatment-list li').on('click', function() {
        var at = $(this).attr("data-name");
        console.log(at);
        var element = '.treatment-text li[data-name="' + at + '"]';
        var element_title = '.treatment-title li[data-name="' + at + '"]';
        var li_title = $(element_title);
        var li = $(element);
        $('.treatment-text').find('.active').removeClass('active');
        $('.treatment-title').find('.active').removeClass('active');
        li_title.addClass('active');
        li.addClass('active');

        $('html, body').animate({
          scrollTop: $(".treatments_content-box").offset().top - 200
      }, 1000);
    })
    $('.treatment-title li').on('click', function () {
        $(this).parent().find('.active').removeClass('active');
        var at = $(this).attr("data-name");
        var element = '.treatment-text li[data-name="' + at + '"]';
        var li = $(element);
        $(this).addClass('active');
        $('.treatment-text').find('.active').removeClass('active');
        li.addClass('active');
    })


      /*$(document).on( 'scroll', function(){
        var section2 = $(".section-2").scrollTop();
        var section3 = $(".section-3").scrollTop();


        console.log(section2, section3)
    
      });*/
      
      var section_1 = $('.section-1').outerHeight();
      var section_5 = $('.section-5').outerHeight();
      var section_3 = $('.section-3').outerHeight();
      var section_3_b = $('.section-3-b').outerHeight();
      var section_4 = $('.section-4').outerHeight();
      var section_6 = $('.section-6').outerHeight();
      var section_7 = $('.section-7').outerHeight();

      function resetPositions() {
        section_1 = $('.section-1').outerHeight();
        section_5 = $('.section-5').outerHeight();
        section_3 = $('.section-3').outerHeight();
        section_3_b = $('.section-3-b').outerHeight();
        section_4 = $('.section-4').outerHeight();
        section_6 = $('.section-6').outerHeight();
        section_7 = $('.section-7').outerHeight();
      }

      setTimeout ( function () {
        resetPositions();
      }, 1);


      function sectionFinder() {
          Position_1 =  section_1 - 40;
          Position_2 = section_1 + section_5 - 50 ; 
          Position_3 = section_1 + section_5 + section_3 - 50; 
          Position_4 = section_1 + section_5 + section_3 + section_3_b - 80;
          console.log('p4',Position_4);
          Position_5 = section_1 + section_5 + section_3 + section_3_b + section_4 - 54;
          Position_6 = section_1 + section_5 + section_3 + section_3_b + section_4 + section_6;
          Position_7 = section_1 + section_5 + section_3 + section_3_b + section_4 + section_6 + section_7 - 100;
      }
      sectionFinder();

      $( window ).resize(function() {
        resetPositions();
        sectionFinder();
      });

      //console.log('positions', Position_1, Position_2, Position_3);

      var header_bar = $('.header-banner-color');
      var mobile_bar = $('.slicknav_menu');
      


      $(document).scroll(function() {

          height_it = $(document).scrollTop();
          
        if ($(document).scrollTop() < Position_1) {
          header_bar.css({'background': '#f2f6d4'});
          mobile_bar.css({'border-top': '#f2f6d4'});
        } else if ($(document).scrollTop() < Position_2) {
          header_bar.css({'background': '#faf6ea'});
          mobile_bar.css({'border-top': '#faf6ea'});
        }
        else if ($(document).scrollTop() < Position_3) {
          header_bar.css({'background': '#FFFFE6'});
          mobile_bar.css({'border-top': '#FFFFE6'});
        } 
        else if ($(document).scrollTop() < Position_4) {
          header_bar.css({'background': '#ecfbf4'});
          mobile_bar.css({'border-top': '#ecfbf4'});
        }
        else if ($(document).scrollTop() < Position_5) {
          console.log('5');
          header_bar.css({'background': '#fbf8ec'});
          mobile_bar.css({'border-top': '#fbf8ec'});
        }
        else if ($(document).scrollTop() < Position_6) {
          header_bar.css({'background': '#dfecdb'});
          mobile_bar.css({'border-top': '#dfecdb'});
        }
        else if ($(document).scrollTop() < Position_6) {
          header_bar.css({'background': '#ffffe8'});
          mobile_bar.css({'border-top': '#ffffe8'});
        } 
        else if ($(document).scrollTop() < 7100) {
          header_bar.css({'background': '#fbf8ec'});
          mobile_bar.css({'border-top': '#fbf8ec'});
        }

      });
        
   /* .section-1 {
      background-color: ;
    }
    .section-5 {
      background-color: ;
    }
    .section-3-b {
      background-color: ;
    }
    .section-4 {
      background-color: ;
    }

    .section-6 {
      background-color: #dfecdb;
    }
    .section-7 {

      background-color: #ffffe8;
    }
  */
})(jQuery);
