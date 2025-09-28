php
<?php
function highLow($arr) {
  return ["max" => max($arr), "min" => min($arr)];
}
$result = highLow([5, 1, 9, 2]);
echo "Max: {$result['max']}, Min: {$result['min']}";
?>
