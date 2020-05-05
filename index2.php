<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- passare come argomento in GET una mail e stampare un div che contenga
    OK se contiene un punto e una chiocciola; KO altrimenti -->
    <?php
    $mail = $_GET['mail'] ;
    $dot = strpos($mail, '.');
    $snail = strpos($mail, '@');
    ?>
  </head>
  <body>
    <?php
      if ($dot && $snail) {
        echo '<div>OK!</div>';
      } else {
        echo '<div>KO!</div>';
      }
     ?>
  </body>
</html>
