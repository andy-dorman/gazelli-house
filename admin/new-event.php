<?php
require "../lib/db.php";

if($_POST['id']) {
  $id = mysql_real_escape_string($_POST['id']);
}
if($_POST['title']) {
  $title = mysql_real_escape_string($_POST['title']);
}
if($_POST['date']) {
  $date = mysql_real_escape_string($_POST['date']);
}
if($_POST['host']) {
  $host = mysql_real_escape_string($_POST['host']);
}
if($_POST['description']) {
  $description = mysql_real_escape_string(nl2br($_POST['description']));
}
if($_POST['price']) {
  $price = mysql_real_escape_string($_POST['price']);
}
if($_POST['time']) {
  $time = mysql_real_escape_string($_POST['time']);
}
if($_POST['duration']) {
  $duration = mysql_real_escape_string($_POST['duration']);
}
if($_POST['location']) {
  $location = mysql_real_escape_string($_POST['location']);
}
if($_POST['eventbrite_code']) {
  $eventbrite_code = mysql_real_escape_string($_POST['eventbrite_code']);
}
if($_POST['image']) {
  $image = mysql_real_escape_string($_POST['image']);
}
if($_POST['active']) {
  $active = mysql_real_escape_string($_POST['active']);
} else {
  $active = 0;
}

$target_dir = "../images/events/";
$uploading_image = $_FILES["image"]["name"];
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo(parse_url($target_file, PHP_URL_PATH),PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"]) && $_FILES["image"]["name"]) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.<br/>";
        $uploadOk = 0;
    }
}
// Check if file already exists
if($uploading_image) {
  if (file_exists($target_file)) {
      //echo "Sorry, file already exists.<br/>";
      //$uploadOk = 0;
  }
  // Check file size
  if ($_FILES["image"]["size"] > 2000000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
  }
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
  }
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
      //echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
    }
    $image = $_FILES["image"]["name"];
  }
}
if($id) {

  if(isset($_POST["delete"])) {
    $query = "DELETE FROM events WHERE id=".$id.";";
    if($result = mysql_query($query)) {

    }
  } else {
    $query = "UPDATE events SET title='".$title."', date='".$date."',host='".$host."',description='".$description."',price='".$price."',time='".$time."',duration='".$duration."',location='".$location."',eventbrite_code='".$eventbrite_code."',active=".$active;
    if($image) {
      $query .= ",image='".$image."'";
    }
    $query .= " WHERE id=".$id;
    if($result = mysql_query($query)) {

    } else {
      //echo mysql_error();
    }
  }
} else {
  $insert = "title,date,host,description,price,time,duration,location,eventbrite_code,active";
  $values = "'".$title."', '".$date."', '".$host."', '".$description."', '".$price."', '".$time."', '".$duration."', '".$location."', '".$eventbrite_code."', ".$active;
  if($image) {
    $insert .= ",image";
    $values .= ", '".$image."'";
  }
  $query = "INSERT INTO events (".$insert.") VALUES (".$values.")";

  if($result = mysql_query($query)) {

  } else {
    //echo mysql_error();
  }
}

mysql_close($mysqli);
if($uploadOk === 1) {
  $redirect = "http://".$_SERVER['HTTP_HOST']."/admin/";
  echo "<script language='javascript'>\n";
  echo "window.location.href='".$redirect."';";
  echo "</script>\n";
} else {
  echo "You're event may have been added but there was an issue with your file upload. Use the back button in your browser to check if the event has been added and try attaching the image again.";
}

?>
