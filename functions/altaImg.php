<?php
function guardarArchivo(){
  if ($_FILES)
  {
    if ($_FILES["prdImagen"]["error"]!=0) {
      echo "hubo un error al cargar el avatar";
    }
    else
    {
      $nombre = $_FILES['prdImagen']["name"];
      $ext = pathinfo($_FILES["prdImagen"]["name"], PATHINFO_EXTENSION);
      if ($ext !="jpg" && $ext != "png" && $ext !="jpeg")
      {
        echo "no admitimos esa extension de archivo para el avatar";
      }
      else
      {
        move_uploaded_file($_FILES["prdImagen"]["tmp_name"],"productos/$nombre");
      }
    }
  }
}

 ?>
