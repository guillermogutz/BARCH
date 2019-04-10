<form action="" method="post">
<div class="form-group"><input id="nombre" name="nombre" placeholder="escribe tu nombre" type="text" class="form-control"></div>
<div class="form-group"><input id="email" placeholder="escribe tu email" type="email" class="form-control"></div>
<div class="form-group"> <textarea name="comentarios" id="comentarios" placeholder="déjanos tus comentarios" class="form-control" required></textarea></div>
<div class="form-group"><input type="submit" class="btn btn-lg active bg-success text-white" value="Enviar"></div>
</form>
<?php

 
echo '<h2>Datos por GET</h2>';
echo '<pre>';
 var_dump($_GET);
echo '</pre>';
echo '<br>';
echo '<h2>Datos por POST</h2>';
echo '<pre>';
 var_dump($_POST);
 echo '</pre>';
 ?>