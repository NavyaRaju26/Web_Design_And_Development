<?php
// Example: match digits
preg_match_all("/\d+/", "abc123def456", $m);
print_r($m[0]);
?>
