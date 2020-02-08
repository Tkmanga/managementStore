<?php
include 'includes/header.html';
include 'includes/nav.php';
 ?>

<main class="container">
  <h1>Formilario agregar categoria:</h1>
  <form action="agregarCategoria.php" method="post">
    Categoria:
    <br>
    <input type="text" name="catNombre" class="form-contro" required>
    <br>
    <input type="submit" class="btn btn-secondary" value="Agregar categoria">
    <a href="adminCategorias.php" class="btn btn-light">Volver al panel de categoria</a>
  </form>
</main>

 <?php  include 'includes/footer.php';  ?>
