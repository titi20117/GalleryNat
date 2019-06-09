<?php // formtest.php
echo <<<_END
  <html>
    <head>
      <title>Тестовая форма</title>
    </head>
    <body>
    <form method="post" action="formtest.php">
      Введите Ваш e-mail?
      <input type="text" name="email">
      <input type="submit">
    </form>
    </body>
  </html>
_END;
?>
