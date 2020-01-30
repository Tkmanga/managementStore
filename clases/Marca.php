<?php

    class Marca
    {
        private $idMarca;
        private $mkNombre;

        public function listarMarcas()
        {
            $link = Conexion::conectar();
            $sql = "SELECT idMarca, mkNombre
                        FROM marcas";
            $stmt = $link->prepare($sql);
            $stmt->execute();
            $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        }

        public function verMarcaPorID()
        {

        }

        public function agregarMarca()
        {
            $mkNombre = $_POST['mkNombre'];
            $link = Conexion::conectar();
            $sql = "INSERT INTO marcas
                        VALUES
                            ( default, :mkNombre )";
            $stmt = $link->prepare($sql);
            $stmt->bindParam(':mkNombre', $mkNombre, PDO::PARAM_STR);

            if( $stmt->execute() ){
                $this->setIdMarca($link->lastInsertId());
                $this->setMkNombre($mkNombre);
                return true;
            }
            return false;

        }

        public function modificarMarca()
        {

        }

        public function eliminarMarca()
        {

        }


        /**
         * @return mixed
         */
        public function getIdMarca()
        {
            return $this->idMarca;
        }

        /**
         * @param mixed $idMarca
         */
        public function setIdMarca($idMarca)
        {
            $this->idMarca = $idMarca;
        }

        /**
         * @return mixed
         */
        public function getMkNombre()
        {
            return $this->mkNombre;
        }

        /**
         * @param mixed $mkNombre
         */
        public function setMkNombre($mkNombre)
        {
            $this->mkNombre = $mkNombre;
        }



    }
