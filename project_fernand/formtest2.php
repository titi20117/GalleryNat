<?php // formtest2.php
  if (isset($_POST['email'])) $email = $_POST['email'];
  else $email = "(Not entered)";

  echo <<<_END
  <html>
    <head>
      <title>Form Test</title>
    </head>
    <body>
    Your e-mail is: $email<br>
    <form method="post" action="formtest2.php">
      What is your e-mail?
      <input type="text" name="email">
      <input type="submit">
    </form>
    </body>
  </html>
_END;
?>
