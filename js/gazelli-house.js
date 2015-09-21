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
					var content = "";
					content = '<div id="form-errors"><h3>Duplicate email</h3><p>' + response["duplicate_email"] + '</p><button class="btn btn-primary">OK</button></div>';
        } else if(response["thanks"]) {
          $('#membership-registration').find('input[type=text], textarea').val("");
          $('#membership-registration').find('input[type=checkbox]').attr('checked', false);
          $('#membership-registration').find('select option:first').attr("selected", "selected");
          content = response["thanks"];
          content = '<div id="success-message">' + content + '</div>';

        } else {
          Object.keys(response).forEach(function(key, idx) {
            if(response[key]) {
              content += "<h4>" + key.replace(/_/g, ' ') + "</h4>\n";
              content += "<p>" + response[key] + "</p>\n";
            }
          });

					content = '<div id="form-errors"><h3>Registration errors</h3>' + content + '<button class="btn btn-primary">OK</button></div>';
        }
        $.fancybox({
          fixed: true,
          enableEscapeButton : true,
          overlayShow : true,
          content: content,
          fitToView: true,
          autoSize: true,
          closeClick: true,
          closeBtn: false,
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

        $('#success-message button, #form-errors button').click(function(e){
          e.preventDefault();
          $.fancybox.close();
        });
      },
      dataType: "json"
    };

	  // bind form using 'ajaxForm'
	  $('#membership-registration').ajaxForm(options);
	  countCharacters('#interests', 120);
	  /*$("label").each(function () {
	      $(this).css("display", "none");
	  });*/
  }

  if($('#membership-registration').size()) {
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
    var out = true;
    return out;
	}

  var $myCarousel = $('#carousel-example-generic');
  var $myTextCarousel = $('#carousel-text');
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
      params.height = ($myCarousel.find('.item:first img').height() - 50) + 'px';
    }
    if($myCarousel.find('.item').size() === 1) {
      params.height = ($myCarousel.find('.item:first img').height() - 120) + 'px';
    }
    if(img.width() > 1024) {
      adjHeight = 1024/ratio;
      if($myCarousel.find('.item').size() === 1) {
        params.height = (adjHeight - 120) + 'px';
      } else {
        params.height = (adjHeight - 50) + 'px';
      }
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
  $myTextCarousel.carousel({
    interval: false
  });
  $myCarousel.carousel({
    interval: 1000 * 5
  });

  $('.selectpicker').selectpicker();

  function doAnimations(elems) {
    var animEndEv = 'webkitAnimationEnd animationend';

    $myCarousel.find('img').removeClass('animation zoomIn');

    elems.each(function () {
      var $this = $(this),
        $animationType = $this.data('animation');

        // Add animate.css classes to
        // the elements to be animated
        // Remove animate.css classes
        // once the animation event has ended
        $this.addClass($animationType).one(animEndEv, function () {
      });
    });
  }

  // Select the elements to be animated
  // in the first slide on page load
  var $firstAnimatingElems = $myCarousel.find('.item:first')
  .find('[data-animation ^= "animated"]');
  // Apply the animation using our function
  doAnimations($firstAnimatingElems);

  // Attach our doAnimations() function to the
  // carousel's slide.bs.carousel event

  $myCarousel.on('slide.bs.carousel', function (e) {
    var index = $('#carousel-example-generic .item').index(e.relatedTarget);
    $('#carousel-text .carousel-indicators li:eq(' + index + ')').click();
  });
  $myCarousel.on('slid.bs.carousel', function (e) {
    var $animatingElems = $(e.relatedTarget)
    .find("[data-animation ^= 'animated']");
    doAnimations($animatingElems);
  });
})(jQuery)
