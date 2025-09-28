php
<?php
$arr = [1, 2, 3];
unset($arr[1]);
$arr = array_values($arr); // reindex
?>
