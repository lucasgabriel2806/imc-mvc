<?php

    class Imc 
    {

        public function __construct(
            private float $peso = 0, private float $altura
        ) 
        {}

        public function getPeso() 
        {
            return $this->peso;
        }

        public function getAltura()
        {
            return $this->altura;
        }

        public function setPeso($peso)
        {
            $this->peso = $peso;
        }

        public function setAltura($altura)
        {
            $this->altura = $altura;
        }

    }

?>