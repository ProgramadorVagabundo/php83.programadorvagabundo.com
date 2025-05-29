<?php
require_once 'poo/objetos/front-end/cabeceras/CabeceraUnaSeccionLogotipo.php';


use Cabeceras\CabeceraUnaSeccionLogotipo;


$cabecera = new CabeceraUnaSeccionLogotipo();
?>



<!DOCTYPE html>
<html lang="es_MX">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="./activos/favicon.jpg" />
    <link rel="icon" href="./activos/favicon.webp" />
    <title>Filosofías de Programación</title>

    <!-- Fuentes Google-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&family=Bebas+Neue&family=Great+Vibes&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
      rel="stylesheet"
    />
    
    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
    rel="stylesheet" />
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Estilo Global-->
    <link rel="stylesheet" href="./css/global.css" />

    <!-- Estilo Componentes estáticos -->
    <link rel="stylesheet" href="./componentes-estaticos/galerias-fichas/galeria-fichas.css">

    <!-- Estilos de clases -->
    <style>
      <?php
      $cabecera->estableceCabeceraCss('var(--morado-neon)', 'center', '40vw', '20px');
      echo $cabecera->obtenCabeceraCss();
      ?>
    </style>

  </head>
  <body>
    <?php
    $cabecera->estableceCabeceraHTML('PV', '/', 'Programador Vagabundo');
    echo $cabecera->obtenCabeceraHTML();
    ?>
    <main>
      <section class="galeria-fichas">
        <ul>
          <li>
            <a href="filosofias-de-programacion/patrones-de-diseno-software.php">
              <div class="ficha">
                <div class="titulo">
                  Patrones de Diseño de Software
                </div>
                <div class="descripcion">
                  Ejemplos de patrones de diseño de software, ejercicios, etc.
                </div>
              </div>
            </a>
          </li>
          <li>
            <a href="#">
              <div class="ficha">
                <div class="titulo">
                  Diseño de Software
                </div>
                <div class="descripcion">
                  Comprensión, práctica y ejemplos de diseño de software.
                </div>
              </div>
            </a>
          </li>
          <li>
            <a href="#">
              <div class="ficha">
                <div class="titulo">
                  Ingeniería de Software
                </div>
                <div class="descripcion">
                  Comprensión, práctica y ejemplos de ingeniería de software.
                </div>
              </div>
            </a>
          </li>
          <li>
            <a href="poo.php">
              <div class="ficha">
                <div class="titulo">
                  Paradigma Orientado a Objetos
                </div>
                <div class="descripcion">
                  Es el lugar donde podemos encontrar ejemplos, ejercicios relacionados al uso de los objetos. También aquí se pueden encontrar diversos objetos útilies o de práctica solamente.
                </div>
              </div>
            </a>
          </li>
          <li>
            <a href="filosofias-de-programacion.php">
              <div class="ficha">
                <div class="titulo">
                  Filosofías de Programación
                </div>
                <div class="descripcion">
                  Pensemos sobre arquitectura y diseño de software. Aquí se pueden encontrar ejemplos de patrones de diseño, buenas prácticas, etc.
                </div>
              </div>
            </a>
          </li>
          <li>
            <a href="">
              <div class="ficha">
                <div class="titulo">
                  Utilidades
                </div>
                <div class="descripcion">
                  Estas son principalmente clases de CSS que nos ayudan a codificar más rápido el renderizado de la página.
                </div>
              </div>
            </a>
          </li>
        </ul>
      </section>


      <h1>Filosofías de Programación</h1>
      <p>En este apartado se hablará de las filosofías de programación que se pueden encontrar en el mundo de la programación.</p>
      <p>Estas filosofías son:</p>
      <ul>
        <li>Programación Orientada a Objetos</li>
        <li>Programación Orientada a Funciones</li>
        <li>Programación Orientada a Eventos</li>
        <li>Programación Orientada a Componentes</li>
        <li>Programación Orientada a Modelos</li>
        <li>Programación Orientada a Lógica</li>
        <li>Programación Orientada a Servicios</li>
        <li>Programación Orientada a Roles</li>
        <li>Programación Orientada a Dominios</li>
        <li>Programación Orientada a Aspectos</li>
        <li>Programación Orientada a Flujos</li>
        <li>Programación Orientada a Reglas</li>
        <li>Programación Orientada a Datos</li>
        <li>Programación Orientada a Espacios</li>
        <li>Programación Orientada a Prototipos</li>
      </ul>
    </main>
  </body>
</html>