<?php require 'app/app.php'; ?>
<!doctype html>
<html lang="es">
  <head>
    <?php require 'app/components/meta_tags.php'; ?>
    <title>¿Interesado? | <?=SITE['name']?></title>
    <meta name="description" content="Envíame tus comentarios. Para más información, puedes contactarme en info@studiobaddog.com">
  </head>
  <body class="pt-5">
    <?php require 'app/components/navbar.php'; ?>
    <main class="pt-5">
      <section class="container">
        <h1 class="text-center">¿Interesado?</h1>
        <article class="my-5 text-center font-150">
          <p>
            ¡Envíame tus comentarios!
          </p>
          <p>
            Para más información, puedes contactarme en <a href="mailto:info@studiobaddog.com">info@studiobaddog.com</a>.
          </p>
        </article>
        <article class="row">
          <div class="col-12 col-lg-6 order-lg-1">
          <?php require "app/components/contact_form.php"; ?>
          
          </div>
          <div class="col-12 col-lg-6">
            <div class="embed-responsive embed-responsive-1by1">
              <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.673701005276!2d-99.15426978459573!3d19.426499445908547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff2c1d750941%3A0xe370e185e573f2fe!2sIconos%2C+Instituto+de+Investigaci%C3%B3n+en+Comunicaci%C3%B3n+Y+Cultura!5e0!3m2!1ses-419!2smx!4v1553712754792" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
        </article>
      </section>
    </main>
    <?php require 'app/components/footer.php'; ?>
    <?php require 'app/components/scripts.php'; ?>
  </body>
</html>