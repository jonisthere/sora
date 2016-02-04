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
  
  
  
  
  
 
  
  
  
  
  
  var checkednumber;
  $('#donate-1').click(function(){
  	  $("#donate1").removeAttr("disabled");
  	  $("#donate2").attr("disabled", "disabled");
  	  $("#donate3").attr("disabled", "disabled");
      $("#donate1").focus();
      checkednumber = '#donate1';
      //alert(checkednumber);
  });
  $('#donate-2').click(function(){
  	  $("#donate2").removeAttr("disabled");
  	  $("#donate1").attr("disabled", "disabled");
  	  $("#donate3").attr("disabled", "disabled");
      $("#donate2").focus();
      checkednumber = '#donate2';
      //alert(checkednumber);
  });
  $('#donate-3').click(function(){
  	  $("#donate3").removeAttr("disabled");
  	  $("#donate1").attr("disabled", "disabled");
  	  $("#donate2").attr("disabled", "disabled");
      $("#donate3").focus();
      checkednumber = '#donate3';
      //alert(checkednumber);
  });

  
  
  
		$('#next-form-button').click(function(){
			   //alert('hii');
			   if( $('#donate-1').is(':checked') ) {
				   value = $("#donate1").val(); 
				   donatenum = '.check-for-error1'; 
				   freq = 'per month for 2 years ';
				   $('#freq').val('monthly');
				   //isNumeric(value, 'Numbers only please!');			   
			   }
			   if( $('#donate-2').is(':checked') ) {
				   value = $("#donate2").val(); 	
				   donatenum = '.check-for-error2'; 	
				   freq = 'per year for 2 years ';
				   $('#freq').val('yearly');
				   //isNumeric(value, 'Numbers only please!');			   
			   }
			   if( $('#donate-3').is(':checked') ) {
				   value = $("#donate3").val(); 			
				   donatenum = '.check-for-error3'; 
				   freq = '';
				   $('#freq').val('single');
				   //isNumeric(value, 'Numbers only please!');	   
			   }
			   //console.log(value);
			   
			   //isNumeric(value), 'Numbers only please!');
			   var numericExpression = /^[0-9]+$/;
			   
			   if(value.match(numericExpression)){
			   	   $('.paypal-donate-box').addClass('next-unlocked');
			   
				   $(".amount-to-update").text('$'+ value);
				   $(".frequency-of-pledge").text(freq);  
				   
			       //$('.form-part-2').removeClass('slide-up');
			       //$('.form-part-2').fadeIn(1000);
			       //$(this).addClass('hide');
			  
			  //MAY HAVE REDISABLE THIS PART BUT IF WE DO THEN HAVE TO CARRY FORWARD THE VALUE AND TIME FREQUENCY AT THIS POINT AS THE FORM WONT CARRY VALUE OF DISABLED FORM ELEMENT" 
			  
			  
			  
			  //     $('#donate1').attr("disabled","disabled");
			  //     $('#donate2').attr("disabled","disabled");
			  //     $('#donate3').attr("disabled","disabled");
			       
			       $('.form-one').addClass('grey');
			       
			       //$('.i-wish-to-donate').addClass('hide-form-item');
				   //$('#next-form-button').addClass('hide-form-item');
				   $('#next-form-button').fadeOut( function(){
					   $('.form-part-2').fadeIn();
				   });
				   
				   //$('.form-part-2').addClass('active');
			       //$('.form-part-2').fadeIn();
			       
			       $('.check-for-error1').removeClass('has-error');
			   	   $('.check-for-error2').removeClass('has-error');
			   	   $('.check-for-error3').removeClass('has-error');
				   $('.paypal-donate-box-inner .radio-btn input').addClass('hide-form-item');
				   $('.radio-btn').addClass('moveleft');
				   return true; 
			   
			   }else{
			   	   alert('Please enter numbers only!');
			   	   $(donatenum).addClass('has-error');
				   
			   	   value.focus();
			   		
			   	   return false;
			   }
			   
		      		       
		}).change();
    
    
    
    function isNumeric(elem, helperMsg){
		var numericExpression = /^[0-9]+$/;
		if(elem.value.match(numericExpression)){
			
			   return true;
			  
		}else{
			alert(helperMsg);
			elem.focus();
			return false;
		}
	}	
    
    $('.reset').click(function(e){
    			e.preventDefault();
    		   /*
    		   $('#donate1').removeAttr('disabled');
    		   $('#donate2').removeAttr('disabled');
		       $('#donate3').removeAttr('disabled');
		       */
		       $('#donate1').removeAttr("disabled");
		       $("#donate2").attr("disabled", "disabled");
		       $("#donate3").attr("disabled", "disabled");
		       $('#donate-1').attr("checked", "checked");
		       $('.form-one').removeClass('grey');
		       $('.i-wish-to-donate').removeClass('hide-form-item');
		       
		       $('.form-part-2').fadeOut();
		       //$('.form-part-2').removeClass('active');
		       
		       //$('#next-form-button').removeClass('hide');
		       $('.checkbox.form-one').fadeIn();
		       //$('.checkbox.form-one').removeClass('hide-form-item');
		       
		       $('#next-form-button').fadeIn();
		       //$('#next-form-button').removeClass('hide-form-item');
		       
		       $('.paypal-donate-box-inner .radio-btn input').removeClass('hide-form-item');
			   $('.radio-btn').removeClass('moveleft');
		       //alert('removeee');
    });
    







  
  
  
  
  

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
    $('#callme').change(function(){
		if ($(this).is(':checked')) {
               $('.call-me-donation').addClass('active');
           } else{
	           $('.call-me-donation').removeClass('active');
           }
    }).change();
	
	
	
	/*
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
    */
		
	
	
	    
	// Second Way
	//value = $("#txt_name").attr('value');

/*	if(document.getElementById('used_outreach_before').checked) {
		$('#additional-box-on-yes').addClass('active');
			}
*/	






	//Display None Method
	$('#tab1').click(function(){
		
        if($('.tab1').hasClass('hide')){
			
			$('.tabwrap').find('tab').removeClass('active');
			$('.tabwrap').find('tab').addClass('hide');
			
			$('.tab2').addClass('hide');
			$('.tab3').addClass('hide');
			$('.tab2').removeClass('active');
			$('.tab3').removeClass('active');
			
			
			$('.tab1').removeClass('hide');
			$('.tab1').addClass('active');
			
		} else {}
	});
	
	$('#tab2').click(function(){
		
        if($('.tab2').hasClass('hide')){
			
			$('.tabwrap').find('tab').removeClass('active');
			$('.tabwrap').find('tab').addClass('hide');
			
			$('.tab1').addClass('hide');
			$('.tab3').addClass('hide');
			$('.tab1').removeClass('active');
			$('.tab3').removeClass('active');
			
			
			$('.tab2').removeClass('hide');
			$('.tab2').addClass('active');
			
		} else {}
	});
	
	$('#tab3').click(function(){
		
        if($('.tab3').hasClass('hide')){
			
			$('.tabwrap').find('tab').removeClass('active');
			$('.tabwrap').find('tab').addClass('hide');
			
			$('.tab1').addClass('hide');
			$('.tab2').addClass('hide');
			$('.tab1').removeClass('active');
			$('.tab1').removeClass('active');
			
			
			$('.tab3').removeClass('hide');
			$('.tab3').addClass('active');
			
		} else {}
	});
	
	
	
	
	
	
	
	
	
	// Fade Out Method
	$('#tab1').click(function(){
		
        	$('.tab2').fadeOut();
			$('.tab3').fadeOut();
			
			$('.tab1').delay(400).fadeIn();
		
	});
	
	$('#tab2').click(function(){
		
        	$('.tab1').fadeOut();
			$('.tab3').fadeOut();
			$('.tab2').delay(400).fadeIn();
		
	});
	
	$('#tab3').click(function(){
		
        	$('.tab1').fadeOut();
			$('.tab2').fadeOut();
			$('.tab3').delay(400).fadeIn();
	});

		
	
}); 

