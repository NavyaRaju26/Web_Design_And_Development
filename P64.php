<?php
$sales = [100, 120, 150];
$growth = ($sales[count($sales)-1] - $sales[0]) / $sales[0] * 100;
echo "Growth: $growth%";
?>
