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
      $data = "name\tdate of birth\taddress1\taddress2\tcity\tpostcode\tcountry\ttel\temail\tinterests\tsuggestions\tselected areas\tdate\n";
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
    $genres = array();
    if($row['literature']) {
      array_push($genres, 'literature');
    }
    if($row['art']) {
      array_push($genres, 'art');
    }
    if($row['languages']) {
      array_push($genres, 'languages');
    }
    if($row['fashion']) {
      array_push($genres, 'fashion');
    }
    if($row['cosmetics']) {
      array_push($genres, 'cosmetics');
    }
    if($row['spirituality']) {
      array_push($genres, 'spirituality');
    }
    if($row['self_development']) {
      array_push($genres, 'self development');
    }
    if($row['body_treatments']) {
      array_push($genres, 'body treatments');
    }
    if($row['skincare']) {
      array_push($genres, 'skincare');
    }
    if($row['life_coaching']) {
      array_push($genres, 'life coaching');
    }
    if($row['facial_treatments']) {
      array_push($genres, 'facial treatments');
    }
    if($row['alternative_therapies']) {
      array_push($genres, 'alternative therapies');
    }
    if($row['travel']) {
      array_push($genres, 'travel');
    }
    if($row['ayurveda']) {
      array_push($genres, 'ayurveda');
    }
    if($row['lifestyle']) {
      array_push($genres, 'lifestyle');
    }
    if($row['nutrition']) {
      array_push($genres, 'nutrition');
    }
    if($row['fitness']) {
      array_push($genres, 'fitness');
    }
    if($row['theatre']) {
      array_push($genres, 'theatre');
    }
    if($row['ballet']) {
      array_push($genres, 'ballet');
    }
    if($row['socialising']) {
      array_push($genres, 'socialising');
    }
    if($row['relaxing']) {
      array_push($genres, 'relaxing');
    }
    if($row['film_screenings']) {
      array_push($genres, 'film screenings');
    }
    if($row['yoga']) {
      array_push($genres, 'yoga');
    }
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
    $data .= $row['full_name']."\t".$row['dob']."\t".$row['address1']."\t".$row['address2']."\t".$row['city']."\t".$row['postcode']."\t".$row['country']."\t".$row['tel']."\t".$row['email']."\t".stripslashes($row['interests'])."\t".stripslashes($row['suggestions'])."\t".implode($genres, ", ")."\t".$row['created_at']."\n";
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