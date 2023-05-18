<?php
     class Camper
     {
        //1. Atributos con modificadores de acceso,
        //private,public, protected

        private $nombre;
        private $email ;
        private $celular ;

        //2. Constructor (metodo magico) 
        //en ocasiones se inicializa con valores parametrizados


        /* public function __construct($nombre, $email, $celular)  //ideal para inicializar valores de propiedades
        {
            $this->nombre = $nombre;
            $this->email = $email;
            $this->celular = $celular;
        } */

        //3. metodos (Getters and setter)
        //metodo getter
        public function getNombre()
        {
            return $this->nombre;
        }
        public function getEmail()
        {
            return $this->email;
        }
        public function getCelular()
        {
            return $this->celular;
        }
        //get--> obtener valores de atributos
        //get--> modificar valores de atributos
        
        //METODO SETTERS

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        public function setEmail($email){
            $this->email = $email;
        }
        public function setCelular($celular){
            $this->celular = $celular;
        }
     }

    $camper = new Camper();
    $camper->setNombre("yeily");
    $camper->setEmail("yeily@gmail.com");
    $camper->setCelular("123456789");

     echo $camper->getNombre() . "<br>";
     echo $camper->getEmail() . "<br>";
     echo $camper->getCelular();
?>