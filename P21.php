php
<?php
function isLeap($year) {
  return ($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0);
}
echo isLeap(2024) ? "Leap year" : "Not a leap year";
?>
