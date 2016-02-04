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
	return { width:x,height:y }
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



function sticky_relocate() {
    var window_top = $(window).scrollTop();
    var div_top = $('#sticky-anchor').offset().top;
    if (window_top > div_top) {
        $('#sticky').addClass('stick');
    //    var is_stuck = 'true'; 
    } else {
        $('#sticky').removeClass('stick');
   //     var is_stuck = 'false';
    }
    
   
}



/*
 * Put all your regular jQuery in here.
*/
jQuery(document).ready(function($) {

  /*
   * Let's fire off the gravatar function
   * You can remove this if you don't need it
  */
  loadGravatars();
  
  
  
  $('#menu-main-menu').slicknav();

if($("body").hasClass('home')){ 
	$(window).scroll(sticky_relocate);
	var isitstuck = sticky_relocate();
	//console.log (isitstuck); 
}


  $('.fancybox').fancybox();
  
  $('.fancybox-media').fancybox({
		openEffect  : 'none',
		closeEffect : 'none',
		helpers : {
			media : {}
		}
	});
	
	
	$('.front-page-gallery').on('click',function(){
      	var thmb = $(this);
	    console.log(thmb);
	    var idnum = thmb.attr('id');
	    console.log(idnum);
	    
	    //$('>.thumbs').stop();
	    $('.active-class').fadeOut(600,function(){
	    	$(this).removeClass('active-class')
			var showis = String('#slide-') + String(idnum);
			$(showis).fadeIn("fade").addClass('active-class');
		});

    });
    
    $('.inner-central-gallery-list').on('click',function(){
      	var thmb = $(this);
	    console.log(thmb);
	    var idnum = thmb.attr('id');
	    console.log(idnum);
	    
	    //$('>.thumbs').stop();
	    $('.active-class').fadeOut(600,function(){
	    	$(this).removeClass('active-class')
			var showis = String('#slide-') + String(idnum);
			$(showis).fadeIn("fade").addClass('active-class');
		});
	});
	
	/*var $active = $('li.inner-central-gallery'); // cache $(this)
	    console.log($active);
	    if ($active.is(':first-child')) {
	        $active.addClass('first'); 
	    }*/
	$('ul.inner-gallery-people > li').each(function() {
	    $this = $(this); // cache $(this)
	    if ($this.is(':first-child')) {
	        $this.addClass('first'); 
	    } 
	    if ($this.is(':last-child')) {
	        $this.addClass('last'); 
	    }
	}); 
	
	
	$('.left-arrow').on('click',function(){
		//console.log('dfggdfgdf');
		
		
		$('.active-class').fadeOut(600,function(){
			if($(this).hasClass('first')){
				$(this).removeClass('active-class')
				$('.last').fadeIn(400).addClass('active-class');
			} else {			
				$(this).removeClass('active-class').prev('li').fadeIn(400).addClass('active-class');
			}
		});
	});
	
	
	$('.right-arrow').on('click',function(){
		$('.active-class').fadeOut(600,function(){
			if($(this).hasClass('last')){
					$(this).removeClass('active-class')
					$('.first').fadeIn(400).addClass('active-class');
			} else {	
					$(this).removeClass('active-class').next('li').fadeIn(400).addClass('active-class');
			}
		});
	});
	
	/*$('ul.selector li.selector > ul').each(function() {
	    $this = $(this); // cache $(this)
	    if ($this.is(':first-child')) {
	        $this.addClass('first'); 
	    } 
	    if ($this.is(':last-child')) {
	        $this.addClass('last'); 
	    }
	});
*/

function scrollToAnchor(aid, off){
    var aTag = $("a[name='"+ aid +"']");
    $('html,body').animate({scrollTop: aTag.offset().top + off },'slow');  // -160
   // console.log('54323434234hos');
}

//$("#menu-main-menu-1 > .menu-item-16").click(function() {
  // scrollToAnchor('make');
//});
$("#menu-main-menu-1 > .menu-item-17").click(function() {
   if ($('#sticky').hasClass('stick')){
   		scrollToAnchor('support', 0);
   	} else {
	   	scrollToAnchor('support', -110);
   	}
});
$("#menu-main-menu-1 > .menu-item-16").click(function() {
   //scrollToAnchor('make', 0);
   if ($('#sticky').hasClass('stick')){
   		scrollToAnchor('make', 0);
   	} else {
	   	scrollToAnchor('make', -110);
   	}
});
$(".tothetop").click(function() {
   if ($('#sticky').hasClass('stick')){
   		scrollToAnchor('top', 0);
   	} else {
	   	scrollToAnchor('top', 0);
   	} 
});
/* end of as page load scripts */



	
	 
	$('#ack').change(function(){
		if ($(this).is(':checked')) {
               $('.acknowledge-checkboxes').addClass('active');
           } else{
	           $('.acknowledge-checkboxes').removeClass('active');
           }
    }).change();
	$('#honor').change(function(){
		if ($(this).is(':checked')) {
               $('.honor_of').addClass('active');
           } else{
	           $('.honor_of').removeClass('active');
           }
    }).change();
	
	$('#donate-1').change(function(){
		if ($(this).is(':checked')) {
               $('#donate1').removeAttr('disabled');
           } else{
	           $('#donate1').attr("disabled","disabled");
           }
    }).change();
	$('#donate-2').change(function(){
		if ($(this).is(':checked')) {
               $('#donate2').removeAttr('disabled');
           } else{
	           $('#donate2').attr("disabled","disabled");
           }
    }).change();
    $('#donate-3').change(function(){
		if ($(this).is(':checked')) {
               $('#donate3').removeAttr('disabled');
           } else{
	           $('#donate3').attr("disabled","disabled");
           }
    }).change();
	
	$('#next-form-button').click(function(){
			   value = $("#donate1").val(); 
			   console.log(value);
			   
			   $(".amount-to-update").text('$'+ value);
		       $('.form-part-2').addClass('active');
		       $(this).addClass('hide');
		       $('#donate1').attr("disabled","disabled");
		       $('#donate2').attr("disabled","disabled");
		       $('#donate3').attr("disabled","disabled");
		       
		       $('.form-one').addClass('grey');
    }).change();
    
    $('.reset').click(function(e){
    			e.preventDefault();
    		   $('#donate1').removeAttr('disabled');
    		   $('#donate2').removeAttr('disabled');
		       $('#donate3').removeAttr('disabled');
		       $('.form-one').removeClass('grey');
    });
    
    
    
	// Second Way
	//value = $("#txt_name").attr('value');

/*	if(document.getElementById('used_outreach_before').checked) {
		$('#additional-box-on-yes').addClass('active');
			}
*/

  $(document).ready(function(){
	  console.log('fgdgdffg'); 
	// this one requires the text "buga", we define a default message, too
	/*$.validator.addMethod("name1", function(value) {
		return value != "Contact Name";
	}, 'Please enter a name');
	
	$.validator.addMethod("subject1", function(value) {
		return value != "Message";
	}, 'Please enter a Message');
	*/
	$.validator.addMethod("name1", function(value) {
		return value != "Contact Name";
	}, 'Please enter a name');
	
	$.validator.addMethod("subject1", function(value) {
		return value != "Message";
	}, 'Please enter a Message');
	
	$.validator.addMethod("phone1", function(value) {
		return value != "Phone";
	}, 'Please enter a Phone Number');
	$.validator.addMethod("dob1", function(value) {
		return value != "Date Of Birth";
	}, 'Please enter a Date of Birth Number');
	$.validator.addMethod("aval1", function(value) {
		return value != "Availability (please specify days and hours of the week you are free to work)";
	}, 'Please enter Availability');

	
  $('.registration-form').validate({
  
  
    // this one requires the text "buga", we define a default message, too
	    rules: {
      
      
	form_last_name: {
		"name1":'',
        required: true
      },
      
      
	  email: {
        required: true,
        email: true
      },
     /* phone: {
      	"phone1":'',
        required: true,
      },
      dob: {
      	"dob1":'',
        required: true,
      },
      aval: {
      	"aval1":'',
        required: true,
      },
	 */
	}
  });
  
  
  
  
  
  
});


	
}); 

