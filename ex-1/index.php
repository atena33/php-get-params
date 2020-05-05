<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- passare come argomenti in GET nome e cognome; e salutare l'interlocutore -->
    <?php
    $nome = $_GET['name'];
    $cognome = $_GET['surname'];
     ?>
  </head>
  <body>
    <h1>
      <?php
      echo 'Ciao ' . ucfirst($nome) . ' '. ucfirst($cognome);
      ?>
    </h1>
  </body>
</html>
