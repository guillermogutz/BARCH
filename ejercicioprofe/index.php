<?php require 'app/app.php'; ?>
<!doctype html>
<html lang="es">
  <head>
    <?php require 'app/components/meta_tags.php'; ?>
    <title><?=SITE['name']?></title>
    <meta name="description" content="¿Necesitas un nuevo sitio web?
    Elaboro experiencias en línea, hermosas y atractivas. Soy Jonathan MirCha, Diseñador Web.">
  </head>
  <body class="pt-5">
    <?php require 'app/components/navbar.php'; ?>
    <main class="pt-5 text-white gradient-aqua">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <article class="col-12 col-lg-5 font-120">
            <h2>¿Necesitas un increíble sitio web?</h2>
            <p>
              Un sitio hermoso, moderno, responsivo y personalizado para tu compañia, negocio, marca, servicio o producto.
            </p>
            <a href="#servicios" class="btn btn-lg btn-success">
              <b>Sí, ¡empecemos!</b>
            </a>
          </article>
          <article class="col-12 col-lg-7">
            <img class="img-fluid" src="https://placeimg.com/640/480/nature" alt="¿Necesitas un asombroso sitio web?">
          </article>
        </div>
      </div>
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <article class="col-12 col-lg-5 order-lg-1 font-120">
            <h2>Sitios web responsivos</h2>
            <p>
              Es importante proporcionar a tus visitantes una experiencia web óptima en dispositivos móviles. El diseño web responsivo significa que tu sitio se adapta instantáneamente al dispositivo que el visitante utiliza. ¡Mi trabajo es hacer, que la visita de tus usuarios sea lo más agradable e intuitiva para ellos!
            </p>
          </article>
          <article class="col-12 col-lg-7">
            <img class="img-fluid" src="https://placeimg.com/640/480/animals" alt="¿Necesitas un asombroso sitio web?">
          </article>
        </div>
      </div>
      <div id="servicios" class="container text-dark">
        <div class="row justify-content-center align-items-center full-screen">
          <?php get_service_cards( SITE['service_cards'] ); ?>
        </div>
      </div>
    </main>
    <?php require 'app/components/footer.php'; ?>
    <?php require 'app/components/scripts.php'; ?>
  </body>
</html>