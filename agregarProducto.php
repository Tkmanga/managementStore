<?php
require 'clases/Conexion.php';
require 'clases/Producto.php';
$objProducto = new Producto;
$chequeo = $objProducto->agregarProducto();
include 'includes/header.html';
include 'includes/nav.php';
 ?>

<main class="container">
  <h1>Alta de nuevo producto</h1>
  <?php
  $mensaje = 'No se pudo agregar';
  $class = 'danger';
  if ($chequeo) {
    $mensaje = 'Producto '.$objProducto->getPrdNombre();
    $mensaje .= " correctamente";
    $class = 'success';

  }
   ?>
   <div class="alert alert-<?= $class ?>">
     <?= $mensaje; ?>
   </div>
   <a href="adminProductos.php" class="btn btn-light">Volver a panel de Productos</a>
</main>

<?php include 'includes/footer.php';  ?>
