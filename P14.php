<form method="post">
  Name: <input name="name"><br>
  Email: <input name="email"><br>
  Message: <textarea name="message"></textarea><br>
  <input type="submit">
</form>

<?php
if ($_POST) {
  echo "Thank you, {$_POST['name']}! Your message has been received. We'll contact you at {$_POST['email']}.";
}
?>
