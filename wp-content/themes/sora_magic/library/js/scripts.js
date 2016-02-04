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


/**
 * jQuery.browser.mobile (http://detectmobilebrowser.com/)
 * jQuery.browser.mobile will be true if the browser is a mobile device
 **/
//jQuery(document).ready(function(a){jQuery.browserMobile=/android|avantgo|bada/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(ad|hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)/|plucker|pocket|psp|symbian|tablet|treo|up.(browser|link)|vodafone|wap|webos|windows (ce|phone)|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw-(n|u)|c55/|capi|ccwa|cdm-|cell|chtm|cldc|cmd-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc-s|devi|dica|dmob|do(c|p)o|ds(12|-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(-|_)|g1 u|g560|gene|gf-5|g-mo|go(.w|od)|gr(ad|un)|haie|hcit|hd-(m|p|t)|hei-|hi(pt|ta)|hp( i|ip)|hs-c|ht(c(-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i-(20|go|ma)|i230|iac( |-|/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |/)|klon|kpt |kwc-|kyo(c|k)|le(no|xi)|lg( g|/(k|l|u)|50|54|e-|e/|-[a-w])|libw|lynx|m1-w|m3ga|m50/|ma(te|ui|xo)|mc(01|21|ca)|m-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|-([1-8]|c))|phil|pire|pl(ay|uc)|pn-2|po(ck|rt|se)|prox|psio|pt-g|qa-a|qc(07|12|21|32|60|-[2-7]|i-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55/|sa(ge|ma|mm|ms|ny|va)|sc(01|h-|oo|p-)|sdk/|se(c(-|0|1)|47|mc|nd|ri)|sgh-|shar|sie(-|m)|sk-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h-|v-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl-|tdg-|tel(i|m)|tim-|t-mo|to(pl|sh)|ts(70|m-|m3|m5)|tx-9|up(.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|xda(-|2|g)|yas-|your|zeto|zte-/i.test(a.substr(0,4))})(navigator.userAgent||navigator.vendor||window.opera);
/*
$('.entry-content').hide();
$('.main-container').css({
  'position':'relative',
  'left':'60%',
});
*/  

if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
 // some code..
} else {

  Height = jQuery( window ).height();
  Width = jQuery( window ).width();

var controller = new ScrollMagic.Controller({globalSceneOptions: {triggerHook: "onEnter", duration: "200%"}});
var $logo = $('.logo-container');

var intro = new TimelineMax();
intro
           // .from($logo, 1, {yPercent: 50,xPercent: 100, ease: Power4.easeInOut})
            .to($logo, 4, {opacity: 1}, '0');

var iphoneIntroTl = new TimelineMax();
        iphoneIntroTl
           // .from($logo, 1, {yPercent: 50,xPercent: 100, ease: Power4.easeInOut})
            .to($logo, 1, {opacity: 0, top: -200, scale: 0.98}, '0');
            // .to()
            // build scenes
            new ScrollMagic.Scene({triggerElement: "#parallax1"})
                    .setTween("#parallax1 > section", {y: "40%", ease: Linear.easeNone})
                    //.setTween(iphoneIntroTl)
                    .addIndicators()
                    .addTo(controller);
            new ScrollMagic.Scene({triggerElement: "#parallax2", duration: "10%"})
                    //.setTween("#parallax1 > section", {y: "40%", ease: Linear.easeNone})
                    .setTween(iphoneIntroTl)
                    .addIndicators()
                    .addTo(controller);

            new ScrollMagic.Scene({triggerElement: "#parallax2"})
                    .setTween("#parallax2 > section", {y: "40%", ease: Linear.easeNone})
                    .addIndicators()
                    .addTo(controller);

            new ScrollMagic.Scene({triggerElement: "#parallax3"})
                    .setTween("#parallax3 > section", {y: "100%", ease: Linear.easeNone})
                    .addIndicators()
                    .addTo(controller);
            new ScrollMagic.Scene({triggerElement: "#parallax4"})
                    .setTween("#parallax4 > section", {y: "100%", ease: Linear.easeNone})
                    .addIndicators()
                    .addTo(controller);
            new ScrollMagic.Scene({triggerElement: "#parallax5"})
                    .setTween("#parallax5 > section", {y: "100%", ease: Linear.easeNone})
                    .addIndicators()
                    .addTo(controller);
}

function scrollToAnchor(aid, off){
    var aTag = $("a[name='"+ aid +"']");
    $('html,body').animate({scrollTop: aTag.offset().top + off },'slow');  // -160
      console.log('54323434234hos');
  }

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

/*

var ctrl = new ScrollMagic.Controller({
            globalSceneOptions: {
                triggerHook: 'onLeave'
            }
        });

        var $logo = $('.logo-container');


        var iphoneIntroTl = new TimelineMax();
        iphoneIntroTl
           // .from($logo, 1, {yPercent: 50,xPercent: 100, ease: Power4.easeInOut})
            .to($logo, 200, {opacity: 0, yPercent: -50, scale: 0.98}, '0');
            // .to()
        var bgtween = new TimelineMax();
        bgtween.to(this, 200, {opacity: 0, yPercent: -50, scale: 2}, '0');
            // .to()
        // Create scene
        $(".section-1").each(function() {
          
            new ScrollMagic.Scene({
                //triggerElement: this,
                duration: '100%'
            })
            .triggerElement($('body')[0])
            //.setPin(this)
            .setTween(iphoneIntroTl)
            .addIndicators()
            .loglevel(3)
            .addTo(ctrl);

            new ScrollMagic.Scene({
                //triggerElement: this,
                duration: '0%'
            })
            .triggerElement($('body')[0])
            //.setPin(this)
            .setTween(bgtween)
            .addIndicators()
            .loglevel(3)
            .addTo(ctrl);
         
        });

        // Create scene
        $(".section-2").each(function() {
          
            new ScrollMagic.Scene({
                triggerElement: this,
                duration: '0%'
            })
            //.triggerElement($('body')[0])
            .setPin(this)
            //.setTween(iphoneIntroTl)
            .addIndicators()
            .loglevel(3)
            .addTo(ctrl);
         
        });
        $(".section-3").each(function() {
          
            new ScrollMagic.Scene({
                triggerElement: this,
                duration: '0%'
            })
            //.triggerElement($('body')[0])
            .setPin(this)
            //.setTween(iphoneIntroTl)
            .addIndicators()
            .loglevel(3)
            .addTo(ctrl);
         
        });
*/
// Create scene
      /*  $(".section").each(function() {
          
            new ScrollMagic.Scene({
                //triggerElement: this,
                duration: '100%'
            })
            .setPin(this)
            .addIndicators()
            .loglevel(3)
            .addTo(ctrl);
         
        });*/
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

*/
$('#menu').slicknav({
    prependTo:'body',
    closeOnClick: 'true'
});


$(function() {

  //preload images 
  var lips = $('<img />').attr('src', 'http://localhost/sora/wp-content/themes/sora%20new/library/images/treatments/lips.png');
  var forehead = $('<img />').attr('src', 'http://localhost/sora/wp-content/themes/sora%20new/library/images/treatments/forehead.png');
  var nosebridge = $('<img />').attr('src', 'http://localhost/sora/wp-content/themes/sora%20new/library/images/treatments/nose-bridge.png');
  var smokerslines = $('<img />').attr('src', 'http://localhost/sora/wp-content/themes/sora%20new/library/images/treatments/smokers-lines.png');
  var TopNosegarbella = $('<img />').attr('src', 'http://localhost/sora/wp-content/themes/sora%20new/library/images/treatments/Top-Nose-garbella.png');
  var cheeks = $('<img />').attr('src', 'http://localhost/sora/wp-content/themes/sora%20new/library/images/treatments/cheeks.png');
  var eyewrinkle = $('<img />').attr('src', 'http://localhost/sora/wp-content/themes/sora%20new/library/images/treatments/eye-wrinkle.png');
  var nasiolabial = $('<img />').attr('src', 'http://localhost/sora/wp-content/themes/sora%20new/library/images/treatments/nasio-labial.png');
  
  var lips_content = $('.Lips').html();
  var eye_wrinkle_content = $('.eye_wrinkle').html();
  $(".treatment-overlays").mousemove( function(e) {
    var offset = $(this).offset();
    var relativeX = (e.pageX - offset.left);
    var relativeY = (e.pageY - offset.top);
   // console.log("X: " + relativeX + "  Y: " + relativeY);

    
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
