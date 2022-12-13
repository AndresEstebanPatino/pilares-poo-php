<?php 

class Carro
{
    public $ruedas;
    public $marca;
    public $motor;
    public $puertas;

    public function __construct($ruedas, $marca, $motor, $puertas)
    {
        $this->ruedas = $ruedas;
        $this->marca = $marca;
        $this->motor = $motor;
        $this->puertas = $puertas;
    }

    public function encerder(){
        echo "Carro encendido";
    }

    public function arrancar(){
        echo "Carro arrancando";
    }

    public function girarALaDerecha(){
        echo "Carro girando a la derecha";
    }

    public function girarALaIzquierda(){
        echo "Carro girando a la izquierda";
    }

    public function frenar(){
        echo "Carro frenando";
    }
}

class Formula1 extends Carro
{
    public function encenderDrs(){
        echo "Encendiendo el DRS";
    }

    public function entrarAPits(){
        echo "Entrando a los pits";
        
    }

}

class FormulaRalf extends Formula1
{

}

class Nascar extends Carro {}



?>