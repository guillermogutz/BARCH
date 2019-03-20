<?php require 'app/app.php'; ?>
<!doctype html>
<html lang="es">
  <head>
    <?php require 'app/components/meta_tags.php'; ?>
    <title>Clientes & Colaboraciones | <?=SITE['name']?></title>
    <meta name="description" content="Aquí hay una selección de clientes felices y hermosos proyectos.">
  </head>
  <body class="pt-5">
    <?php require 'app/components/navbar.php'; ?>
    <main class="pt-5">
      <section class="container">
        <article class="row no-gutters">
          <div class="col-12 text-center">
            <h1>Clientes & Colaboraciones</h1>
            <p>
              Aquí hay una selección de clientes felices y hermosos proyectos.
            </p>
          </div>
          <?=get_clients(SITE['clients'])?>
        </article>
      </section>
    </main>
    <?php require 'app/components/footer.php'; ?>
    <?php require 'app/components/scripts.php'; ?>
  </body>
</html>