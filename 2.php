<?php
$date = date('d');

switch ($date) {
    case "3":
      echo "<h1>It is dentist appointment</h1>";
      break;
    case "10":
      echo "<h1>Go to conference</h1>";
      break;
    default:
      echo " <h1>No events are scheduled</h1>";
  }
?>
