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

	$('.admin.nav-tabs a').click(function() {
		$('.nav-tabs li').removeClass('active');
		$(this).parent('li').addClass('active');
		var activeTab = $(this).text().toLowerCase();
		$('.tab').hide();
		$('.tab.' + activeTab).show();
	});

	if($('.admin.nav-tabs li.active a').size() > 0) {
		$('.tab.' + $('.admin.nav-tabs li.active a').text().toLowerCase()).show();
	}


	//initDate();
	//initEvents();
	var calendar = initCalendar();
	var date = initDate();
	var events;

	$('#new-event').click(function() {
		editEvent(false);
	});

	getEvents();

	$('#add-event').click(function() {
		var date = $('*[data-cal-date].active');
		if(date.size() === 1) {
			date = date.data('cal-date');
		} else {
			date = $('div.cal-day-today').find('*[data-cal-date]');
			date = date.data('cal-date');
		}
	});

	setClick();
	var date;

	function initCalendar() {
		var calendar = $("#calendar").calendar(
	  {
	    tmpl_path: "/tmpls/",
	    tmpl_cache: false,
	    weekbox: false,
	    events_source: function () { return []; },
	    onAfterViewLoad: function(view) {
				//$('.month-title').text(this.getTitle().split(' ')[0]);
	      $('.month-title').text(this.getTitle());
	      $('.cal-month-day > span').each(function(){
	        if($(this).text().length < 2) {
	          $(this).text('0' + $(this).text());
	        }
	      });
			}
	  });

		$('.calendar-nav button[data-calendar-nav]').each(function() {
			var $this = $(this);
			$this.click(function() {
				calendar.navigate($this.data('calendar-nav'));
				date = calendar.options.day;
				getEvents();
				setClick();
			});
		});

		return calendar;
	};

	function initDate() {
		date = $('*[data-cal-date].active');
	  if(date.size() === 1) {
	    date = date.data('cal-date');
	  } else {
	    date = $('div.cal-day-today').find('*[data-cal-date]');
	    date = date.data('cal-date');
	  }
		return date;
	};

	function getEvents() {
		var data = {};
		data.date = date;

		if($('.admin').size() === 0) {
			data.active = '1';
		}

		$.ajax({
			url: "/lib/get-events.php",
			context: document.body,
			method: "POST",
			dataType: 'json',
			data: data
		}).done(function(result) {
			events = result;
			buildEvents();
		});
	};

	function buildEvents() {
		$('#events').empty();
		if(events.length > 0) {
			var momentDate = moment(events[0]['date']);
			var eventsHeaderEl = $('<h3/>', {
				class: 'event-heading',
				text: momentDate.format('MMMM') + ' ' + momentDate.format('YYYY')
			}).appendTo($('#events'));

			var accordion = $('<div/>', {
				id: 'events',
				class: 'panel-group'
			});
			events.forEach(function(event, idx){
				$('*[data-cal-date="' + event['date'] + '"]').addClass('event-day');
				var eventEl = $('<div/>', {
					class: 'panel panel-default'
				});
				var eventHeaderEl = $('<div/>', {
					class: 'panel-heading'
				});
				var eventTitleEl = $('<h4/>', {
					class: 'panel-title'
				});

				var eventHeaderLinkEl = $('<a/>', {
					'data-toggle': 'collapse',
					'data-parent': '#events',
					'href': '#collapse' + idx,
					'id': event['date']
				});

				eventHeaderLinkEl.click(function() {
					$('.panel-title > a').removeClass('active');
					$(this).addClass('active');
					editEvent(idx);
				});

				var momentDate = moment(event['date']);
				var eventDateEl = $('<span/>', {
					class: 'event-date',
					text: momentDate.format('ddd') + ' ' + momentDate.format('Do')
				}).appendTo(eventHeaderLinkEl);
				var titleOpts = {};
				titleOpts.class = 'event-title';

				if(event['host']) {
					titleOpts.html  = event['title'] + ' <span>with ' + event['host'] + '</span>';
				} else {
					titleOpts.text = event['title'];
				}

				var eventTitle = $('<span/>', titleOpts).appendTo(eventHeaderLinkEl);

				if(date === event['date']) {
					eventHeaderLinkEl.addClass('active');
				}

				$(eventHeaderLinkEl).appendTo(eventTitleEl);
				$(eventTitleEl).appendTo(eventHeaderEl);

				var eventPanelEl = $('<div/>', {
					id: 'collapse' + idx,
					class: 'panel-collapse collapse'
				});

				var eventBodyEl = $('<div/>', {
					class: 'event-description panel-body row',
					html: '<p class="col-xs-9" style="padding-bottom: 10px;">' + event['description'] + '</p>'
				}).appendTo(eventPanelEl);

				if(event['image']) {
					var eventImageEl = $('<img/>', {
						class: 'event-image col-xs-3',
						src: '/images/events/' + event['image']
					}).appendTo(eventBodyEl);
				}

				var footerHtml = "";
				if(event['price'] !== '') {
					footerHtml += '<strong>price:</strong><span>' + event['price'] + '</span>';
				}
				if(event['time'] !== '') {
					footerHtml += '<strong>time:</strong><span>' + event['time'] + '</span>';
				}
				if(event['duration'] !== '') {
					footerHtml += '<strong>duration:</strong><span>' + event['duration'] + '</span>';
				}
				if(event['location'] !== '') {
					footerHtml += '<strong>location:</strong><span>' + event['location'] + '</span>';
				}


				var eventFooterEl = $('<div/>', {
					class: 'event-footer col-xs-9',
					html:  footerHtml
				}).appendTo(eventBodyEl);

				if(event['eventbrite_code']) {
					var eventBriteCodeEl = $('<div/>', {
						style: 'width: 100%; text-align: left;',
						class: 'event-brite col-xs-12',
						html: '<div class="btn"></div><a target="_blank" class="btn btn-default" href="' + event['eventbrite_code'] + '" ref="ebtn">Book now</a>'
					}).appendTo(eventBodyEl);
				}

				$(eventHeaderEl).appendTo(eventEl);
				$(eventPanelEl).appendTo(eventEl);

				$(eventEl).appendTo($('#events'));
			});

			$("*[data-toggle='collapse']").click(function() {
				$('*[data-cal-date]').removeClass('active');
				$('*[data-cal-date="' + $(this).attr('id') + '"]').addClass('active');
			});

			$(".collapse").on("hide.bs.collapse", function(){
		    $(this).prev('.panel-heading').first().removeClass('open');
				$('*[data-cal-date="' + $(this).attr('id') + '"]').addClass('active');
		  });
		  $(".collapse").on("show.bs.collapse", function(){
		    $(this).prev('.panel-heading').first().addClass('open');

		  });
		}
	};

	function editEvent(idx) {
		if(idx !== false) {
			$('#delete').show();
			var event = events[idx];
			$('#id').val(event['id']);
			$('#title').val(event['title']);
			$('#date').val(event['date']);
			$('#host').val(event['host']);
			$('#description').val(event['description']);
			$('#price').val(event['price']);
			$('#time').val(event['time']);
			$('#duration').val(event['duration']);
			$('#location').val(event['location']);
			$('#eventbrite_code').val(event['eventbrite_code']);
			$('#active').prop('checked', event['active'] == 1);
		} else {
			$('#delete').hide();
			$('#id').val('');
			$('#title').val('');
			$('#date').val('');
			$('#host').val('');
			$('#description').val('');
			$('#price').val('');
			$('#time').val('');
			$('#duration').val('');
			$('#location').val('');
			$('#eventbrite_code').val('');
			$('#active').prop('checked', false);
		}
	};

	function setClick() {
		$('*[data-cal-date]').off();
		$('*[data-cal-date]').unbind();
		$('*[data-cal-date]').dblclick(function(event) {
			event.preventDefault();
			event.stopPropagation();
		});
		$('*[data-cal-date]').click(function(event) {
			event.preventDefault();
			event.stopPropagation();
			$('*[data-cal-date]').removeClass('active');
			$(this).addClass('active');
			//console.log($(this).data('cal-date'));
			var calDate = $(this).data('cal-date');
			$('#new-event #date').val(calDate);
			$($('a#' + calDate).attr('href')).collapse('show');
		});
	};




	function getForm() {
    var options = {
      // target element(s) to be updated with server response
      beforeSubmit: validateForm,
      // pre-submit callback
      success: function (response) {
				var content = "";
        if(response["duplicate_email"]) {
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
		$('#membership-registration').find('input[value$="-other"][type=checkbox]').change(function(){
			var text = $(this).siblings('input').first();
			if(!$(this).is(':checked')) {
				text.val('');
			} else {
				text.focus();
			}
		});

		$('#membership-registration').find('input[name$="-other"][type=text]').keyup(function() {
			var checkbox = $(this).siblings('input').first();
			if($(this).val()) {
				checkbox.prop('checked', true);
      } else {
				checkbox.prop('checked', false);
			}
		});
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
		var errors = [];

		// var interests = _.chain(formData).filter(function(data) {
		// 	return data.name === "interests";
		// }).first().get('value').value();
		//
		// var share = _.filter(formData, function(data) {
		// 	return data.name === "share[]";
		// });
		//
		// var surround = _.filter(formData, function(data) {
		// 	return data.name === "surround[]";
		// });
		//
		// var time = _.filter(formData, function(data) {
		// 	return data.name === "time[]";
		// });
		//
		// var activities = _.filter(formData, function(data) {
		// 	return data.name === "activities[]";
		// });
		//
		// if(!interests || (interests.split(' ').length < 40 || interests.split(' ').length > 110)) {
		// 	errors["Interests 1"] = "Your answer for Interests 1 must be between 50-100 words";
		// 	console.log(interests);
		// 	out = false;
		// }
		//
		// if(activities.length > 3) {
		// 	errors["Interests 2"] = "You cannot select more than 3 options from Interests question 2";
		// 	out = false;
		// }
		//
		// if(time.length > 3) {
		// 	errors["Interests 3"] = "You cannot select more than 3 options from Interests question 4";
		// 	out = false;
		// }
		//
		// if(surround.length > 3) {
		// 	errors["Interests 5"] = "You cannot select more than 3 options from Interests question 5";
		// 	out = false;
		// }
		//
		// if(share.length > 3) {
		// 	errors["Interests 9"] = "You cannot select more than 3 options from Interests question 9";
		// 	out = false;
		// }
		//
		var terms = _.filter(formData, function(data) {
			return data.name === "terms";
		})

		var shareOther = _.filter(formData, function(data) {
			return data.name === "share[]" && data.value === 'share-other';
		})

		if(shareOther.length > 0 && _.chain(formData).filter(function(data) { return data.name === 'share-other'}).first().get('value').value() === "") {
			errors["Share - other"] = "You must supply your alternative option";
			out = false;
		}

		var enjoyOther = _.filter(formData, function(data) {
			return data.name === "enjoy[]" && data.value === 'enjoy-other';
		})

		if(enjoyOther.length > 0 && _.chain(formData).filter(function(data) { return data.name === 'enjoy-other'}).first().get('value').value() === "") {
			errors["Enjoy - other"] = "You must supply your alternative option";
			out = false;
		}

		if(terms.length !== 1) {
			errors["Terms"] = "You must agree to the terms and conditions";
			out = false;
		}

		if(_.keys(errors).length > 0) {
			var error = '';
			Object.keys(errors).forEach(function(key, idx) {
				if(errors[key]) {
					error += "<h4>" + key.replace(/_/g, ' ') + "</h4>\n";
					error += "<p>" + errors[key] + "</p>\n";
				}
			})

			content = '<div id="form-errors"><h3>There\'s a problem</h3>' + error + '<button class="btn btn-primary">OK</button></div>';
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
