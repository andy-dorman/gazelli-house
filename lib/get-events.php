<?php
require "../lib/db.php";
$date = mysql_real_escape_string($_POST['date']);
$parsedDate = date_parse($date);
$month = $parsedDate["month"];
$query = "SELECT * from events WHERE month(date) = '".$month."' ORDER BY date ASC";
if($_POST['active']) {
    $query .= " AND active=".mysql_real_escape_string($_POST['active']);
}
$out = array();
if($result = mysql_query($query)) {
  while ($row = mysql_fetch_assoc($result)) {
    $event = array();
    $event["id"] = $row['id'];
    $event["title"] = $row['title'];
    $event["date"] = $row['date'];
    $event["description"] = $row['description'];
    $event["host"] = $row['host'];
    $event["price"] = $row['price'];
    $event["time"] = $row['time'];
    $event["duration"] = $row['duration'];
    $event["location"] = $row['location'];
    $event["active"] = $row['active'];
    $event["eventbrite_code"] = $row['eventbrite_code'];
    $event["image"] = $row['image'];
    array_push($out,$event);
  }
} else {
  //echo mysql_error();
}

echo json_encode($out);
mysql_close($mysqli);
