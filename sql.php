<!DOCTYPE html>
<html lang="es_MX">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="./activos/favicon.jpg">
    <link rel="icon" href="./activos/favicon.webp">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrenamiento PHP</title>

    <!-- Fuentes Google-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&family=Bebas+Neue&family=Great+Vibes&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  </head>

    <!-- Mi Estilo Global-->
    <link rel="stylesheet" href="./css/global.css" />

    <!-- CSS para mis Componentes -->
    <link rel="stylesheet" href="./componentes-estaticos/galerias-fichas/galeria-fichas.css">
</head>
<body>

    <?php include_once __DIR__ . '/componentes-estaticos/globales/cabecera.html';
    ?>

    <main>
        <h1>Entrenamiento PHP</h1>
        <p>Este proyecto es principalmente para entrenar con Back-End:</p>
        <ul>
            <li>Petisiones, Respuestas y sus respectivos estados</li>
            <li>SQL y la comunicación con la base de datos MariaDB</li>
            <li>Manejo de Archivos</li>
            <li>Utilidades.</li>
            <li>Componentes.</li>
            <li>Comunicación HTTP, URLs.</li>
            <li>Entre muchos otros temas...</li>
        </ul>
        <p>Pero también entrenaremos un podo con el Front-End:</p>
        <ul>
            <li>HTML, CSS, JavaScript y el propio PHP</li>
        </ul>
        <p>Eso si, ¡Todo con código natural!</p>
        <p>¡Ha! No puede faltar la teoria ¡Paradigma orientado a objetos!</p>
<?php
$fichas = [
    [
        'titulo' => 'Conexiones y Configuración',
        'descripcion' => 'Aprende a establecer conexiones seguras con bases de datos MySQL/MariaDB usando PHP. Incluye PDO, mysqli, configuración y buenas prácticas.',
        'enlace' => 'sql/conexiones.php',
    ],
    [
        'titulo' => 'Consultas Básicas (CRUD)',
        'descripcion' => 'Domina las operaciones fundamentales: SELECT, INSERT, UPDATE y DELETE. Incluye filtros WHERE, ORDER BY, LIMIT y más.',
        'enlace' => 'sql/crud.php',
    ],
    [
        'titulo' => 'Consultas Avanzadas',
        'descripcion' => 'Explora JOIN, subconsultas, funciones agregadas (COUNT, SUM, etc), GROUP BY, HAVING y consultas complejas.',
        'enlace' => 'sql/consultas-avanzadas.php',
    ],
    [
        'titulo' => 'Seguridad y Prevención',
        'descripcion' => 'Protege contra SQL Injection, implementa prepared statements, escapa datos y maneja errores de forma segura.',
        'enlace' => 'sql/seguridad.php',
    ],
    [
        'titulo' => 'Optimización y Rendimiento',
        'descripcion' => 'Mejora el rendimiento con índices, caché, transacciones y consultas optimizadas. Incluye análisis EXPLAIN.',
        'enlace' => 'sql/optimizacion.php',
    ],
    [
        'titulo' => 'Gestión de Bases de Datos',
        'descripcion' => 'Administra bases de datos: crear/modificar tablas, respaldos, migraciones y mantenimiento.',
        'enlace' => 'sql/gestion-bd.php',
    ],
];
include __DIR__ . '/componentes-reutilizables/galeria-fichas/galeria-fichas.php';


?>
        </main>
</body>
</html>