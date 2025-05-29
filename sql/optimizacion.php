<!DOCTYPE html>
<html lang="es_MX">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../activos/favicon.jpg">
    <link rel="icon" href="../activos/favicon.webp">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Optimización SQL - Entrenamiento PHP</title>

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
        <h1>Optimización y Rendimiento SQL</h1>
        
        <section class="contenido">
            <h2>¿Qué aprenderemos?</h2>
            <ul>
                <li>Índices y su uso efectivo</li>
                <li>Análisis EXPLAIN</li>
                <li>Caché de consultas</li>
                <li>Transacciones eficientes</li>
                <li>Optimización de consultas</li>
            </ul>

            <h2>Ejemplos Prácticos</h2>
            <div class="codigo">
                <h3>Creación de índices:</h3>
                <pre><code>
// Crear índice simple
CREATE INDEX idx_usuarios_email ON usuarios(email);

// Índice compuesto
CREATE INDEX idx_usuarios_ciudad_edad ON usuarios(ciudad, edad);

// Analizar uso de índices
EXPLAIN SELECT * FROM usuarios 
WHERE ciudad = 'Madrid' 
  AND edad > 25 
ORDER BY email;
                </code></pre>

                <h3>Optimización de consultas:</h3>
                <pre><code>
// Mal ejemplo (consulta lenta)
SELECT u.* 
FROM usuarios u 
WHERE EXISTS (
    SELECT 1 FROM pedidos p 
    WHERE p.usuario_id = u.id
    AND p.fecha > '2024-01-01'
);

// Versión optimizada
SELECT DISTINCT u.* 
FROM usuarios u 
INNER JOIN pedidos p ON u.id = p.usuario_id 
WHERE p.fecha > '2024-01-01';
                </code></pre>

                <h3>Transacciones:</h3>
                <pre><code>
try {
    $pdo->beginTransaction();
    
    // Operaciones en lote
    for ($i = 0; $i < 1000; $i++) {
        $stmt->execute([$datos[$i]]);
    }
    
    $pdo->commit();
} catch (Exception $e) {
    $pdo->rollBack();
    throw $e;
}
                </code></pre>
            </div>
        </section>

        <?php
        $fichas = [
            [
                'titulo' => 'Índices',
                'descripcion' => 'Aprende a crear y usar índices efectivamente',
                'enlace' => 'optimizacion/indices.php',
            ],
            [
                'titulo' => 'Análisis de Consultas',
                'descripcion' => 'Uso de EXPLAIN y herramientas de análisis',
                'enlace' => 'optimizacion/analisis.php',
            ],
            [
                'titulo' => 'Caché y Transacciones',
                'descripcion' => 'Implementación de caché y transacciones eficientes',
                'enlace' => 'optimizacion/cache.php',
            ]
        ];
        include __DIR__ . '/../componentes-reutilizables/galeria-fichas/galeria-fichas.php';
        ?>
    </main>
</body>
</html>