<?php
namespace Cabeceras;

require_once 'Cabecera.php';

class CabeceraUnaSeccionLogotipo extends Cabecera
{

  private $logotipo;
  protected $logotipo_css;
  protected $logotipo_js;


  protected function estableceSeccionesHTML(string $logotipo, string $enlace_logotipo, string $texto_logotipo):void
  {
    $this->logotipo = '
    <div id="cabecera-una-seccion-logotipo" class="izquierda">
      <a href="' . $enlace_logotipo . '">
        <div id="logo">
          ' . $logotipo . '
        </div>
        <div id="logo-descripcion">
          ' . $texto_logotipo . '
        </div>
      </a>
    </div>
    ';
  }
  protected function obtenSeccionesHTML():string
  {
    return $this->logotipo;
  }


  protected function estableceSeccionesCss(string $ancho, string $position):void
  {
    $this->logotipo_css = '
      #cabecera-una-seccion-logotipo {
        //background-color: #23B;
      }
      #cabecera-una-seccion-logotipo a {
        width: ' . $ancho . ';
        display: flex;
        justify-content: ' . $position . ';
        align-items: center;
        text-decoration: none;
      }
      #cabecera-una-seccion-logotipo #logo {
        font-family: var(--letra-bebas);
        font-size: var(--rem-3);
        padding: 0 var(--rem-9);
        color: var(--verde-neon);
      }
      cabecera-una-seccion-logotipo #logo-descripcion {
        font-size: var(--rem-10);
        width: var(--rem-2);
        color: var(--verde-neon);
      }
    ';
  }
  protected function obtenSeccionesCss():string
  {
    return $this->logotipo_css;
  }
}
?>