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
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
 Piso 1
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Piso 1</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
      <p>Justo en el comienzo del recorrido del museo se hara una pequeña introduccion al artista acompañadas de fotografias en sus tiempos de comienzo
      y donde también se podra apreciar una escultura basada en los trabajos de Herbert Bayer.<p>
       <img src= "img/her2.jpg">
       <img src= "img/her3.jpg">
       <img src= "img/lilly5.jpg">
       <img src= "img/lilly6.jpg">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
  </div>


  <div class="card">
    <img src="img/sec2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Primeras obras</h5>
      <p class="card-text">En esta seccion se muestran las primeras obras y antecedentes de los artistas Herbert Bayer y Lilly Reich</p>
    </div>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Piso 1
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Piso 1</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
       En esta sección se mostrarán los inicios de los artistas Herbert Bayer y Lilly Reich con una exposicion fotográfica de los primeros cuadros de Herbert Bayer, asi como tambienlos diseños textiles
       de Lilly Reich.
       <img src="img/foto1.jpg">
       <img src="img/ropa2.jpg">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
     
      </div>
    </div>
  </div>
</div>
  </div>


  <div class="card">
    <img src="img/sec3.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Impacto en la epoca actual</h5>
      <p class="card-text">En esta seccion se muestran las obras mas destacadas y el impacto que han generado actualmente los artistas Herbert Bayer y Lilly Reich</p>
    </div>
  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
 Piso 2
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Piso 2</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <p> En esta sección se mostrarán las obras mas destacadas de los artistas Herbert Bayer y Lilly Reich y como sus trabajos impactaron a la sociedad hoy en dia.</p>
     <img src="img/villa.jpg">
     <img src="img/poster.jpg">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>

    </div>
    
</div>





    <?php require 'app/components/navbar.php'; ?>
    <?php require 'app/components/scripts.php'; ?>
  </body>
</html>
