<?php
require_once 'cabeceras/CabeceraUnaSeccionLogotipo.php';
//include_once 'cabeceras/CabeceraDos.php';
//include_once 'cabeceras/CabeceraTres.php';

use Cabeceras\CabeceraUnaSeccionLogotipo;
//use Cabeceras\CabeceraDos;
//use Cabeceras\CabeceraTres;



$cabecera = new CabeceraUnaSeccionLogotipo();
?>

<!DOCTYPE html>
<html lang="es_MX">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="/activos/favicon.jpg">
    <link rel="icon" href="/activos/favicon.webp">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabeceras</title>

    <!-- Fuentes Google-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&family=Bebas+Neue&family=Great+Vibes&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">

    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  </head>

    <!-- Mi Estilo Global-->
    <link rel="stylesheet" href="/css/global.css" />

    <!-- Estilos de clases -->
    <style>
      <?php
      $cabecera->estableceCabeceraCss('var(--morado-neon)', 'flex-end', '40vw', '50px');
      echo $cabecera->obtenCabeceraCss();
      ?>
    </style>
</head>



<body>
<?php
$cabecera->estableceCabeceraHTML('PV', '/', 'Programador Vagabundo');
echo $cabecera->obtenCabeceraHTML();
echo 'Hola';
echo '<br>';
echo '<br>';
echo '<br>';
//$cabecera_dos = new CabeceraDos();
//$cabecera_dos->mostrarCabecera();
echo '<br>';
echo '<br>';
echo '<br>';
//$cabecera_tres = new CabeceraTres();
//$cabecera_tres->mostrarCabecera();
echo '<br>';
echo '<br>';
echo '<br>';

$relativePath = '../../../css/global.css';
$absolutePath = realpath($relativePath);
echo $absolutePath;
echo '<br>';
echo dirname(__FILE__);
echo '<br>';
echo __DIR__;
echo '<br>';
echo $_SERVER["DOCUMENT_ROOT"];



class BaseClass {
    function __construct() {
        print "In BaseClass constructor\n";
    }
}

class SubClass extends BaseClass {
    function __construct() {
        parent::__construct();
        print "In SubClass constructor\n";
    }
}

class OtherSubClass extends BaseClass {
    // inherits BaseClass's constructor
}

echo '<br>';
echo '<br>';
// In BaseClass constructor
$obj = new BaseClass();
echo '<br>';
echo '<br>';
// In BaseClass constructor
// In SubClass constructor
$obj = new SubClass();
echo '<br>';
echo '<br>';

// In BaseClass constructor
$obj = new OtherSubClass();






?>    




</body>



</html>


