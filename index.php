<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>google</title>

<!-- Riscrivere questa pagina del sito google
https://policies.google.com/faq.
Ci sono diverse domande con relative risposte.
Gestire il "Database" e la visualizzazione di
queste domande e risposte con PHP. -->

<?php

  // include 'helper.php';
  include 'data.php';

?>

</head>

<body>

  <div>

  <?php

    print_r ($faq);

    foreach ($faq as $domanda) { ?>
      <h1> <?php echo $domanda['domanda'] ?> </h1>

      <p> <?php echo $domanda['risposta'] ?></p>
    <?php }

   ?>

  </div>

</body>
</html>
