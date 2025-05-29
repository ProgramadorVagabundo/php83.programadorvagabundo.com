<!DOCTYPE html>
<html lang="es_MX">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../../activos/favicon.jpg">
    <link rel="icon" href="../../activos/favicon.webp">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexión PDO - Ejemplo</title>
    <!-- Fuentes Google-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&family=Bebas+Neue&family=Great+Vibes&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../../css/global.css" />
    <link rel="stylesheet" href="../../componentes-estaticos/galerias-fichas/galeria-fichas.css">
</head>
<body>
    <?php include_once __DIR__ . '/../../componentes-estaticos/globales/cabecera.html'; ?>
    <main>
        <h1>Conexión a MySQL con PDO</h1>
        <p>PDO (PHP Data Objects) es una interfaz para acceder a bases de datos en PHP de forma segura y flexible.</p>
        <h2>Ejemplo básico:</h2>
        <div class="codigo">
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
        <a href="../conexiones.php">&larr; Volver</a>
    </main>
</body>
</html>
