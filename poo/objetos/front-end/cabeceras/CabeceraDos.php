<?php
namespace Cabeceras;

require_once 'Cabecera.php';

class CabeceraDos extends Cabecera
{

    protected $logotipo;


    function __construct()
    {
        $this->estableceSecciones();
        $this->estableceCabecera();
    }

    protected function estableceSecciones()
    {
        $this->numero_secciones = 2;
        $this->logotipo = '
            <div id="logotipo">
                <a href="/">
                    <div id="logo">
                        PV
                    </div>
                    <div id="logo-descripcion">
                        Programador Vagabundo
                    </div>
                </a>
            </div>
            <nav id="menu-principal">
                <ul class="menu-horizontal">
                    <li><a href="/">Inicio</a></li>
                    <li><a href="/poo.php">POO</a></li>
                </ul>
            </nav>
        ';
    }
    protected function obtenSecciones()
    {
        return $this->logotipo;
    }
}
?>