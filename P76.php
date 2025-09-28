<?php
$birthday = strtotime("2025-12-25");
$today = time();
$days = ceil(($birthday - $today) / 86400);
echo "Days left: $days";
?>
