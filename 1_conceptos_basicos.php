<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device, initia-scal-0">
<meta http equiv="x-UA-Compatible" content="ie-edge">
<h1>Conceptos básicos PHP</h1>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<?php
//comentario e una linea
# comentario de una linea
/*
comentario
de
varias
lineas
*/

echo 'Este es un texto escrito y procesado por PHP';
echo "<p>otro texto escrito con PHP en un parrafo de html</p>";
echo'
<div class="card" style="width: 18rem;">
  <img src="https://placeimg.com/640/480/any" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
';

/*conceptos básicos de programacion en PHP */

?>
<h2>Tipos de datos básicos en PHP</h2>
<?php
echo"
<ol>
<li>Cadenas de texto (String)</li>
<li>Números (Numbers)</li>
<li>Booleanos (Booleans)</li>
<li>(Arrays)</li>
</ol>
";
?>

<p>
para poder utilizar <b>tipos de datos</b> en PHP es necesario almacenarlas en variables o constantes.
</p>
<?php
//para declarar una variable en PHP, se utiliza el simbolo del $;
$nombre= 'memo';//string
$edad= 23;//number
$es_programador =true; //booleans

//Si quiero unir valores de variables a una cadena de texto, para formar algun mensaje dinámico ,puedo usar:
    #la concatenación o
    #la interpolación
echo '<p>El texto de abajo es un ejemplo en PHP de concatenación</p>';

echo'<p> Hola mi nombre es '.$nombre.' y tengo '.$edad.' años 
y¿soy programador? '.$es_programador.' </p>' ;

echo '<p> el texto de abajo es un ejemplo en PHP de interpolación </p> ';

echo"<p> Hola mi nombre es $nombre. y tengo $edad años 
y ¿soy programador? $es_programador </p>" ;



?>
</body>
<html>