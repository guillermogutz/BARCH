<?php require 'app/app.php'; ?>
<!doctype html>
<html lang="es">
  <head>
    <?php require 'app/components/meta_tags.php'; ?>
    <title>Comencemos tu nuevo proyecto | <?=SITE['name']?></title>
    <meta name="description" content="Me encanta la colaboración mutua entre profesional-cliente, prefiero la frase: Trabajo contigo. En vez de: Trabajo para ti.">
  </head>
  <body class="pt-5">
    <?php require 'app/components/navbar.php'; ?>
    <main class="pt-5 bg-color">
      <section class="container">
        <h1 class="text-center">Comencemos tu nuevo proyecto</h1>
        <article class="my-5 text-center font-120">
          <p>
            Me encanta la colaboración mutua entre <b>profesional-cliente</b>, prefiero la frase:
          </p>
          <p class="font-150">
            <b><i>"Trabajo contigo"</i></b>.
          </p>
          <p>
            En vez de: <b><i>Trabajo para ti</i></b>.
          </p>
        </article>
        <article>
          <p>
            Me gusta tener contacto directo con el cliente, lo que permite una comunicación clara y actualizaciones periódicas del proyecto, haciendo todo lo posible para no causar demoras. Intento definir las características y experiencias más adecuadas que brinden la máxima satisfacción.
          </p>
          <p>
            Me parece importante ofrecer a mis clientes una comprensión clara de lo que pueden y deben esperar de mí. Si trabajamos juntos en su sitio web, el proceso será como se describe a continuación:
          </p>
        </article>
        <?=get_workflow(SITE['workflow'])?>
        <article class="text-center">
          <small>
            <sup><b>*</b></sup>
            Todo cambio adicional generará cargos extras.
            Tarifa por hora: <b>$50usd + impuestos</b>.
          </small>
        </article>
      </section>
    </main>
    <?php require 'app/components/footer.php'; ?>
    <?php require 'app/components/scripts.php'; ?>
  </body>
</html>