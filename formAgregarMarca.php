<?php
    include 'includes/header.html';
    include 'includes/nav.php';
?>

    <main class="container">
        <h1>Formulario de alta de una marca</h1>

        <form action="agregarMarca.php" method="post">
            Marca:
            <br>
            <input type="text" name="mkNombre" class="form-control" required>
            <br>
            <input type="submit" value="Agregar Marca" class="btn btn-secondary">
            <a href="adminMarcas.php" class="btn btn-light">Volver a panel de marcas</a>

        </form>

    </main>

<?php  include 'includes/footer.php';  ?>
