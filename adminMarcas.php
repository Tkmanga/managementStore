<?php
    require 'clases/Conexion.php';
    require 'clases/Marca.php';
    $objMarca = new Marca;
    $marcas = $objMarca->listarMarcas();
    include 'includes/header.html';
    include 'includes/nav.php';
?>

<main class="container">
    <h1>Panel de administración de Marcas</h1>

    <a href="admin.php" class="btn btn-outline-secondary m-3">Volver a principal</a>

        <table class="table table-stripped table-bordered table-hover">
            <thead class="thead-dark">
            <tr>
                <th>id</th>
                <th>Marca</th>
                <th colspan="2">
                    <a href="formAgregarMarca.php" class="btn btn-dark">
                        agregar
                    </a>
                </th>
            </tr>
            </thead>
            <tbody>
<?php
            foreach ( $marcas as $marca  ){
?>
            <tr>
                <td><?= $marca['idMarca']; ?></td>
                <td><?= $marca['mkNombre']; ?></td>
                <td>
                    <a href="formModificarMarca.php" class="btn btn-outline-secondary">
                        modificar
                    </a>
                </td>
                <td>
                    <a href="formEliminarMarca.php" class="btn btn-outline-secondary">
                        eliminar
                    </a>
                </td>
            </tr>
<?php
            }
?>
            </tbody>
        </table>

    <a href="admin.php" class="btn btn-outline-secondary m-3">Volver a principal</a>

</main>

<?php  include 'includes/footer.php';  ?>
