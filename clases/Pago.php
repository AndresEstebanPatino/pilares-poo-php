<?php 
class Pago
{

    public $nombrePagador;
    public $concepto;
    //protected $numero_cuenta = "1234567890";

    public function __construct($nombrePagador, $concepto)
    {
        $this->nombrePagador = $nombrePagador;
        $this->concepto = $concepto;
    }

    private function realizar_pago($cantidad, $tipo, $numero){
        if($tipo == "Tarjeta"){
            return "Simulando la lógica de pago de $tipo  con la cantidad $cantidad, el número de cuenta $numero y el concepto {$this->concepto} del cliente {$this->nombrePagador} ";
        }
        if($tipo == "Paypal"){
            return "Simulando la lógica de pago de $tipo  con la cantidad $cantidad, el número de cuenta $numero y el concepto {$this->concepto} del cliente {$this->nombrePagador} ";
        }
    }

    protected function getPago($cantidad, $tipo, $numero){
        return $this->realizar_pago($cantidad, $tipo, $numero);

    }

}

class Tarjeta extends Pago 
    {
       // public function obtenerNumeroDeCuenta(){
         //   echo $this->numero_cuenta;
       // }
    private $numero_tarjeta;
    private $tipo = "Tarjeta";

    function __construct($numero_tarjeta, $nombrePagador, $concepto)
    {
        parent::__construct($nombrePagador, $concepto);
        $this->numero_tarjeta = $numero_tarjeta;
    }

    public function pagar_desarrollo_ecommece($cantidad){
        return $this->getPago($cantidad, $this->tipo, $this->numero_tarjeta);
    }

    public function pagar_curso_js($cantidad){
        return $this->getPago($cantidad, $this->tipo, $this->numero_tarjeta);
    }

    }

class Paypal extends Pago
{
    private $numero_paypal;
    private $tipo = "Paypal";

}

?>