<?php
    require 'clases/Conexion.php';
    require 'clases/Marca.php';
    $objMarca = new Marca;
    $marcas = $objMarca->listarMarcas();

    require 'clases/Categoria.php';
    $objCategoria = new Categoria;
    $Categorias = $objCategoria->listarCategorias();


    include 'includes/header.html';
    include 'includes/nav.php';


?>

<main class="container">
    <h1>Formulario de alta de un producto </h1>

    <form action="agregarProducto.php" method="post" enctype="multipart/form-data">
        Nombre:
        <br>
        <input type="text" name="prdNombre" class="form-control" required>
        Precio:
        <br>
        <input type="number" name="prdPrecio" class="form-control" required>
        <br>
        Marca:
        <select name="idMarca">
          <?php foreach ($marcas as $marca) { ?>
            <option value="<?= $marca['idMarca'] ?>"><?= $marca['mkNombre'] ?></option>
          <?php } ?>
        </select>

        Categoria:
        <select name="idCategoria">
          <?php foreach ($Categorias as $Categoria) { ?>
            <option value="<?= $Categoria['idCategoria'] ?>"><?= $Categoria['catNombre'] ?></option>
          <?php } ?>
        </select>

        Presentación:
        <select name="prdPresentacion">
          <option value="8GB">8GB</option>
          <option value="16GB">16GB</option>
          <option value="32GB">32GB</option>
          <option value="64GB">64GB</option>
        </select>
        <br>
        Stock:
        <input type="number" name="prdStock" class="form-control" required>
        Imagen:
        <input type="file" name="prdImagen">

        <br>
        <input type="submit" value="Agregar Producto" class="btn btn-secondary">
        <a href="adminProductos.php" class="btn btn-light">Volver a panel de Productos</a>

    </form>

</main>
<?php  include 'includes/footer.php';  ?>
