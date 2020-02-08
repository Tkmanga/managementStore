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

  public function agregarCategoria(){
    $catNombre = $_POST['catNombre'];
    $link = Conexion::conectar();
    $sql = "INSERT INTO categorias VALUES (default, :catNombre)";
    $stmt = $link->prepare($sql);
    $stmt->bindParam(':catNombre',$catNombre,PDO::PARAM_STR);
    if ($stmt->execute()) {
      $this->setIdCategoria($link->lastInsertId());
      $this->setCatNombre($catNombre);
      return true;
    }
    return false;

  }


public function getIdCategoria()
{
    return $this->idCategoria;
}


public function setIdCategoria($idCategoria)
{
    $this->idCategoria = $idCategoria;

    return $this;
}


public function getCatNombre()
{
    return $this->catNombre;
}


public function setCatNombre($catNombre)
{
    $this->catNombre = $catNombre;

    return $this;
}

      }


 ?>
