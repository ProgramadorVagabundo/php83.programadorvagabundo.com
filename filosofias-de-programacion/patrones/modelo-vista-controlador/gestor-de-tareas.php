<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/env.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/poo/objetos/front-end/cabeceras/CabeceraUnaSeccionLogotipo.php';



use Cabeceras\CabeceraUnaSeccionLogotipo;



$cabecera = new CabeceraUnaSeccionLogotipo();
?>



<!DOCTYPE html>
<html lang="es_MX">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="<?php echo $env['DOMINIO']; ?>/activos/favicon.jpg" />
    <link rel="icon" href="<?php echo $env['DOMINIO']; ?>/activos/favicon.webp" />
    <title>Patrones de Diseño de Software</title>

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
    <link rel="stylesheet" href="<?php echo $env['DOMINIO']; ?>/css/global.css" />

    <!-- Estilo Componentes estáticos -->
    <link rel="stylesheet" href="<?php echo $env['DOMINIO']; ?>/componentes-estaticos/galerias-fichas/galeria-fichas.css">

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
    <main class="container">
      <div class="row justify-content-evenly">
        <section class="col-5 explicacion">
          <div class="row">
            <div class="col-12">
              <h1 class="">Patrón MVC</h1>
              <br>
              <p class="">El patrón Model-View-Controller es un diseño arquitectónico que separa la lógica de una aplicación en tres componentes interconectados, cada uno con una responsabilidad específica:</p>
              <ol>
                <li><strong>Model (Modelo):</strong> Representa los datos, la lógica de negocio y las reglas de la aplicación. Es el "cerebro" que maneja la información y las operaciones.</li>
                <li><strong>View (Vista):</strong> Es la representación visual de los datos del modelo. Muestra la información al usuario y refleja los cambios en el modelo.</li>
                <li><strong>Controller (Controlador):</strong> Actúa como intermediario entre el modelo y la vista. Recibe las entradas del usuario, actualiza el modelo y coordina la actualización de la vista.</li>
              </ol>
              <h3 class="">Flujo básico:</h3>
              <ul>
                <li>El usuario interactúa con la <b>vista</b>.</li>
                <li>La <b>vista</b> envía la acción al <b>controlador</b>.</li>
                <li>El <b>controlador</b> modifica el <b>modelo</b> si es necesario.</li>
                <li>El <b>modelo</b> notifica a la <b>vista</b> de los cambios (directa o indirectamente).</li>
                <li>La <b>vista</b> se actualiza para reflejar el estado del <b>modelo</b>.</li>
              </ul>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-12">
              <h2>1. Model (Modelo)</h2>
              <br>
              <p><strong>Responsabilidad:</strong> Gestiona los datos y la lógica subyacente. Puede interactuar con bases de datos, APIs externas o cualquier fuente de datos.</p>
              <strong>Características:</strong>
              <ul>
                <li>Independiente de la interfaz de usuario.</li>
                <li>Contiene la lógica de negocio (validaciones, cálculos, reglas).</li>
                <li>Notifica a las vistas cuando cambia (en algunos casos mediante eventos o actualizaciones explícitas).</li>
              </ul>
              <p><strong>Ejemplo en la vida real:</strong> En una app de tareas, el modelo sería la lista de tareas, con métodos para agregar, eliminar o marcar como completada una tarea.</p>
            </div>
          </div>
          <br>
          <br>
          <div class="row">
            <div class="col-12">
              <h2>2. View (Vista)</h2>
              <br>
              <p><strong>Responsabilidad:</strong> Muestra los datos del modelo al usuario y permite la interacción (botones, formularios, etc.).</p>
              <strong>Características:</strong>
              <ul>
                <li>No contiene lógica de negocio, solo presenta datos.</li>
                <li>Puede ser estática o dinámica (actualizarse cuando el modelo cambia).</li>
              </ul>
              <p><strong>Ejemplo en la vida real:</strong> Una tabla HTML que muestra las tareas o un formulario para agregar una nueva tarea.</p>
            </div>
          </div>
          <br>
          <br>
          <div class="row">
            <div class="col-12">
              <h2>3. Controller (Controlador)</h2>
              <br>
              <p><strong>Responsabilidad:</strong> Maneja las entradas del usuario, actualiza el modelo y coordina la vista.</p>
              <strong>Características:</strong>
              <ul>
                <li>Escucha eventos (clics, envíos de formularios).</li>
                <li>Decide qué hacer con la entrada y cómo reflejarlo en el modelo o la vista.</li>
              </ul>
              <p><strong>Ejemplo en la vida real:</strong> Un botón "Agregar tarea" que, al hacer clic, envía los datos al controlador, quien actualiza el modelo.</p>
            </div>
          </div>
        </section>
        <div class="vr p-0"></div>
        <section class="col-5">
          <div class="row">
            <div class="col-12">
              <h2>Ejemplo de código</h2>
              <p>Aquí puedes ver un ejemplo de cómo implementar el patrón MVC en PHP para un gestor de tareas.</p>
            </div>
          </div>
        </section>
      </div>
    </main>
  </body>
</html>