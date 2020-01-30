<?php

/**
 *
 */
class Producto
{
  private $idProducto;
  private $prdNombre;
  private $prdPrecio;
  private $idMarca;
  private $idCategoria;
  private $prdPresentacion;
  private $prdImagen;

  public function listarProductos()
  {
      $link = Conexion::conectar();
      $sql = "SELECT idProducto, prdNombre, prdPrecio, idMarca, idCategoria, prdPresentacion, prdImagen FROM productos";
      $stmt = $link->prepare($sql);
      $stmt->execute();
      $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $resultado;
  }

}


 ?>
