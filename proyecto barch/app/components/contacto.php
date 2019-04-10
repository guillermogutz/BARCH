<?php require 'app/app.php'; ?>
<!doctype html>
<html lang="es">
  <head>
    <?php require 'app/components/meta_tags.php'; ?>
    <title>¿Interesado? | <?=SITE['name']?></title>
   
  </head>
  <body class="pt-5">
    <?php require 'app/components/navbar.php'; ?>
    <main class="pt-5">
      <section class="container"> 
        <h1 class="text-center">¡Queremos saber tu opinion!</h1>
        <article class="my-5 text-center font-150">
        <?php require "app/components/contact_form.php"; ?>
        </article>
      
      </section>
    </main>
    <?php require 'app/components/scripts.php'; ?>
  </body>
</html>