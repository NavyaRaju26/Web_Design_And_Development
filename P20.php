php
<form method="post">
  Name: <input name="name"><br>
  Email: <input name="email"><br>
  Message: <textarea name="message"></textarea><br>
  <input type="submit">
</form>

<?php
if ($_POST) {
  if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message'])) {
    echo "All fields are required.";
  } else {
    echo "Form submitted successfully!";
  }
}
?>
