<?php

/**
 *
 */
include 'functions/altaImg.php';

class Producto
{
  private $idProducto;
  private $prdNombre;
  private $prdPrecio;
  private $idMarca;
  private $idCategoria;
  private $prdPresentacion;
  private $prdImagen;
  private $prdStock;

  public function listarProductos()
  {
      $link = Conexion::conectar();
      $sql = "SELECT idProducto, prdNombre, prdPrecio, idMarca, idCategoria, prdPresentacion, prdImagen FROM productos";
      $stmt = $link->prepare($sql);
      $stmt->execute();
      $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $resultado;
  }
  public function agregarProducto()
  {
      $prdNombre  = $_POST['prdNombre'];
      $prdPrecio = $_POST['prdPrecio'];
      $idMarca = $_POST['idMarca'];
      $idCategoria = $_POST['idCategoria'];
      $prdPresentacion = $_POST['prdPresentacion'];
      $prdStock = $_POST['prdStock'];
      $prdImagen = $_FILES['prdImagen']['name'];
      $link = Conexion::conectar();
      $sql = "INSERT INTO productos VALUES (default, :prdNombre, :prdPrecio, :idMarca, :idCategoria, :prdPresentacion, :prdStock, :prdImagen )";
      $stmt = $link->prepare($sql);
      $stmt->bindParam(':prdNombre',$prdNombre,PDO::PARAM_STR);
      $stmt->bindParam(':prdPrecio',$prdPrecio,PDO::PARAM_INT);
      $stmt->bindParam(':idMarca',$idMarca,PDO::PARAM_INT);
      $stmt->bindParam(':idCategoria',$idCategoria,PDO::PARAM_INT);
      $stmt->bindParam(':prdPresentacion',$prdPresentacion,PDO::PARAM_STR);
      $stmt->bindParam(':prdStock',$prdStock,PDO::PARAM_INT);
      $stmt->bindParam(':prdImagen',$prdImagen,PDO::PARAM_STR);

      if ($stmt->execute()) {
        $this->setIdProducto($link->lastInsertId());
        $this->setPrdNombre($prdNombre);
        $this->setPrdPrecio($prdNombre);
        $this->setIdMarca($prdNombre);
        $this->setIdCategoria($prdNombre);
        $this->setPrdPresentacion($prdNombre);
        $this->setPrdStock($prdStock);
        $this->setPrdImagen($prdImagen);
        guardarArchivo();
        return true;
      }
      return false;
    }


  public function eliminarProducto()
  {
    $link = Conexion::conectar();
    $sql = "DELETE FROM productos where idProducto = :idProducto;"
    
  }
public function getIdProducto()
{
    return $this->idProducto;
}


public function setIdProducto($idProducto)
{
    $this->idProducto = $idProducto;

    return $this;
}


public function getPrdNombre()
{
    return $this->prdNombre;
}


public function setPrdNombre($prdNombre)
{
    $this->prdNombre = $prdNombre;

    return $this;
}


public function getPrdPrecio()
{
    return $this->prdPrecio;
}


public function setPrdPrecio($prdPrecio)
{
    $this->prdPrecio = $prdPrecio;

    return $this;
}


public function getIdMarca()
{
    return $this->idMarca;
}


public function setIdMarca($idMarca)
{
    $this->idMarca = $idMarca;

    return $this;
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


public function getPrdPresentacion()
{
    return $this->prdPresentacion;
}


public function setPrdPresentacion($prdPresentacion)
{
    $this->prdPresentacion = $prdPresentacion;

    return $this;
}


public function getPrdImagen()
{
    return $this->prdImagen;
}


public function setPrdImagen($prdImagen)
{
    $this->prdImagen = $prdImagen;

    return $this;
}



public function getPrdStock()
{
    return $this->prdStock;
}


public function setPrdStock($prdStock)
{
    $this->prdStock = $prdStock;

    return $this;
}

      }


 ?>
