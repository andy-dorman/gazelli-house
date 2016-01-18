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
    <div class="container admin">
      <ul class="admin nav nav-tabs">
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
          <input id="delete" type="submit" name="delete" value="DELETE EVENT">
        </form>
        <div id="events">
        </div>
      </div>
<?php
    $query = "SELECT * FROM enquiries";
    //if($result = mysql_query($query, $mysqli)) {
    //if($result = mysqli_query($mysqli, $query)) {
    if($result = mysql_query($query)) {
      $data = "";
      $data = "first name\tsurname\tdate of birth\taddress\ttel\temail\tinterests\tsuggestions\tliterature\tart\tlanguages\tfashion\tcosmetics\tspirituality\tself development\tbody treatments\tskincare\tlife coaching\tfacial treatments\talternative therapies\ttravel\tayurveda\tlifestyle\tnutrition\tfitness\ttheatre\tballet\tsocialising\trelaxing\tfilm screenings\tyoga\tevents\t";
      foreach($form as $key => $value) {
        foreach($value as $element) {
          $data .= $element['label'] ? $element['label']." - ".$key."\t" : $element['name']." - ".$key."\t";
        }
      }
      $data .= "date\n";
      //while($row = mysql_fetch_array($result)) {
      while ($row = mysql_fetch_assoc($result)) {
      //while($row = mysqli_fetch_array($result)) {

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
$(document).ready(function() {


});
      </script>

  </body>
</html>
