<?php
namespace Cabezas;



abstract class Cabeza {
    protected $cabeza;
    //protected $directorio_raiz;

    function __construct($titulo){
        //$this->directorio_raiz = $_SERVER["DOCUMENT_ROOT"];
        $this->cabeza = '
        <!DOCTYPE html>
        <html lang="es_MX">
        <head>
            <meta charset="UTF-8">
            <link rel="icon" href="/activos/favicon.jpg">
            <link rel="icon" href="/activos/favicon.webp">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>' . $titulo . '</title>

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
        </head>
        ';
    }
}
