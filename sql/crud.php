<!DOCTYPE html>
<html lang="es_MX">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../activos/favicon.jpg">
    <link rel="icon" href="../activos/favicon.webp">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD SQL - Entrenamiento PHP</title>

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
        <h1>Consultas Básicas (CRUD)</h1>
        
        <section class="contenido">
            <h2>¿Qué aprenderemos?</h2>
            <ul>
                <li>SELECT - Consultar datos</li>
                <li>INSERT - Insertar registros</li>
                <li>UPDATE - Actualizar registros</li>
                <li>DELETE - Eliminar registros</li>
                <li>WHERE, ORDER BY, LIMIT</li>
            </ul>

            <h2>Ejemplos Prácticos</h2>
            <div class="codigo">
                <h3>SELECT básico:</h3>
                <pre><code>
// Consulta simple
$query = "SELECT id, nombre, email FROM usuarios WHERE activo = 1";
$stmt = $pdo->query($query);
$usuarios = $stmt->fetchAll();

// Consulta con parámetros
$stmt = $pdo->prepare("SELECT * FROM usuarios WHERE edad > ? AND ciudad = ?");
$stmt->execute([18, 'Madrid']);
$usuarios = $stmt->fetchAll();
                </code></pre>

                <h3>INSERT básico:</h3>
                <pre><code>
// Insertar un registro
$stmt = $pdo->prepare("INSERT INTO usuarios (nombre, email, edad) VALUES (?, ?, ?)");
$stmt->execute(['Juan', 'juan@email.com', 25]);

// Insertar múltiples registros
$datos = [
    ['Ana', 'ana@email.com', 30],
    ['Pedro', 'pedro@email.com', 28]
];
$stmt = $pdo->prepare("INSERT INTO usuarios (nombre, email, edad) VALUES (?, ?, ?)");
foreach ($datos as $usuario) {
    $stmt->execute($usuario);
}
                </code></pre>
            </div>
        </section>

        <?php
        $fichas = [
            [
                'titulo' => 'SELECT Avanzado',
                'descripcion' => 'Aprende a realizar consultas complejas con JOIN, GROUP BY y más',
                'enlace' => 'crud/select.php',
            ],
            [
                'titulo' => 'INSERT Masivo',
                'descripcion' => 'Técnicas para insertar grandes cantidades de datos eficientemente',
                'enlace' => 'crud/insert.php',
            ],
            [
                'titulo' => 'UPDATE y DELETE',
                'descripcion' => 'Actualización y eliminación segura de registros',
                'enlace' => 'crud/update-delete.php',
            ]
        ];
        include __DIR__ . '/../componentes-reutilizables/galeria-fichas/galeria-fichas.php';
        ?>
    </main>
</body>
</html>