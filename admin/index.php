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
<link href="../stylesheets/style.css" rel="stylesheet">
<link href="../stylesheets/jquery.fancybox.css" rel="stylesheet">
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
<?php

    $query = "SELECT * FROM enquiries";// LIMIT ".((isset($_GET["page"]) ? $_GET["page"] : 0) * 20).",20;";

    if($result = mysql_query($query, $mysqli)) {
      $data = "";
      $data = "first name\tsurname\tdate of birth\taddress\ttel\temail\tinterests\tsuggestions\tliterature\tart\tlanguages\tfashion\tcosmetics\tspirituality\tself development\tbody treatments\tskincare\tlife coaching\tfacial treatments\talternative therapies\ttravel\tayurveda\tlifestyle\tnutrition\tfitness\ttheatre\tballet\tsocialising\trelaxing\tfilm screenings\tyoga\tevents\t";
      foreach($form as $key => $value) {
        foreach($value as $element) {
          $data .= $element['label'] ? $element['label']." - ".$key."\t" : $element['name']." - ".$key."\t";
          if($element['name'] === 'other') {
            $data .= "Other value - ".$key."\t";
          }
        }
      }
      $data .= "date\n";
?>
<!--
  <table class="table table-striped">
    <thead>
      <th>Name</th>
      <th>Date of birth</th>
      <th>Address 1</th>
      <th>Address 2</th>
      <th>City</th>
      <th>Post code</th>
      <th>Country</th>
      <th>Tel</th>
      <th>Email</th>
      <th>Interests</th>
      <th>Suggestions</th>
      <th>Genres</th>
    </thead>
    <tbody>-->

<?php
      while($row = mysql_fetch_array($result)) {
    ?>
      <!--<tr>
        <td><?php echo $row['full_name'];?></td>
        <td><?php echo $row['dob'];?></td>
        <td><?php echo $row['address1'];?></td>
        <td><?php echo $row['address2'];?></td>
        <td><?php echo $row['city'];?></td>
        <td><?php echo $row['postcode'];?></td>
        <td><?php echo $row['country'];?></td>
        <td><?php echo $row['tel'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['interests'];?></td>
        <td><?php echo $row['suggestion'];?></td>
        <td><?php echo implode($genres, ", ");?></td>
      </tr>-->
<?php
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
        $data .= $row[$key.'-'.$element['name']]."\t";
        if($element['name'] === 'other') {
          $data .= $row[$key.'-'.$element['name'].'-value']."\t";
        }
  		}
  	}
    $data .= $row['created_at']."\n";
      }
      fwrite($fh, $data);
    fclose($fh);
?>
    <!--</tbody>
  </table>-->
<?php
    }
mysql_close($mysqli);
?>
<a href="/download/gazellihouse.xls">Download Current membership registration list</a>
</div>
</div>
  </body>
</html>
