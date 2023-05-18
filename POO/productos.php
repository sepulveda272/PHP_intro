<?php
    class Producto
    {
        private $nombre = "Cubo";
        private $precio = "90.000";
        private $cantidad = "los que quiera";
        private $tipo = "chino y japones";
        private $color = "todos los colores";
        private $tamaño = "El que sea";
        private $calidad = "exelente calidad";

        public function getNombre()
        {
            return $this->nombre;
        }
        public function getPrecio()
        {
            return $this->precio;
        }
        public function getCantidad()
        {
            return $this->cantidad;
        }
        public function getTipo()
        {
            return $this->tipo;
        }
        public function getColor()
        {
            return $this->color;
        }
        public function getTamaño()
        {
            return $this->tamaño;
        }
        public function getCalidad()
        {
            return $this->calidad;
        }

        public function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }
        public function setPrecio($precio)
        {
            $this->precio = $precio;
        }
        public function setCantidad($cantidad)
        {
            $this->cantidad = $cantidad;
        }
        public function setTipo($tipo)
        {
            $this->tipo = $tipo;
        }public function setColor($color)
        {
            $this->color = $color;
        }
        public function setTamaño($tamaño)
        {
            $this->tamaño = $tamaño;
        }
        public function setCalidad($calidad)
        {
            $this->calidad = $calidad;
        }
    }
    $producto = new Producto();
    $producto->setNombre("Mesita Bonita");
    $producto->setPrecio("$50.000");
    $producto->setCantidad("50 mesita");
    $producto->setCalidad("Exelente calidad");
    $producto->setTipo("Mesita de tipo para comer");
    $producto->setColor("todos los colores");
    $producto->setTamaño("El que este buscando se le tiene");

    echo $producto->getNombre() . "<br>";
    echo $producto->getPrecio() . "<br>";
    echo $producto->getCalidad() . "<br>";
    echo $producto->getCantidad() . "<br>";
    echo $producto->getTipo() . "<br>";
    echo $producto->getColor() . "<br>";
    echo $producto->getTamaño() . "<br>";
?>