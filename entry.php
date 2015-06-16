<?php

//ini_set('display_errors',1); 
//error_reporting(E_ALL);
//header('Cache-Control: no-cache, must-revalidate');
//header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
//header('Content-type: application/json');
require "lib/db.php";
$out = array();

if(!$_SERVER['REQUEST_METHOD'] == "POST") {
	$out["invalid"] = "You can't access this page directly!!";
	echo json_encode($out);
} else {
  if(isset($_POST['fullname'])) {
    $full_name = mysql_real_escape_string($_POST['fullname']);
  } else {
    $out["fullname"] = "You must supply your full name.";
  }
  if(isset($_POST['year']) && isset($_POST['month']) && isset($_POST['day'])) {
    $dob = mysql_real_escape_string($_POST['year']).'/'.mysql_real_escape_string($_POST['month']).'/'.mysql_real_escape_string($_POST['day']);
  } else {
    $out["dob"] = "You must supply your date of birth.";
  }
  if(isset($_POST['address1'])) {
    $address1 = mysql_real_escape_string($_POST['address1']);
  } else {
    $out["address1"] = "You must supply your address.";
  }
  if(isset($_POST['address2'])) {
    $address2 = mysql_real_escape_string($_POST['address2']);
  } else {
    $out["address2"] = "You must supply your full name.";
  }
  if(isset($_POST['city'])) {
    $city = mysql_real_escape_string($_POST['city']);
  } else {
    $out["city"] = "You must supply your city.";
  }
  if(isset($_POST['postcode'])) {
    $postcode = mysql_real_escape_string($_POST['postcode']);
  } else {
    $out["postcode"] = "You must supply your postcode.";
  }
  if(isset($_POST['country'])) {
    $country = mysql_real_escape_string($_POST['country']);
  } else {
    $out["country"] = "You must supply your country.";
  }
  if(isset($_POST['tel'])) {
    $tel = mysql_real_escape_string($_POST['tel']);
  } else {
    $out["tel"] = "You must supply your telephone number.";
  }
  if(isset($_POST['email'])) {
    $email = mysql_real_escape_string($_POST['email']);
  } else {
    $out["email"] = "You must supply your email.";
  }
  if(isset($_POST['confirm_email'])) {
    $confirm_email = mysql_real_escape_string($_POST['confirm_email']);
  } else {
    $out["confirm_email"] = "You must confirm your email.";
  }
  if(isset($_POST['interests'])) {
    $interests = mysql_real_escape_string($_POST['interests']);
  } else {
    $out["interests"] = "You must supply your interests.";
  }
  if(isset($_POST['suggestions'])) {
    $suggestions = mysql_real_escape_string($_POST['suggestions']);
  }

	$literature = isset($_POST['literature']) ? 1 : 0;
	$art = isset($_POST['art']) ? 1 : 0;
	$languages = isset($_POST['languages']) ? 1 : 0;
	$fashion = isset($_POST['fashion']) ? 1 : 0;
	$cosmetics = isset($_POST['cosmetics']) ? 1 : 0;
	$spirituality = isset($_POST['spirituality']) ? 1 : 0;
	$self_development = isset($_POST['self_development']) ? 1 : 0;
	$body_treatments = isset($_POST['body_treatments']) ? 1 : 0;
	$skincare = isset($_POST['skincare']) ? 1 : 0;
	$life_coaching = isset($_POST['life_coaching']) ? 1 : 0;
	$facial_treatments = isset($_POST['facial_treatments']) ? 1 : 0;
	$alternative_therapies = isset($_POST['alternative_therapies']) ? 1 : 0;
	$travel = isset($_POST['travel']) ? 1 : 0;
	$ayurveda = isset($_POST['ayurveda']) ? 1 : 0;
	$lifestyle = isset($_POST['lifestyle']) ? 1 : 0;
	$nutrition = isset($_POST['nutrition']) ? 1 : 0;
	$fitness = isset($_POST['fitness']) ? 1 : 0;
	$theatre = isset($_POST['theatre']) ? 1 : 0;
	$ballet = isset($_POST['ballet']) ? 1 : 0;
	$socialising = isset($_POST['socialising']) ? : 0;
	$relaxing = isset($_POST['relaxing']) ? 1 : 0;
	$film_screenings = isset($_POST['film_screenings']) ? 1 : 0;
	$yoga = isset($_POST['yoga']) ? 1 : 0;

	if($email !== $confirm_email) {
    $out['duplicate_email'] = "You can only submit one goal per email address.";
  } else {
		$query = "SELECT * FROM enquiries WHERE email = '".$email."'";
		if($result = mysql_query($query)) {
			while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
				mysql_close($mysqli);
				$out['duplicate_email'] = "You can only make one membership registration per email address.";
				die(json_encode($out));
			}
		}
	}

  if(count($out)) {
    die(json_encode($out));
  } else {
    $query = "INSERT INTO enquiries (full_name, dob, address1, address2, city, postcode, country, tel, email, interests, suggestions, literature, art, languages, fashion, cosmetics, spirituality, self_development, body_treatments, skincare, life_coaching, facial_treatments, alternative_therapies, travel, ayurveda, lifestyle, nutrition, fitness, theatre, ballet, socialising, relaxing, film_screenings, yoga) VALUES ('".$full_name."', '".$dob."', '".$address1."', '".$address2."', '".$city."', '".$postcode."', '".$country."', '".$tel."', '".".$email"."', '".".$interests"."', '".$suggestions."', '".$literature."', '".$art."', '".$languages."', '".$fashion."', '".$cosmetics."', '".$spirituality."', '".$self_development."', '".$body_treatments."', '".$skincare."', '".$life_coaching."', '".$facial_treatments."', '".$alternative_therapies."', '".$travel."', '".$ayurveda."', '".$lifestyle."', '".$nutrition."', '".$fitness."', '".$theatre."', '".$ballet."', '".$socialising."', '".$relaxing."', '".$film_screenings."', '".$yoga."')";
	
    if($result = mysql_query($query)) {
      $out["result"] = "success";
    } else {
      $out["result"] = mysql_error();
    }
    echo json_encode($out);
    mysql_close($mysqli);
  }
}
?>
