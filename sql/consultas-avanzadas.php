<!DOCTYPE html>
<html lang="es_MX">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../activos/favicon.jpg">
    <link rel="icon" href="../activos/favicon.webp">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas Avanzadas SQL - Entrenamiento PHP</title>

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
        <h1>Consultas Avanzadas SQL</h1>
        
        <section class="contenido">
            <h2>¿Qué aprenderemos?</h2>
            <ul>
                <li>JOIN (INNER, LEFT, RIGHT)</li>
                <li>Subconsultas</li>
                <li>Funciones agregadas (COUNT, SUM, AVG)</li>
                <li>GROUP BY y HAVING</li>
                <li>UNION y UNION ALL</li>
            </ul>

            <h2>Ejemplos Prácticos</h2>
            <div class="codigo">
                <h3>JOIN:</h3>
                <pre><code>
// INNER JOIN
$query = "SELECT u.nombre, p.titulo
          FROM usuarios u
          INNER JOIN posts p ON u.id = p.usuario_id
          WHERE p.fecha > ?";
$stmt = $pdo->prepare($query);
$stmt->execute(['2024-01-01']);

// LEFT JOIN con subconsulta
$query = "SELECT 
            d.nombre_departamento,
            (SELECT COUNT(*) FROM empleados e 
             WHERE e.depto_id = d.id) as num_empleados
          FROM departamentos d
          LEFT JOIN empleados e ON d.id = e.depto_id
          GROUP BY d.id
          HAVING num_empleados > 5";
                </code></pre>

                <h3>Funciones Agregadas:</h3>
                <pre><code>
// Estadísticas de ventas por categoría
$query = "SELECT 
            c.nombre_categoria,
            COUNT(v.id) as total_ventas,
            SUM(v.monto) as monto_total,
            AVG(v.monto) as promedio_venta
          FROM categorias c
          LEFT JOIN productos p ON c.id = p.categoria_id
          LEFT JOIN ventas v ON p.id = v.producto_id
          GROUP BY c.id
          HAVING monto_total > 1000
          ORDER BY monto_total DESC";
                </code></pre>
            </div>
        </section>

        <?php
        $fichas = [
            [
                'titulo' => 'JOIN Avanzado',
                'descripcion' => 'Técnicas avanzadas de JOIN y casos de uso reales',
                'enlace' => 'consultas/join.php',
            ],
            [
                'titulo' => 'Subconsultas',
                'descripcion' => 'Optimización y uso efectivo de subconsultas',
                'enlace' => 'consultas/subconsultas.php',
            ],
            [
                'titulo' => 'Análisis de Datos',
                'descripcion' => 'Funciones agregadas y análisis estadístico',
                'enlace' => 'consultas/agregacion.php',
            ]
        ];
        include __DIR__ . '/../componentes-reutilizables/galeria-fichas/galeria-fichas.php';
        ?>
    </main>
</body>
</html>