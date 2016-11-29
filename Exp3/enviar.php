<?php

function Filtro($texto) {
  return htmlspecialchars(trim($texto), ENT_QUOTES);
}

$titulo = isset($_POST['titulo']) ? Filtro($_POST['titulo']) : '';
$unidades = isset($_POST['unidades']) ? Filtro($_POST['unidades']) : '';
$direccion = isset($_POST['despacho']) ? Filtro($_POST['unidades']): '';
$error = '';

if($titulo == "Matrix" || $titulo == "Psicosis"){
	
}else{
	echo "Solo existen 2 peliculas: Matrix y Psicosis, Gracias";
	$error = "no existe esa pelicula";

	//exit;
	
} if (empty($titulo)) {
	$error = 'Porfavor ingrese titulo de la pelicula';
}else if ($titulo == "Matrix" && $unidades > 2) {
	$error = "no se pueden mas de 2 peliculas de Matrix";
	echo $error;
}else if ($titulo == "Psicosis" && $unidades > 3 ) {
	$error = "no se pueden mas de 3 pelclas de Psicosis";
	echo $error;
}

if(empty($error)) {
?>

	
<h3>¡Pelicula(s) arrendada(s) satisfactoriamente!</h3>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Datos enviados</h3>
    </div>
    <div class="panel-body">
      <p>Pelicula arrendada <b><?php echo $titulo; ?></b>,</p>
      <p>Unidades <b><?php echo $unidades; ?></b>
     
    </div><?php } ?>
    <div class="panel-footer">
      <div class="text-right">
        <a href="./formulario.html" class="btn btn-primary">
          <i class="glyphicon glyphicon-chevron-left"></i>
          Volver
        </a>
      </div>
    </div>
  </div>

