

//=============================
jQuery(document).ready(function ($) {
            
            var jssor_1_SlideoTransitions = [
              [{b:5500,d:3000,o:-1,r:240,e:{r:2}}],
              [{b:-1,d:1,o:-1,c:{x:51.0,t:-51.0}},{b:0,d:1000,o:1,c:{x:-51.0,t:51.0},e:{o:7,c:{x:7,t:7}}}],
              [{b:-1,d:1,o:-1,sX:9,sY:9},{b:1000,d:1000,o:1,sX:-9,sY:-9,e:{sX:2,sY:2}}],
              [{b:-1,d:1,o:-1,r:-180,sX:9,sY:9},{b:2000,d:1000,o:1,r:180,sX:-9,sY:-9,e:{r:2,sX:2,sY:2}}],
              [{b:-1,d:1,o:-1},{b:3000,d:2000,y:180,o:1,e:{y:16}}],
              [{b:-1,d:1,o:-1,r:-150},{b:7500,d:1600,o:1,r:150,e:{r:3}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:9100,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:10000,d:1600,x:-200,o:-1,e:{x:16}}],
              [{b:0,d:1000,rX:20},{b:1000,d:500,rX:-10}],
              [{b:0,d:1500,r:360}],
              [{b:0,d:520,y:50},{b:2000,d:1000,y:-50}],
              [{b:520,d:480,x:-400},{b:2000,d:800,x:400,e:{x:7}}],
              [{b:1000,d:500,x:-400},{b:2000,d:800,x:400,e:{x:7}}],
              [{b:1500,d:500,x:-400},{b:2000,d:800,x:400,e:{x:7}}]
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions,
                $Breaks: [
                  [{d:2000,b:2500}],
                  [{d:2000,b:2500}]
                ]
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
//========================================

$(document).ready(function() {		
	
	//Execute the slideShow
	slideShow();

});

function slideShow() {

	//Set the opacity of all {{ url('public/fontend') }}/images to 0
	$('#gallery a').css({opacity: 0.0});
	
	//Get the first image and display it (set it to full opacity)
	$('#gallery a:first').css({opacity: 1.0});
	
	//Set the caption1 background to semi-transparent
	$('#gallery .caption1').css({opacity: 1.0});

	//Resize the width of the caption1 according to the image width
	$('#gallery .caption1').css({width: $('#gallery a').find('img').css('width')});
	
	//Get the caption1 of the first image from REL attribute and display it
	$('#gallery .content1').html($('#gallery a:first').find('img').attr('rel'))
	.animate({opacity: 0.7}, 400);
	
	//Call the gallery function to run the slideshow, 6000 = change to next image after 6 seconds
	setInterval('gallery()',6000);
	
}

function gallery() {
	
	//if no IMGs have the show class, grab the first image
	var current = ($('#gallery a.show')?  $('#gallery a.show') : $('#gallery a:first'));

	//Get next image, if it reached the end of the slideshow, rotate it back to the first image
	var next = ((current.next().length) ? ((current.next().hasClass('caption1'))? $('#gallery a:first') :current.next()) : $('#gallery a:first'));	
	
	//Get next image caption1
	var caption1 = next.find('img').attr('rel');	
	
	//Set the fade in effect for the next image, show class has higher z-index
	next.css({opacity: 0.0})
	.addClass('show')
	.animate({opacity: 1.0}, 1000);

	//Hide the current image
	current.animate({opacity: 0.0}, 1000)
	.removeClass('show');
	
	//Set the opacity to 0 and height to 1px
	$('#gallery .caption1').animate({opacity: 0.0}, { queue:false, duration:0 }).animate({height: '1px'}, { queue:true, duration:300 });	
	
	//Animate the caption1, opacity to 0.7 and heigth to 100px, a slide up effect
	$('#gallery .caption1').animate({opacity: 0.7},100).animate({height: '80px'},400);
	
	//Display the content
	$('#gallery .content1').html(caption1);
	
	
}
/* width="100%" height="350px"*/

//========================================

$(document).ready(function() {    
  
  //Execute the slideShow
  slideShow1();

});

function slideShow1() {

  //Set the opacity of all {{ url('public/fontend') }}/images to 0
  $('#gallery1 a').css({opacity: 0.0});
  
  //Get the first image and display it (set it to full opacity)
  $('#gallery1 a:first').css({opacity: 1.0});
  
  //Set the caption1 background to semi-transparent
  $('#gallery1 .caption1').css({opacity: 1.0});

  //Resize the width of the caption1 according to the image width
  $('#gallery1 .caption1').css({width: $('#gallery1 a').find('img').css('width')});
  
  //Get the caption1 of the first image from REL attribute and display it
  $('#gallery1 .content1').html($('#gallery1 a:first').find('img').attr('rel'))
  .animate({opacity: 1.0}, 400);
  
  //Call the gallery function to run the slideshow, 6000 = change to next image after 6 seconds
  setInterval('gallery1()',6000);
  
}

function gallery1() {
  
  //if no IMGs have the show class, grab the first image
  var current = ($('#gallery1 a.show1')?  $('#gallery1 a.show1') : $('#gallery1 a:first'));

  //Get next image, if it reached the end of the slideshow, rotate it back to the first image
  var next = ((current.next().length) ? ((current.next().hasClass('caption1'))? $('#gallery1 a:first') :current.next()) : $('#gallery1 a:first'));  
  
  //Get next image caption1
  var caption1 = next.find('img').attr('rel');  
  
  //Set the fade in effect for the next image, show class has higher z-index
  next.css({opacity: 0.0})
  .addClass('show1')
  .animate({opacity: 0.7}, 1000);

  //Hide the current image
  current.animate({opacity: 0.0}, 1000)
  .removeClass('show1');
  

  
  
}
/* width="100%" height="350px"*/

(function($) {

  $.fn.menumaker = function(options) {
      
      var cssmenu = $(this), settings = $.extend({
        title: "Menu",
        format: "dropdown",
        sticky: false
      }, options);

      return this.each(function() {
        cssmenu.prepend('<div id="menu-button">' + settings.title + '</div>');
        $(this).find("#menu-button").on('click', function(){
          $(this).toggleClass('menu-opened');
          var mainmenu = $(this).next('ul');
          if (mainmenu.hasClass('open')) { 
            mainmenu.hide().removeClass('open');
          }
          else {
            mainmenu.show().addClass('open');
            if (settings.format === "dropdown") {
              mainmenu.find('ul').show();
            }
          }
        });

        cssmenu.find('li ul').parent().addClass('has-sub');

        multiTg = function() {
          cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
          cssmenu.find('.submenu-button').on('click', function() {
            $(this).toggleClass('submenu-opened');
            if ($(this).siblings('ul').hasClass('open')) {
              $(this).siblings('ul').removeClass('open').hide();
            }
            else {
              $(this).siblings('ul').addClass('open').show();
            }
          });
        };

        if (settings.format === 'multitoggle') multiTg();
        else cssmenu.addClass('dropdown');

        if (settings.sticky === true) cssmenu.css('position', 'fixed');

        resizeFix = function() {
          if ($( window ).width() > 768) {
            cssmenu.find('ul').show();
          }

          if ($(window).width() <= 768) {
            cssmenu.find('ul').hide().removeClass('open');
          }
        };
        resizeFix();
        return $(window).on('resize', resizeFix);

      });
  };
})(jQuery);

(function($){
$(document).ready(function(){

$("#cssmenu").menumaker({
   title: "Menu",
   format: "multitoggle"
});

});
})(jQuery);



