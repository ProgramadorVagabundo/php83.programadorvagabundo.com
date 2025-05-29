<!DOCTYPE html>
<html lang="es_MX">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../activos/favicon.jpg">
    <link rel="icon" href="../activos/favicon.webp">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexiones SQL - Entrenamiento PHP</title>

    <!-- Fuentes Google-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&family=Bebas+Neue&family=Great+Vibes&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Mi Estilo Global-->
    <link rel="stylesheet" href="../css/global.css" />

    <!-- CSS para mis Componentes -->
    <link rel="stylesheet" href="../componentes-estaticos/galerias-fichas/galeria-fichas.css">
</head>
<body>
    <?php include_once __DIR__ . '/../componentes-estaticos/globales/cabecera.html'; ?>

    <main>
        <h1>Conexiones y Configuración SQL</h1>
        
        <section class="contenido">
            <h2>¿Qué aprenderemos?</h2>
            <ul>
                <li>Conexiones PDO</li>
                <li>Conexiones MySQLi</li>
                <li>Configuración segura</li>
                <li>Manejo de errores</li>
            </ul>

            <h2>Ejemplos Prácticos</h2>
            <div class="codigo">
                <h3>Conexión PDO:</h3>
                <pre><code>
try {
    $dsn = "mysql:host=localhost;dbname=test;charset=utf8mb4";
    $pdo = new PDO($dsn, "usuario", "contraseña", [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
    echo "¡Conexión exitosa!";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
                </code></pre>
            </div>
        </section>

        <?php
        $fichas = [
            [
                'titulo' => 'Conexión PDO',
                'descripcion' => 'Ejemplos y ejercicios de conexión usando PDO',
                'enlace' => 'conexiones/pdo.php',
            ],
            [
                'titulo' => 'Conexión MySQLi',
                'descripcion' => 'Ejemplos y ejercicios de conexión usando MySQLi',
                'enlace' => 'conexiones/mysqli.php',
            ],
            [
                'titulo' => 'Configuración',
                'descripcion' => 'Mejores prácticas de configuración',
                'enlace' => 'conexiones/config.php',
            ],
        ];
        include __DIR__ . '/../componentes-reutilizables/galeria-fichas/galeria-fichas.php';
        ?>
    </main>
</body>
</html>