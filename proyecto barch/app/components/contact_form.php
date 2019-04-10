<form action="" method="post"> 
<div class="form-group"><input id="experiencia" name="experiencia" placeholder="¿Cómo fue tu experiencia en el museo?" type="text" class="form-control"></div>
<div class="form-group"><input id="visita" name="visita" placeholder="¿Cuántas veces nos has visitado?" type="text" class="form-control"></div>
<div class="form-group"><input id="area" name="area" placeholder="¿cuál fue la sección que te gusto más del museo?" type="text" class="form-control"></div>
<div class="form-group"><input id="sugerencia" name="sugerencia" placeholder="¿Que nos darías de sugerencia para mejorar tu experiencia?" type="text" class="form-control"></div>
<div class="form-group">
    <label for="exampleFormControlSelect1">¿Volverías a visitarnos?</label>
    <select class="form-control" name="regreso" id="regreso">
      <option value="si">Si</option>
      <option value="no">no</option>
      <option value="talvez">talvez</option>
      <option value="nunca">nunca</option>
    </select>
  </div>
<div class="form-group"> <textarea name="comentarios" id="comentarios" placeholder="Deja tus comentarios adicionales" class="form-control" required></textarea></div>
<div class="form-group"><input type="submit" class="btn btn-lg active bg-primary text-white" value="Enviar"></div>
</form>
<?php