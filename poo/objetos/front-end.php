<!DOCTYPE html>
<html lang="es_MX">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="./activos/favicon.jpg">
    <link rel="icon" href="./activos/favicon.webp">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paradigma Orientado a Objetos</title>

    <!-- Fuentes Google-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&family=Bebas+Neue&family=Great+Vibes&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  </head>

    <!-- Mis Estilo-->
    <link rel="stylesheet" href="../../css/global.css" />

    <!-- CSS para mis Componentes -->
    <link rel="stylesheet" href="../../componentes-estaticos/galerias-fichas/galeria-fichas.css">
</head>
<body>

    <?php require_once '../../componentes-estaticos/globales/cabecera.html' ?>

<main>
    <section class="galeria-fichas">
      <ul>
        <li>
          <a href="/poo/objetos/front-end/cabeceras.php">
            <div class="ficha">
              <div class="titulo">
                Cabeceras
              </div>
              <div class="descripcion">
                Diversas cabeceras creadas con clases.
              </div>
            </div>
          </a>
        </li>
        <li>
          <a href="#">
            <div class="ficha">
              <div class="titulo">
                SQL y BD
              </div>
              <div class="descripcion">
                Esta sección tiene que ver con la comunicacion con bases de datos por medio del lenguaje de SQL.
              </div>
            </div>
          </a>
        </li>
        <li>
          <a href="#">
            <div class="ficha">
              <div class="titulo">
                Manejo de Archivos
              </div>
              <div class="descripcion">
                Esta es la sección para aprender cosas como almacenar archivos, modificar archivos, todo lo que tenga que ver con archivos y directorios.
              </div>
            </div>
          </a>
        </li>
        <li>
          <a href="#">
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
          <a href="">
            <div class="ficha">
              <div class="titulo">
                Asincronización y Promesas
              </div>
              <div class="descripcion">
                Aquí podremos encontrar diversos ejemplos para llamar a API's por ejemplo o también recargar diversos componentes de la página o también para crear dinamismo de acuerdo a ciertos eventos.
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
  </main>
  <!--JS para mis Componentes-->
</body>
</html>