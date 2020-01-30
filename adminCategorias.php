<?php
    require 'clases/Conexion.php';
    require 'clases/Categoria.php';
    $objCategoria = new Categoria;
    $Categorias = $objCategoria->listarCategorias();
    include 'includes/header.html';
    include 'includes/nav.php';
?>

<main class="container">
    <h1>Panel de administración de Categorias</h1>

    <a href="admin.php" class="btn btn-outline-secondary m-3">Volver a principal</a>

        <table class="table table-stripped table-bordered table-hover">
            <thead class="thead-dark">
            <tr>
                <th>id</th>
                <th>Categoria</th>
                <th colspan="2">
                    <a href="formAgregarCategoria.php" class="btn btn-dark">
                        agregar
                    </a>
                </th>
            </tr>
            </thead>
            <tbody>


              <?php
              foreach ($Categorias as $categoria) {

               ?>
                <tr>

                <td><?= $categoria['idCategoria']?></td>
                <td><?= $categoria['catNombre']?></td>
                <td>
                    <a href="formModificarCategoria.php" class="btn btn-outline-secondary">
                        modificar
                    </a>
                </td>
                <td>
                    <a href="formEliminarCategoria" class="btn btn-outline-secondary">
                        eliminar
                    </a>
                </td>
            </tr>
 <?php } ?>
            </tbody>
        </table>

    <a href="admin.php" class="btn btn-outline-secondary m-3">Volver a principal</a>

</main>

<?php  include 'includes/footer.php';  ?>
