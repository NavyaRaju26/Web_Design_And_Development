php
<?php
$data = "The Thing will come to you soon";
echo preg_replace("/\bthe\b/i", "best", $data, 1);
?>
