<?php
namespace Cabezas;

require_once 'cabeza.php';

class CabezaUno extends Cabeza
{
    public function obtenCabeza(){
        return $this->cabeza;
    }
}
?>