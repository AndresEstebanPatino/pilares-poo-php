<?php 
class Libro 
{

    //Atributos
    public  $id;
    public  $nombre;
    public  $autor;
    public  $precio;
    public  $stock;

    //Método constructor
    public function __construct($id, $nombre,  $autor,  $precio,  $stock)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->autor = $autor;
        $this->precio = $precio;
        $this->stock = $stock;

    }

    public function leerme() {
        echo "Un humano me está leyendo y me llamo {$this->nombre}.";
    }

    public function pasarPagina(){
        echo "Me pasaron de página.";
    }

}


?>