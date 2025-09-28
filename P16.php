php
<form method="post">
  A: <input name="a"><br>
  B: <input name="b"><br>
  <input type="submit" value="Add">
</form>

<?php
if ($_POST) {
  function add($x, $y) {
    return $x + $y;
  }
  echo "Sum = " . add($_POST['a'], $_POST['b']);
}
?>
