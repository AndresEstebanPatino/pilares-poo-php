<?php 

require_once('clases/Libro.php');
require_once('clases/Carro.php');
require_once('clases/Pago.php');

$libro1 = new Libro(
    1,
    "Diario del fin del mundo",
    "Mario mendoza",
    25.50,
    100
);

$libro1->leerme();
echo "<br>";
echo "<br>";
$libro1->pasarPagina();
echo "<br>";
echo "<br>";



$libro2  = new Libro(2, "La historia del loco", "John Katzenbach", 2, 20);


var_dump($libro1);
echo "<br>";
echo "<br>";
var_dump($libro2);
echo "<hr>";

$carro1 = new Carro(
    4,
    "Mercedes",
    2500,
    2
);

var_dump($carro1);
echo "<br>";
$carro1->encerder();
echo "<br>";
$carro1->arrancar();
echo "<br>";
echo "<br>";


$formula1 = new Formula1(
    4,
    "Red bull",
    1600,
    0
);

var_dump($formula1);
echo "<br>";
$formula1->encerder();
echo "<br>";
$formula1->arrancar();
echo "<br>";
$formula1->encenderDrs();
echo "<br>";
$formula1->entrarAPits();

echo "<br>";

$formulaRalf = new FormulaRalf(
    4,
    "Mercedes",
    1600,
    0
);

var_dump($formulaRalf);
echo "<br>";
$formulaRalf->entrarAPits();
echo "<hr>";
echo "<br>";

$tarjeta = new Tarjeta(
    "2222 2222 2222 2222",
    "Pepito de la calzada",
    "Desarrollo ecommerce"
);

echo "<br>";

echo $tarjeta->pagar_desarrollo_ecommece(25000);
echo "<br>";
echo "<br>";

$tarjeta->nombrePagador = "Juanito de la calzada";
$tarjeta->concepto = "Pago de curso de js";
echo $tarjeta->pagar_curso_js(9000);
//$tarjeta->obtenerNumeroDeCuenta();


?>