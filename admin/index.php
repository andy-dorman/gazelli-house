<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
require '../lib/config.php';
require '../lib/Mobile_Detect.php';
require "../lib/db.php";
$detect = new Mobile_Detect;
$path = $_SERVER['DOCUMENT_ROOT']."/download/"; // change the path to fit your websites document structure
$fullPath = $path."gazellihouse.xls";
$fh = fopen($fullPath, 'w');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Walton's Street SE3's newest secret! Full details will be revealed in February 2015, but for now we ask you this: if you could achieve one thing, what would it be? Determine your goal, lock it safely with us, and you’ll have already taken the first step towards making it happen.">
<meta name="keywords" content="inspire, goal, inspiration, dream, live, learn, family, london, south kensington, walton street, secret, event, launch, new, spa, treatment, facial, massage, skincare, skin, advice, help, mentor, explore, wellbeing, wellness, emotion, emotional, journey, health, body, mind, soul, captivate, engage, interact, innovative, different, concept, groundbreaking, key, lock, safe, unlock, potential, discover">
<meta name="author" content="">

<title>Gazelli House - admin</title>

<!-- Bootstrap core CSS -->

<link href="/bower_components/bootstrap-calendar/css/calendar.css" rel="stylesheet">
<link href="../stylesheets/jquery.fancybox.css" rel="stylesheet">
<link href="../stylesheets/style.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Favicons -->
<link rel="apple-touch-icon-precomposed" href="..//apple-touch-icon-precomposed.png">
<link rel="icon" href="../favicon.ico">

  </head>
  <body>
    <div class="container">
      <ul class="nav nav-tabs">
        <li role="presentation" class="active"><a href="#">Events</a></li>
        <li role="presentation"><a href="#">Registrations</a></li>
      </ul>
      <div class="events tab">
        <div class="row">
          <div id="calendar-container" class="col-xs-10">
            <div class="calendar-nav">
              <button class="btn btn-primary" data-calendar-nav="prev"><i class="fa fa-caret-left"></i></button>
              <h4 class="month-title"></h4>
              <button class="btn btn-primary" data-calendar-nav="next"><i class="fa fa-caret-right"></i></button>
            </div>
            <div id="calendar"></div>
          </div>
          <div class="col-xs-2">
            <button id="new-event">New event</button>
          </div>
        </div>
        <form class="form" id="new-event" enctype="multipart/form-data" method="post" action="new-event.php">
          <div class="row">
            <div class="form-group col-xs-6">
              <label for="host">Date</label>
              <input id="date" name="date" class="form-control" type="text"/>
            </div>
            <div class="form-group col-xs-6">
              <label for="title">Title</label>
              <input id="title" name="title" class="form-control" type="text"/>
            </div>
            <div class="form-group col-xs-6">
              <label for="host">Host</label>
              <input id="host" name="host" class="form-control" type="text"/>
            </div>
            <div class="form-group col-xs-6">
              <label for="description">Description</label>
              <textarea id="description" name="description" class="form-control"></textarea>
            </div>
            <div class="form-group col-xs-6">
              <label for="price">Price</label>
              <input id="price" name="price" class="form-control" type="text"/>
            </div>
            <div class="form-group col-xs-6">
              <label for="time">Time</label>
              <input id="time" name="time" class="form-control" type="text"/>
            </div>
            <div class="form-group col-xs-6">
              <label for="duration">Duration</label>
              <input id="duration" name="duration" class="form-control" type="text"/>
            </div>
            <div class="form-group col-xs-6">
              <label for="location">Location</label>
              <input id="location" name="location" class="form-control" type="text"/>
            </div>
            <div class="form-group col-xs-6">
              <label for="eventbrite_code">Eventbrite code</label>
              <input id="eventbrite_code" name="eventbrite_code" class="form-control" type="text"/>
            </div>
            <div class="form-group col-xs-6">
              <label for="image">Image</label>
              <input id="image" class="form-control" name="image" type="file"/>
            </div>
            <div class="form-group col-xs-6">
              <label for="active">Active</label>
              <input id="active" class="checkbox" name="active" type="checkbox" value="1"/>
            </div>
            <input id="id" name="id" class="form-control" type="hidden"/>

          </div>
          <input id="submit" type="submit" name="submit" value="GO!">
        </form>
        <div id="events">
        </div>
      </div>
<?php
    $query = "SELECT * FROM enquiries";
    //if($result = mysql_query($query, $mysqli)) {
    if($result = mysqli_query($mysqli, $query)) {
      $data = "";
      $data = "first name\tsurname\tdate of birth\taddress\ttel\temail\tinterests\tsuggestions\tliterature\tart\tlanguages\tfashion\tcosmetics\tspirituality\tself development\tbody treatments\tskincare\tlife coaching\tfacial treatments\talternative therapies\ttravel\tayurveda\tlifestyle\tnutrition\tfitness\ttheatre\tballet\tsocialising\trelaxing\tfilm screenings\tyoga\tevents\t";
      foreach($form as $key => $value) {
        foreach($value as $element) {
          $data .= $element['label'] ? $element['label']." - ".$key."\t" : $element['name']." - ".$key."\t";
        }
      }
      $data .= "date\n";
      //while($row = mysql_fetch_array($result)) {
      while($row = mysqli_fetch_array($result)) {

        $fullnameArr = explode(" ", $row['full_name']);
        $firstname = "";
        for ($i = 0; $i < count($fullnameArr) -1; $i++) {
          $firstname .= $fullnameArr[$i];
        }

        $surname = $fullnameArr[count($fullnameArr)-1];
        $addressArr = array();
        if($row['address1']) {
          array_push($addressArr, $row['address1']);
        }
        if($row['address2']) {
          array_push($addressArr, $row['address2']);
        }
        if($row['city']) {
          array_push($addressArr, $row['city']);
        }
        if($row['postcode']) {
          array_push($addressArr, $row['postcode']);
        }
        if($row['country']) {
          array_push($addressArr, $row['country']);
        }

        $address = implode(', ', $addressArr);

        $data .= $firstname."\t".$surname."\t".$row['dob']."\t".$address."\t".$row['tel']."\t".$row['email']."\t".preg_replace("/[\n\r]/", "", stripslashes($row['interests']))."\t".preg_replace("/[\n\r]/", "", stripslashes($row['suggestions']))."\t".$row['literature']."\t".$row['art']."\t".$row['languages']."\t".$row['fashion']."\t".$row['cosmetics']."\t".$row['spirituality']."\t".$row['self_development']."\t".$row['body_treatments']."\t".$row['skincare']."\t".$row['life_coaching']."\t".$row['facial_treatments']."\t".$row['alternative_therapies']."\t".$row['travel']."\t".$row['ayurveda']."\t".$row['lifestyle']."\t".$row['nutrition']."\t".$row['fitness']."\t".$row['theatre']."\t".$row['ballet']."\t".$row['socialising']."\t".$row['relaxing']."\t".$row['film_screenings']."\t".$row['yoga']."\t".$row['events']."\t";

        foreach($form as $key => $value) {
      		foreach($value as $element) {

            if($element['name'] === 'other') {
              $data .= $row[$key.'-'.$element['name'].'-value'] ? $row[$key.'-'.$element['name'].'-value']."\t" : "0"."\t";
            } else {
              $data .= $row[$key.'-'.$element['name']]."\t";
            }
      		}
      	}
        $data .= $row['created_at']."\n";
      }
    }
    fwrite($fh, $data);
    fclose($fh);
    mysql_close($mysqli);
?>
    <div class="registrations tab">
      <a href="/download/gazellihouse.xls">Download Current membership registration list</a>
    </div>
  </div>
</div>
<script src="../javascripts/gazelli-house.min.js"></script>
<script type="text/javascript">
(function($) {

	"use strict";

  $('.nav-tabs a').click(function() {
    $('.nav-tabs li').removeClass('active');
    $(this).parent('li').addClass('active');
    var activeTab = $(this).text().toLowerCase();
    $('.tab').hide();
    $('.tab.' + activeTab).show();
  });

  $('.tab.' + $('.nav-tabs li.active a').text().toLowerCase()).show();

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
  var date = $('*[data-cal-date].active');
  if(date.size() === 1) {
    date = date.data('cal-date');
  } else {
    date = $('div.cal-day-today').find('*[data-cal-date]');
    date = date.data('cal-date');
  }
  var events;
  $('#new-event').click(function() {
    editEvent(false);
  });

  function getEvents() {
    $.ajax({
      url: "get-events.php",
      context: document.body,
      method: "POST",
      dataType: 'json',
      data: {
        date: date
      }
    }).done(function(result) {
      events = result;
      buildEvents();


    });
  }

  getEvents();

  function editEvent(idx) {
    if(idx !== false) {
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
  }

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
          'href': '#collapse' + idx
        });

        eventHeaderLinkEl.click(function() {
          editEvent(idx);
        });

        var momentDate = moment(event['date']);
        var eventDateEl = $('<span/>', {
          class: 'event-date',
          text: momentDate.format('ddd') + ' ' + momentDate.format('Do')
        }).appendTo(eventHeaderLinkEl);
        var eventTitle = $('<span/>', {
          class: 'event-title',
          text: event['title']
        }).appendTo(eventHeaderLinkEl);

        $(eventHeaderLinkEl).appendTo(eventTitleEl);
        $(eventTitleEl).appendTo(eventHeaderEl);

        var eventPanelEl = $('<div/>', {
          id: 'collapse' + idx,
          class: 'panel-collapse collapse'
        });

        var eventBodyEl = $('<div/>', {
          class: 'event-description panel-body row',
          html: '<p class="col-xs-9">' + event['description'] + '</p>'
        }).appendTo(eventPanelEl);

        var eventImageEl = $('<img/>', {
          class: 'event-image col-xs-3',
          src: '/images/events/' + event['image']
        }).appendTo(eventBodyEl);

        var eventFooterEl = $('<div/>', {
          class: 'event-footer col-xs-9',
          html: '<strong>price:</strong><span>' + event['price'] + '</span>' + '<strong>time:</strong><span>' + event['time'] + '</span>' + '<strong>duration:</strong><span>' + event['duration'] + '</span>' + '<span>' + event['location'] + '</span>'
        }).appendTo(eventBodyEl);

        $(eventHeaderEl).appendTo(eventEl);
        $(eventPanelEl).appendTo(eventEl);

        $(eventEl).appendTo($('#events'));
      });
      //$(".collapse").collapse();
    }
  }

  $('#add-event').click(function() {
    var date = $('*[data-cal-date].active');
    if(date.size() === 1) {
      date = date.data('cal-date');
    } else {
      date = $('div.cal-day-today').find('*[data-cal-date]');
      date = date.data('cal-date');
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
  setClick();
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
      $('#new-event #date').val($(this).data('cal-date'));
    });
  }
}(jQuery));
      </script>

  </body>
</html>
