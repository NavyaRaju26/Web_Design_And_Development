<?php
$players = [
    "A" => [20, 30, 50],
    "B" => [25, 35, 45]
];
foreach ($players as $name => $scores) {
    $avg = array_sum($scores)/count($scores);
    echo "$name: Avg=$avg\n";
}
?>
