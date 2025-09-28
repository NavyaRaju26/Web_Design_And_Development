<?php
$str = "Email me at user@example.com";
preg_match_all("/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}/i", $str, $m);
print_r($m[0]);
?>
