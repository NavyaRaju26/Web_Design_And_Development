php
<?php
$balance = 1000;

function deposit($amt) {
  global $balance;
  $balance += $amt;
}

function withdraw($amt) {
  global $balance;
  if ($balance >= $amt) $balance -= $amt;
  else echo "Insufficient balance<br>";
}

deposit(500);
withdraw(300);
echo "Balance: $balance";
?>
