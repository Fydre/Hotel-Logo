<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      foreach ($_SERVER as $key => $items) {
        print_r($key. ": ". $items. "<br>");
      };
    ?>
  </body>
</html>
