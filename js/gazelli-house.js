;(function($, undefined){
	$(".fancybox").fancybox({
        fixed		: true,
        enableEscapeButton : true,
        overlayShow : true,
		fitToView	: false,
		autoSize	: false,
		closeClick	: true,
		closeBtn	: false,
		openEffect	: 'none',
		closeEffect	: 'none',
		scrolling	: 'yes',
		width 		: 450,
		minWidth 	: 450,
		height 		: 500,
        padding		: 0,
		helpers : {
			overlay: {
				css: {'background': 'rgba(0,0,0,0.8)'} // or your preferred hex color value
			} // overlay
		} // helpers
    });

	function getForm() {
    var options = {
      // target element(s) to be updated with server response
      beforeSubmit: validateForm,
      // pre-submit callback
      success: function (response) {
        if(response["duplicate_email"]) {
          var errors = $('<div/>').attr({
            "id": "errors"
          }).html('<ul><li>' + response["duplicate_email"] + '</li></ul>');

          //$("#").append(errors);

          var oklink = $('<a/>').attr({
            "id": "oklink",
            "href": "#ok"
          }).text("OK");

          $('#errors').append(oklink);
          $("#oklink").click(function (e) {
            e.preventDefault();
            $("#errors").remove();
          });
        } else {
          $.fancybox({
            fixed: true,
            enableEscapeButton : true,
            overlayShow : true,
            content: '<div id="success-message">' + response["thanks"] + '</div>',
            fitToView: true,
            autoSize: true,
            closeClick: true,
            closeBtn: true,
            openEffect: 'none',
            closeEffect: 'none',
            scrolling: 'yes',
            padding: 0,
            afterClose: function(){
              $(window).trigger('fancyboxClosed');
            },
            helpers   : {
              overlay: {
                css: {'background': 'rgba(0,0,0,0.8)'} // or your preferred hex color value
              } // overlay
            } // helpers
          });
        }
      },
      dataType: "json"
    };

	  // bind form using 'ajaxForm'
	  $('#membership_registration').ajaxForm(options);
	  countCharacters('#interests', 120);
	  /*$("label").each(function () {
	      $(this).css("display", "none");
	  });*/
  }

  if($('#membership_registration').size()) {
    getForm();
  }

	function countCharacters(obj, count) {
	    $(obj).keyup(function (e) {
	    	if(e.keyCode != 46 || e.keyCode != 8) {
		        if ($(obj).val().length > count) {
		        	alert("Your goal must be less than 120 characters long.")
		            e.preventDefault();
		        }
		    }
		    if($(obj).val().length > count) {
		    	$(obj).val($(obj).val().substring(0, count));
		    }
		    $('#character-count > span').html(' - ' + $(obj).val().length)
	    });
	}

	function validateForm(formData, jqForm, options) {
    console.log('validating...');
    var out = true;
    return out;
	}

  var $myCarousel = $('#carousel-example-generic');
  function setCarouselInnerHeight() {
    var height;
    var img = $myCarousel.find('.item:first img');
    var ratio = img.width()/img.height();
    var adjHeight;

    var params = {
      overflow: 'hidden'
    };

    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
       params.height = $myCarousel.find('.item:first img').height() + 'px';
    } else {
      params.height = $myCarousel.find('.item:first img').height() + 'px';
    }
    if(img.width() > 1024) {

      adjHeight = 1024/ratio;
      params.height = adjHeight + 'px';
      $myCarousel.find('img').css({
        marginTop: '-' + (img.height() - adjHeight)/2 + 'px'
      });
    }
    $myCarousel.find('.carousel-inner').css(params);
  }

  $(window).resize(setCarouselInnerHeight);
  var setHeightInt = setInterval(function(){
    if($myCarousel.find('.item:first img').height() > 0) {
      setCarouselInnerHeight();
      clearInterval(setHeightInt);
    }
  }, 100);
  setCarouselInnerHeight();
  // Initialize carousel
  $myCarousel.carousel();

  $('.selectpicker').selectpicker();

  function doAnimations(elems) {
    var animEndEv = 'webkitAnimationEnd animationend';

    elems.each(function () {
      var $this = $(this),
          $animationType = $this.data('animation');

          // Add animate.css classes to
          // the elements to be animated
          // Remove animate.css classes
          // once the animation event has ended
          $this.addClass($animationType).one(animEndEv, function () {
          $this.removeClass($animationType);
        });
      });
    }

    // Select the elements to be animated
    // in the first slide on page load
    var $firstAnimatingElems = $myCarousel.find('.item:first')
    .find('[data-animation ^= "animated"]');
    // Apply the animation using our function
    doAnimations($firstAnimatingElems);

    // Pause the carousel
    $myCarousel.carousel('pause');

    // Attach our doAnimations() function to the
    // carousel's slide.bs.carousel event
    $myCarousel.on('slide.bs.carousel', function (e) {
      // Select the elements to be animated inside the active slide
      var index = $('#carousel-example-generic .item').index(e.relatedTarget);
      $('#carousel-text .carousel-indicators li:eq(' + index + ')').click();
      var $animatingElems = $(e.relatedTarget)
      .find("[data-animation ^= 'animated']");
      doAnimations($animatingElems);
    });
})(jQuery)
