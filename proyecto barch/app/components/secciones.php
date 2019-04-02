<?php require 'app/app.php'; ?>
<!doctype html>
<html lang="es">
  <head>
    <?php require 'app/components/meta_tags.php'; ?>
  </head>

  <div class="texto col-12 text-center">
            <h1>Acerca del museo</h1>
            <p>
            Conoce las secciones del museo
            </p>
          </div>
  <div class=" secciones card-group">
  <div class="card">
    <img src="img/sec1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Introduccion al artista</h5>
      <p class="card-text">En esta seccion se mostrará una breve infografia de nuestros artistas Herbert Bayer y Lilly Reich en la cual está basado este museo.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Piso 1</small>
    </div>
  </div>
  <div class="card">
    <img src="img/sec2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Primeras obras</h5>
      <p class="card-text">En esta seccion se muestran las primeras obras y antecedentes de los artistas Herbert Bayer y Lilly Reich</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Piso 1</small>
    </div>
  </div>
  <div class="card">
    <img src="img/sec3.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Impacto en la epoca actual</h5>
      <p class="card-text">En esta seccion se muestran las obras mas destacadas y el impacto que han generado actualmente los artistas Herbert Bayer y Lilly Reich</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Piso 2</small>
    </div>
  </div>
</div>




    <?php require 'app/components/navbar.php'; ?>
    <?php require 'app/components/scripts.php'; ?>
  </body>
</html>
