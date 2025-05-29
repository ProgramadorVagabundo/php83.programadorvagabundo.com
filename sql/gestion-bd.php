<!DOCTYPE html>
<html lang="es_MX">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../activos/favicon.jpg">
    <link rel="icon" href="../activos/favicon.webp">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de BD - Entrenamiento PHP</title>

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
        <h1>Gestión de Bases de Datos</h1>
        
        <section class="contenido">
            <h2>¿Qué aprenderemos?</h2>
            <ul>
                <li>Crear y modificar tablas</li>
                <li>Respaldos y restauración</li>
                <li>Migraciones de base de datos</li>
                <li>Mantenimiento y optimización</li>
                <li>Gestión de usuarios y permisos</li>
            </ul>

            <h2>Ejemplos Prácticos</h2>
            <div class="codigo">
                <h3>Crear tabla con relaciones:</h3>
                <pre><code>
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(200) NOT NULL,
    contenido TEXT,
    usuario_id INT,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);
                </code></pre>

                <h3>Respaldar base de datos:</h3>
                <pre><code>
// Usando PHP para ejecutar mysqldump
$comando = sprintf(
    'mysqldump -u %s -p%s %s > %s',
    escapeshellarg($usuario),
    escapeshellarg($password),
    escapeshellarg($base_datos),
    escapeshellarg("backup_" . date('Y-m-d') . ".sql")
);
exec($comando);

// Restaurar desde respaldo
$comando = sprintf(
    'mysql -u %s -p%s %s < %s',
    escapeshellarg($usuario),
    escapeshellarg($password),
    escapeshellarg($base_datos),
    escapeshellarg($archivo_respaldo)
);
                </code></pre>

                <h3>Mantenimiento:</h3>
                <pre><code>
// Optimizar tablas
OPTIMIZE TABLE usuarios, posts, comentarios;

// Analizar tablas
ANALYZE TABLE usuarios, posts;

// Reparar tabla
REPAIR TABLE usuarios;
                </code></pre>
            </div>
        </section>

        <?php
        $fichas = [
            [
                'titulo' => 'Diseño de BD',
                'descripcion' => 'Aprende a diseñar esquemas de bases de datos eficientes',
                'enlace' => 'gestion/diseno.php',
            ],
            [
                'titulo' => 'Respaldos',
                'descripcion' => 'Estrategias de respaldo y restauración',
                'enlace' => 'gestion/respaldos.php',
            ],
            [
                'titulo' => 'Mantenimiento',
                'descripcion' => 'Tareas de mantenimiento y optimización',
                'enlace' => 'gestion/mantenimiento.php',
            ]
        ];
        include __DIR__ . '/../componentes-reutilizables/galeria-fichas/galeria-fichas.php';
        ?>
    </main>
</body>
</html>