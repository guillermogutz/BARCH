<?php require 'app/app.php'; ?>
<!doctype html>
<html lang="es">
  <head>
    <?php require 'app/components/meta_tags.php'; ?>
    <title>Tipos de Sitios Web | <?=SITE['name']?></title>
    <meta name="description" content="Desarrollo sitios de una sóla y de múltiples páginas.">
  </head>
  <body class="pt-5">
    <?php require 'app/components/navbar.php'; ?>
    <main class="pt-5">
      <?php
        require 'app/components/sites_carousel.php';
        require 'app/components/single_page.php';
        require 'app/components/multi_page.php';
      ?>
    </main>
    <?php require 'app/components/footer.php'; ?>
    <?php require 'app/components/scripts.php'; ?>
  </body>
</html>