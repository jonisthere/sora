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


  function scrollToAnchor(aid, off){
    var aTag = $("a[name='"+ aid +"']");
    $('html,body').animate({scrollTop: aTag.offset().top + off },'slow');  // -160
     // console.log('54323434234hos');
  }

  //$("#menu-main-menu-1 > .menu-item-16").click(function() {
    // scrollToAnchor('make');
  //});

  $(".menu-logo").click(function(e) {
    e.preventDefault();
    scrollToAnchor('top', 0);
  });
  $("#menu-main > .menu-item-22").click(function(e) {
    e.preventDefault();
    scrollToAnchor('about-us', -170);
  });
  $("#menu-main > .menu-item-22").click(function(e) {
    e.preventDefault();
    scrollToAnchor('about-us', -170);
  });
  $("#menu-main > .menu-item-21").click(function(e) {
    e.preventDefault();
    scrollToAnchor('treatments', -170);
  });
  $("#menu-main > .menu-item-20").click(function(e) {
    e.preventDefault();
    scrollToAnchor('prices', -170);
  });
  $("#menu-main > .menu-item-19").click(function(e) {
    e.preventDefault();
    scrollToAnchor('why', -170);
  });
  $("#menu-main > .menu-item-18").click(function(e) {
    e.preventDefault();
    scrollToAnchor('contact', -170);
  });

  var divs = $('.social');

    divs.hide();
$(window).scroll(function(){
   if($(window).scrollTop()<200){
         divs.stop(true,true).fadeIn("fast");
   } else {
         divs.stop(true,true).fadeOut("fast");
   }
});

$('.entry-content').hide();
$('.main-container').css({
  'position':'relative',
  'left':'60%',
});

  $(document).ready(function() {
      $('#main-area').fullpage({
        sectionsColor: ['#eaefb7', '#ddead9', '#ffffe6', '#fcf8ee', '#ccddff'],
        anchors: ['section-1','section-2','section-3','section-4','section-5','section-6'],
        afterLoad: function(anchorLink, index){
          $('.active-section').removeClass('active-section');
          //section 2
          if(index == 1){
            $('.header-banner-color').css({
                'background':'#eaefb7'
              });
            $('.menu').find('.active-section').removeClass('.active-section');
            $('a[href^="#section-home"').parent().addClass('active-section');
          }
          if(index == 2){
            //moving the image
            $('.section-2').find('.entry-content').fadeIn(1000);
            $('.section-2').find('.main-container').delay(0).animate({
              left: '0%'
            }, 500);
            $('.header-banner-color').css({
                'background':'#ddead9'
              });
            $('.menu').find('.active-section').removeClass('active-section');
            $('a[href^="#section-2"').parent().addClass('active-section');
          }
          if(index == 3){
            //moving the image
            $('.section-3').find('.entry-content').fadeIn(1000);
            $('.section-3').find('.main-container').delay(0).animate({
              left: '0%'
            }, 500);
            $('.header-banner-color').css({
                'background':'#ffffe6'
              });
            $('a[href^="#section-3"').parent().addClass('active-section');
          }
          if(index == 4){
            //moving the image
            $('.section-4').find('.entry-content').fadeIn(1000);
            $('.section-4').find('.main-container').delay(0).animate({
              left: '0%'
            }, 500);
            $('.header-banner-color').css({
                'background':'#fcf8ee'
              });
            $('a[href^="#section-4"').parent().addClass('active-section');
          }

          if(index == 5){
            //moving the image
            $('.section-5').find('.entry-content').fadeIn(1000);
            $('.section-5').find('.main-container').delay(0).animate({
              left: '0%'
            }, 500);
            $('.header-banner-color').css({
                'background':'#ffffe6'
              });
            $('a[href^="#section-5"').parent().addClass('active-section');
          }
          if(index == 6){
            //moving the image
            $('.section-6').find('.entry-content').fadeIn(1000);
            $('.section-6').find('.main-container').delay(0).animate({
              left: '0%'
            }, 500);
            $('.header-banner-color').css({
                'background':'#ffffe6'
              });
            $('a[href^="#section-6"').parent().addClass('active-section');
          }
          
          //section 3
         /* if(anchorLink == '3rdPage'){
            //moving the image
            $('#section2').find('.intro').delay(500).animate({
              left: '0%'
            }, 1500, 'easeOutExpo');
          }
          */
        }
      });
    });

  /*$(".tothetop").click(function() {
     if ($('#sticky').hasClass('stick')){
        scrollToAnchor('top', 0);
      } else {
        scrollToAnchor('top', 0);
      } 
  });*/

/*$("#main-area").scrollview({
      sectionContainer: ".page-area-section",
        responsiveFallback: 600,
        loop: true,
        direction : 'vertical',
        beforeMove: function(){
            console.log('sfffdf');

            if($('.active').hasClass('section-1')) {
                
                $('.header').css(
                  {
                    background: "#FF0000",
                    
                  }
                  );
              }
        },

    }, function(){
      console.log('aaaadfsfdsfsdf');
    })
*/
/*$( "body" ).change(function() {
  alert( "Handler for .change() called." );
});
if($('.active').hasClass('section-1')) {
  console.log('sfffdf');
  $('.header').css(
    {
      background: "#FF0000",
      
    }
    );
}

if($('.active').hasClass('section-2')) {
  console.log('sfffdf');
  $('.header').css(
    {
      background: "#333333",
    }
  );
}


$('#menu').slicknav({
    prependTo:'body',
    closeOnClick: 'true'
});
*/

$(function() {

  //preload images 
  var lips = $('<img />').attr('src', 'http://www.pushpulldigital.co.uk/sora/wp-content/themes/sora%20new/library/images/treatments/lips.png');
  var forehead = $('<img />').attr('src', 'http://www.pushpulldigital.co.uk/sora/wp-content/themes/sora%20new/library/images/treatments/forehead.png');
  var nosebridge = $('<img />').attr('src', 'http://www.pushpulldigital.co.uk/sora/wp-content/themes/sora%20new/library/images/treatments/nose-bridge.png');
  var smokerslines = $('<img />').attr('src', 'http://www.pushpulldigital.co.uk/sora/wp-content/themes/sora%20new/library/images/treatments/smokers-lines.png');
  var TopNosegarbella = $('<img />').attr('src', 'http://www.pushpulldigital.co.uk/sora/wp-content/themes/sora%20new/library/images/treatments/Top-Nose-garbella.png');
  var cheeks = $('<img />').attr('src', 'http://www.pushpulldigital.co.uk/sora/wp-content/themes/sora%20new/library/images/treatments/cheeks.png');
  var eyewrinkle = $('<img />').attr('src', 'http://www.pushpulldigital.co.uk/sora/wp-content/themes/sora%20new/library/images/treatments/eye-wrinkle.png');
  var nasiolabial = $('<img />').attr('src', 'http://www.pushpulldigital.co.uk/sora/wp-content/themes/sora%20new/library/images/treatments/nasio-labial.png');
  
  var lips_content = $('.Lips').html();
  var eye_wrinkle_content = $('.eye_wrinkle').html();
  $(".treatment-overlays").mousemove( function(e) {
    var offset = $(this).offset();
    var relativeX = (e.pageX - offset.left);
    var relativeY = (e.pageY - offset.top);
    console.log("X: " + relativeX + "  Y: " + relativeY);

    
    if (relativeX > 70 && relativeX < 230 && relativeY < 140  ) {
      $('.treatment-overlays img').replaceWith(forehead);
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
    }
  });
});

}); /* end of as page load scripts */
