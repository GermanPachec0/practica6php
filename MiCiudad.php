<?php
    class City {
        public $id;
        public $ciudad;
        public $pais;
        public $habitantes;
        public $superficie;
        public $tieneMetro;

         
        function setId($id){
                $this -> id = $id;
        }
        function getId(){
            return  $this -> id;
        }

        function setCiudad($ciudad){
            $this -> ciudad  = $ciudad;
        }
        function getCiudad(){
            return  $this -> ciudad;
        }

        function setPais($pais){
            $this -> pais = $pais;
        }
        function getPais(){
            return  $this -> pais;
        }

        function setHabitantes($hab){
            $this -> habitantes = $hab;
        }
        function getHabitantes(){
            return  $this -> habitantes;
        }

        function setSuperficie($sup){
            $this -> superficie = $sup;
        }
        function getSuperficie(){
            return  $this -> superficie;
        }

        function setTieneMetro($metro){
            $this -> tieneMetro = $metro;
        }
        function getTieneMetro(){
            return  $this -> tieneMetro;
        }
}

    
 ?>