<?php
function month_name($a) {
  if ($a === 1) {
      return "January";
  } else if ($a === 2) {
    return "February";
  } else if ($a === 3) {
    return "March";
  } else if ($a === 4) {
    return "April";
  } else if ($a === 5) {
    return "May";
  } else if ($a === 6) {
    return "June";
  } else if ($a === 7) {
    return "July";
  } else if ($a === 8) {
    return "August";
  } else if ($a === 9) {
    return "September";
  } else if ($a === 10) {
    return "October";
  } else if ($a === 11) {
    return "November";
  } else if ($a === 12) {
    return "December";
  } else {
      return"Error";
  }
} 
$month_number = (int)readline("Enter the month number: ");
echo month_name($month_number);
?>