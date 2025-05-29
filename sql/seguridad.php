<!DOCTYPE html>
<html lang="es_MX">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../activos/favicon.jpg">
    <link rel="icon" href="../activos/favicon.webp">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seguridad SQL - Entrenamiento PHP</title>

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
        <h1>Seguridad y Prevención SQL</h1>
        
        <section class="contenido">
            <h2>¿Qué aprenderemos?</h2>
            <ul>
                <li>SQL Injection y cómo prevenirlo</li>
                <li>Prepared Statements</li>
                <li>Escapado de datos</li>
                <li>Validación de entrada</li>
                <li>Manejo seguro de errores</li>
            </ul>

            <h2>Ejemplos Prácticos</h2>
            <div class="codigo">
                <h3>Mal ejemplo (vulnerable):</h3>
                <pre><code>
// NO HAGAS ESTO - Vulnerable a SQL Injection
$usuario = $_POST['usuario'];
$query = "SELECT * FROM usuarios WHERE nombre = '$usuario'";
$resultado = $conexion->query($query);  // ¡PELIGROSO!
                </code></pre>

                <h3>Forma segura (PDO):</h3>
                <pre><code>
// Uso correcto con PDO y prepared statements
try {
    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE nombre = ?");
    $stmt->execute([$_POST['usuario']]);
    $usuario = $stmt->fetch();
} catch (PDOException $e) {
    // Log del error de forma segura
    error_log("Error en consulta: " . $e->getMessage());
    // Mensaje genérico al usuario
    echo "Ha ocurrido un error en el sistema";
}
                </code></pre>

                <h3>Validación de entrada:</h3>
                <pre><code>
// Validación y sanitización
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if ($id === false || $id === null) {
    throw new InvalidArgumentException('ID inválido');
}

$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
if (!$email) {
    throw new InvalidArgumentException('Email inválido');
}
                </code></pre>
            </div>
        </section>

        <?php
        $fichas = [
            [
                'titulo' => 'SQL Injection',
                'descripcion' => 'Aprende sobre los diferentes tipos de ataques y cómo prevenirlos',
                'enlace' => 'seguridad/sql-injection.php',
            ],
            [
                'titulo' => 'Validación de Datos',
                'descripcion' => 'Técnicas y mejores prácticas para validar entrada de usuario',
                'enlace' => 'seguridad/validacion.php',
            ],
            [
                'titulo' => 'Manejo de Errores',
                'descripcion' => 'Gestión segura de errores y logging',
                'enlace' => 'seguridad/errores.php',
            ]
        ];
        include __DIR__ . '/../componentes-reutilizables/galeria-fichas/galeria-fichas.php';
        ?>
    </main>
</body>
</html>