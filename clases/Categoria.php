<?php
/**
 *
 */
class Categoria
{
  private $idCategoria;
  private $catNombre;

  public function listarCategorias()
  {
      $link = Conexion::conectar();
      $sql = "SELECT idCategoria, catNombre
                  FROM categorias";
      $stmt = $link->prepare($sql);
      $stmt->execute();
      $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $resultado;
  }
}


 ?>
