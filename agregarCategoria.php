<?php
require 'clases/Conexion.php';
require 'clases/Categoria.php';
$objCategoria = new Categoria;
$chequeo = $objCategoria->agregarCategoria();
include 'includes/header.html';
include 'includes/nav.php';
 ?>

<main class="container">
  <h1>Alta de una nueva categoria: </h1>
  <?php
  $mensaje = 'No se pudo agregar la Marca';
  $class = 'danger';
  if( $chequeo ){
      $mensaje = 'Marca '.$objCategoria->getcatNombre();
      $mensaje .= ' agregada correctamente.';
      $class = 'success';

  }
   ?>
   <div class="alert alert-<?= $class; ?>">
       <?= $mensaje; ?>
   </div>
</main>
 <?php  include 'includes/footer.php';  ?>
