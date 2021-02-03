<!-- Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi. -->
<?php
  include __DIR__.'/db.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-ajax-dischi 1</title>
  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <!-- CSS -->
  <link rel="stylesheet" href="dist/css/style.css">
</head>
<body>
  <div id="app">
    <header>
      <div class="container">
        <img src="dist/img/logo.png" alt="logo">
      </div><!-- /.container -->
    </header>
    <!-- /header -->
    <div class="cds-container container">
      <?php
        foreach ($db as $response) {
          foreach ($response as $value) { ?>
            <div class="cd">
              <!-- var_dump($value); -->
              <!-- echo $value['title']; -->
              <img src="<?php echo $value['poster']; ?>"  alt="">
              <h3> <?php echo $value['title']; ?> </h3>
              <span class="author"> <?php echo $value['author']; ?> </span>
              <span class="year"> <?php echo $value['year']; ?> </span>
            </div><!-- /.cd -->
          <?php } ?>
        <?php }
      ?>
    </div><!-- /.cds-container container  -->
  </div>
  <!-- /#app -->
</body>
</html>
