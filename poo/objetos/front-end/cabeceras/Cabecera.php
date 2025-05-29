<?php
namespace Cabeceras;

abstract class Cabecera
{
  protected $header;
  protected $header_css;
  protected $header_js;
  protected $cabecera_css;
  protected $cabecera_js;

  public function estableceCabeceraHTML(string $logotipo, string $enlace_logotipo, string $texto_logotipo):void
  {
    $this->estableceSeccionesHTML($logotipo, $enlace_logotipo, $texto_logotipo);
  }

  public function obtenCabeceraHTML():string
  {
    $this->header = '<header>' .
        $this->obtenSeccionesHTML() .
    '</header>';

    return $this->header;
  }
  public function estableceCabeceraCss(string $fondo, string $position, string $ancho, string $padding_y):void
  {
    $this->header_css = '
    header {
        background-color: ' . $fondo . ';
        display: flex;
        justify-content: ' . $position . ';
        padding: ' . $padding_y . ' 20px;
    }';
    $this->estableceSeccionesCss($ancho, $position);
  }

  public function obtenCabeceraCss():string
  {
    return $this->header_css .
    $this->obtenSeccionesCss();
  }
  abstract protected function estableceSeccionesHTML(string $logotipo, string $enlace_logotipo, string $texto_logotipo):void;
  abstract protected function obtenSeccionesHTML():string;
  abstract protected function estableceSeccionesCss(string $ancho, string $position):void;
  abstract protected function obtenSeccionesCss():string;
}
?>