<!DOCTYPE html>
<html lang="es_MX">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../../activos/favicon.jpg">
    <link rel="icon" href="../../activos/favicon.webp">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexión MySQLi - Ejemplos Detallados</title>
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
        <h1>Conexión a MySQL con MySQLi: Ejemplos Detallados</h1>
        <p>MySQLi es una extensión mejorada para interactuar con bases de datos MySQL en PHP. Aprenderemos a usarla con ejemplos prácticos.</p>

        <section class="ejemplos">
            <style>
                .ejemplos {
                    margin: 2rem 0;
                }
                .ejemplo-contenedor {
                    background: #f8f9fa;
                    padding: 1.5rem;
                    border-radius: 8px;
                    margin: 1rem 0;
                    display: flex;
                    flex-direction: column;
                    gap: 1.5rem;
                }
                .ejemplo-teoria {
                    background: white;
                    padding: 1.5rem;
                    border-radius: 4px;
                    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
                    width: 100%;
                }
                .ejemplo-practicas {
                    display: grid;
                    grid-template-columns: repeat(3, 1fr);
                    gap: 1.5rem;
                    width: 100%;
                }
                .ejemplo-practica {
                    background: white;
                    padding: 1.5rem;
                    border-radius: 4px;
                    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
                    min-width: 0; /* Evita desbordamiento */
                }
                .ejemplo-teoria h3,
                .ejemplo-practica h3 {
                    margin-top: 0;
                    color: #333;
                    font-size: 1.1rem;
                    margin-bottom: 1rem;
                }
                pre {
                    background: #282c34;
                    color: #abb2bf;
                    padding: 1rem;
                    border-radius: 4px;
                    overflow-x: auto;
                    margin: 0.5rem 0;
                    font-size: 0.9rem;
                    max-width: 100%; /* Evita desbordamiento */
                }
                code {
                    white-space: pre-wrap; /* Permite que el código se envuelva */
                    word-break: break-word; /* Rompe palabras largas */
                }
                .resultado {
                    margin-top: 1rem;
                    padding: 1rem;
                    background: #f8f9fa;
                    border-radius: 4px;
                }
                .resultado h4 {
                    font-size: 1rem;
                    margin: 0 0 0.5rem 0;
                }
                @media (max-width: 1200px) {
                    .ejemplo-practicas {
                        grid-template-columns: repeat(2, 1fr);
                    }
                }
                @media (max-width: 768px) {
                    .ejemplo-practicas {
                        grid-template-columns: 1fr;
                    }
                    .ejemplo-teoria,
                    .ejemplo-practica {
                        padding: 1rem;
                    }
                }
            </style>

            <h2>1. Conexión Básica con MySQLi</h2>
            <div class="ejemplo-contenedor">
                <div class="ejemplo-teoria">
                    <h3>Código de Ejemplo</h3>
                    <p>Primero, veamos cómo establecer una conexión básica usando MySQLi:</p>
                    <pre><code>
$servidor = "localhost";
$usuario = "tu_usuario";
$password = "tu_password";
$basedatos = "nombre_db";

// Crear conexión
$conexion = new mysqli($servidor, $usuario, $password, $basedatos);

// Verificar conexión
if ($conexion->connect_error) {
    // Registrar el error en un log
    error_log("Error de conexión a la base de datos: " . $conexion->connect_error);
    // Mostrar un mensaje genérico al usuario
    throw new Exception("Lo sentimos, ha ocurrido un error al conectar con la base de datos");
}
echo "¡Conexión exitosa!";

// Cerrar conexión
$conexion->close();
                    </code></pre>
                </div>
                <div class="ejemplo-practicas">
                    <div class="ejemplo-practica">
                        <h3>Implementación 1: Conexión Local</h3>
                        <p>Conexión a base de datos local:</p>
                        <pre><code>
// Variables de conexión
$servidor = "localhost";
$usuario = "practicas_sql";
$password = "Mustang6395++))";
$basedatos = "practicas_sql";

// Crear conexión
$conexion = new mysqli($servidor, $usuario, $password, $basedatos);

// Verificar conexión
if ($conexion->connect_error) {
    error_log("Error de conexión: " . $conexion->connect_error);
    echo "<p class='text-danger'>Error al conectar</p>";
}
echo "<p class='text-success'>¡Conexión exitosa!</p>";

$conexion->close();                            
                        </code></pre>
                        <div class="resultado">
                            <h4>Resultado:</h4>
                            <?php 
                                // Variables de conexión
                                $servidor = "localhost";
                                $usuario = "practicas_sql";
                                $password = "Mustang6395++))";
                                $basedatos = "practicas_sql";

                                // Crear conexión
                                $conexion = new mysqli($servidor, $usuario, $password, $basedatos);

                                // Verificar conexión
                                if ($conexion->connect_error) {
                                    error_log("Error de conexión: " . $conexion->connect_error);
                                    echo "<p class='text-danger'>Error al conectar</p>";
                                }
                                echo "<p class='text-success'>¡Conexión exitosa!</p>";

                                $conexion->close();                            
                            ?>
                        </div>
                    </div>

                    <div class="ejemplo-practica">
                        <h3>Implementación 2: Manejo de Errores</h3>
                        <p>Conexión con manejo detallado de errores:</p>
                        <pre><code>
try {
    $conexion = new mysqli(
        "localhost",
        "usuario_invalido",
        "password_invalido",
        "bd_invalida"
    );
    
    if ($conexion->connect_error) {
        throw new Exception(
            "Error de conexión: " . 
            $conexion->connect_error
        );
    }
    echo "Conexión exitosa";
    $conexion->close();
    
} catch (Exception $e) {
    error_log($e->getMessage());
    echo "Error al conectar";
}</code></pre>
                        <div class="resultado">
                            <h4>Resultado:</h4>
                            <?php 
                            try {
                                $conexion = new mysqli("localhost", "usuario_invalido", "password_invalido", "bd_invalida");
                                if ($conexion->connect_error) {
                                    throw new Exception("Error de conexión: " . $conexion->connect_error);
                                }
                                echo "<p class='text-success'>Conexión exitosa</p>";
                                $conexion->close();
                            } catch (Exception $e) {
                                echo "<p class='text-danger'>Error al conectar</p>";
                            }
                            ?>
                        </div>
                    </div>

                    <div class="ejemplo-practica">
                        <h3>Implementación 3: Conexión con Opciones</h3>
                        <p>Conexión con configuración adicional:</p>
                        <pre><code>
$servidor = "localhost";
$usuario = "practicas_sql";
$password = "Mustang6395++))";
$basedatos = "practicas_sql";

// Configurar opciones
mysqli_report(MYSQLI_REPORT_ERROR | 
             MYSQLI_REPORT_STRICT);

try {
    $conexion = new mysqli(
        $servidor, 
        $usuario, 
        $password, 
        $basedatos
    );
    
    // Configurar charset
    $conexion->set_charset("utf8mb4");
    
    echo "Conexión y charset configurados";
    $conexion->close();
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}</code></pre>
                        <div class="resultado">
                            <h4>Resultado:</h4>
                            <?php 
                            try {
                                mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                                $conexion = new mysqli($servidor, $usuario, $password, $basedatos);
                                $conexion->set_charset("utf8mb4");
                                echo "<p class='text-success'>Conexión y charset configurados</p>";
                                $conexion->close();
                            } catch (Exception $e) {
                                echo "<p class='text-danger'>Error: " . $e->getMessage() . "</p>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <h2>2. Insertar Datos en una Tabla</h2>
            <div class="ejemplo-contenedor">
                <div class="ejemplo-teoria">
                    <h3>Código de Ejemplo</h3>
                    <p>Ejemplo de cómo insertar registros en una tabla:</p>
                    <pre><code>
// Asumiendo que ya tenemos la conexión establecida
$sql = "INSERT INTO usuarios (nombre, email, edad) VALUES (?, ?, ?)";

// Preparar la declaración
$stmt = $conexion->prepare($sql);

// Vincular parámetros
$nombre = "Juan Pérez";
$email = "juan@ejemplo.com";
$edad = 25;

$stmt->bind_param("ssi", $nombre, $email, $edad);
// 's' para strings, 'i' para integers

// Ejecutar la consulta
if ($stmt->execute()) {
    echo "Registro insertado correctamente";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
                    </code></pre>
                </div>
                <div class="ejemplo-practicas">
                    <div class="ejemplo-practica">
                        <h3>Implementación 1: Inserción Simple</h3>
                        <p>Insertar un solo registro en la tabla:</p>
                        <pre><code>
try {
    $conexion = new mysqli(
        "localhost", 
        "practicas_sql",
        "Mustang6395++))",
        "practicas_sql"
    );

    $sql = "INSERT INTO usuarios 
            (nombre, email, edad) 
            VALUES (?, ?, ?)";
    
    $stmt = $conexion->prepare($sql);
    
    $nombre = "Ana García";
    $email = "ana@ejemplo.com";
    $edad = 28;
    
    $stmt->bind_param(
        "ssi", 
        $nombre, 
        $email, 
        $edad
    );
    
    if ($stmt->execute()) {
        echo "Usuario agregado con ID: " . 
             $conexion->insert_id;
    }
    
    $stmt->close();
    $conexion->close();
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}</code></pre>
                        <div class="resultado">
                            <h4>Resultado:</h4>
                            <?php 
                            try {
                                $conexion = new mysqli("localhost", "practicas_sql", "Mustang6395++))", "practicas_sql");
                                
                                $sql = "INSERT INTO usuarios (nombre, email, edad) VALUES (?, ?, ?)";
                                $stmt = $conexion->prepare($sql);
                                
                                $nombre = "Ana García";
                                $email = "ana@ejemplo.com";
                                $edad = 28;
                                
                                $stmt->bind_param("ssi", $nombre, $email, $edad);
                                
                                if ($stmt->execute()) {
                                    echo "<p class='text-success'>Usuario agregado con ID: " . $conexion->insert_id . "</p>";
                                }
                                
                                $stmt->close();
                                $conexion->close();
                            } catch (Exception $e) {
                                echo "<p class='text-danger'>Error: " . $e->getMessage() . "</p>";
                            }
                            ?>
                        </div>
                    </div>

                    <div class="ejemplo-practica">
                        <h3>Implementación 2: Inserción Múltiple</h3>
                        <p>Insertar varios registros en una sola operación:</p>
                        <pre><code>
try {
    $conexion = new mysqli(
        "localhost", 
        "practicas_sql",
        "Mustang6395++))",
        "practicas_sql"
    );

    $sql = "INSERT INTO usuarios 
            (nombre, email, edad) 
            VALUES (?, ?, ?)";
    
    $stmt = $conexion->prepare($sql);
    
    // Array de usuarios
    $usuarios = [
        ["Carlos Ruiz", 
         "carlos@mail.com", 
         32],
        ["María López", 
         "maria@mail.com", 
         27],
        ["Pedro Sánchez", 
         "pedro@mail.com", 
         45]
    ];
    
    $insertados = 0;
    foreach ($usuarios as $usuario) {
        $stmt->bind_param(
            "ssi", 
            $usuario[0], 
            $usuario[1], 
            $usuario[2]
        );
        if ($stmt->execute()) {
            $insertados++;
        }
    }
    
    echo "$insertados usuarios agregados";
    
    $stmt->close();
    $conexion->close();
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}</code></pre>
                        <div class="resultado">
                            <h4>Resultado:</h4>
                            <?php 
                            try {
                                $conexion = new mysqli("localhost", "practicas_sql", "Mustang6395++))", "practicas_sql");
                                
                                $sql = "INSERT INTO usuarios (nombre, email, edad) VALUES (?, ?, ?)";
                                $stmt = $conexion->prepare($sql);
                                
                                $usuarios = [
                                    ["Carlos Ruiz", "carlos@mail.com", 32],
                                    ["María López", "maria@mail.com", 27],
                                    ["Pedro Sánchez", "pedro@mail.com", 45]
                                ];
                                
                                $insertados = 0;
                                foreach ($usuarios as $usuario) {
                                    $stmt->bind_param("ssi", $usuario[0], $usuario[1], $usuario[2]);
                                    if ($stmt->execute()) {
                                        $insertados++;
                                    }
                                }
                                
                                echo "<p class='text-success'>$insertados usuarios agregados</p>";
                                
                                $stmt->close();
                                $conexion->close();
                            } catch (Exception $e) {
                                echo "<p class='text-danger'>Error: " . $e->getMessage() . "</p>";
                            }
                            ?>
                        </div>
                    </div>

                    <div class="ejemplo-practica">
                        <h3>Implementación 3: Validación de Datos</h3>
                        <p>Inserción con validación de datos:</p>
                        <pre><code>
try {
    $conexion = new mysqli(
        "localhost", 
        "practicas_sql",
        "Mustang6395++))",
        "practicas_sql"
    );

    // Datos a validar
    $nombre = "   Juan  Silva  ";
    $email = "juan@ejemplo.com";
    $edad = "25abc"; // Dato inválido
    
    // Validación y limpieza
    $nombre = trim($nombre);
    if (strlen($nombre) < 3) {
        throw new Exception(
            "Nombre muy corto"
        );
    }
    
    if (!filter_var($email, 
        FILTER_VALIDATE_EMAIL)) {
        throw new Exception(
            "Email inválido"
        );
    }
    
    $edad = filter_var($edad, 
        FILTER_SANITIZE_NUMBER_INT);
    if (!is_numeric($edad) || 
        $edad < 18 || 
        $edad > 100) {
        throw new Exception(
            "Edad inválida"
        );
    }
    
    $sql = "INSERT INTO usuarios 
            (nombre, email, edad) 
            VALUES (?, ?, ?)";
    
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param(
        "ssi", 
        $nombre, 
        $email, 
        $edad
    );
    
    if ($stmt->execute()) {
        echo "Usuario validado y guardado";
    }
    
    $stmt->close();
    $conexion->close();
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}</code></pre>
                        <div class="resultado">
                            <h4>Resultado:</h4>
                            <?php 
                            try {
                                $conexion = new mysqli("localhost", "practicas_sql", "Mustang6395++))", "practicas_sql");
                                
                                // Datos a validar
                                $nombre = "   Juan  Silva  ";
                                $email = "juan@ejemplo.com";
                                $edad = "25abc"; // Dato inválido
                                
                                // Validación y limpieza
                                $nombre = trim($nombre);
                                if (strlen($nombre) < 3) {
                                    throw new Exception("Nombre muy corto");
                                }
                                
                                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                    throw new Exception("Email inválido");
                                }
                                
                                $edad = filter_var($edad, FILTER_SANITIZE_NUMBER_INT);
                                if (!is_numeric($edad) || $edad < 18 || $edad > 100) {
                                    throw new Exception("Edad inválida");
                                }
                                
                                $sql = "INSERT INTO usuarios (nombre, email, edad) VALUES (?, ?, ?)";
                                $stmt = $conexion->prepare($sql);
                                $stmt->bind_param("ssi", $nombre, $email, $edad);
                                
                                if ($stmt->execute()) {
                                    echo "<p class='text-success'>Usuario validado y guardado</p>";
                                }
                                
                                $stmt->close();
                                $conexion->close();
                            } catch (Exception $e) {
                                echo "<p class='text-danger'>Error: " . $e->getMessage() . "</p>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <h2>3. Consultar y Mostrar Datos</h2>
            <div class="ejemplo-contenedor">
                <div class="ejemplo-teoria">
                    <h3>Código de Ejemplo</h3>
                    <p>Ejemplo de cómo realizar una consulta y mostrar los resultados:</p>
                    <pre><code>
// Realizar la consulta
$sql = "SELECT id, nombre, email FROM usuarios";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    echo "&lt;table class='table'&gt;";
    echo "&lt;thead&gt;&lt;tr&gt;&lt;th&gt;ID&lt;/th&gt;&lt;th&gt;Nombre&lt;/th&gt;&lt;th&gt;Email&lt;/th&gt;&lt;/tr&gt;&lt;/thead&gt;";
    echo "&lt;tbody&gt;";
    
    // Obtener cada fila
    while($fila = $resultado->fetch_assoc()) {
        echo "&lt;tr&gt;";
        echo "&lt;td&gt;" . $fila["id"] . "&lt;/td&gt;";
        echo "&lt;td&gt;" . $fila["nombre"] . "&lt;/td&gt;";
        echo "&lt;td&gt;" . $fila["email"] . "&lt;/td&gt;";
        echo "&lt;/tr&gt;";
    }
    
    echo "&lt;/tbody&gt;&lt;/table&gt;";
} else {
    echo "No se encontraron resultados";
}
                    </code></pre>
                </div>
                <div class="ejemplo-practica">
                    <h3>Tu Implementación</h3>
                    <p>Aquí puedes escribir y probar tu código de consulta:</p>
                    <pre><code>
// Tu código aquí
                    </code></pre>
                    <div class="resultado">
                        <h4>Resultado:</h4>
                        <!-- Aquí se mostrará el resultado de tu código -->
                    </div>
                </div>
            </div>

            <h2>4. Actualizar Registros</h2>
            <div class="ejemplo-contenedor">
                <div class="ejemplo-teoria">
                    <h3>Código de Ejemplo</h3>
                    <p>Ejemplo de cómo actualizar datos de manera segura:</p>
                    <pre><code>
// Preparar la actualización con consulta preparada
$sql = "UPDATE usuarios SET email = ?, edad = ? WHERE id = ?";
$stmt = $conexion->prepare($sql);

// Definir los nuevos valores
$nuevo_email = "nuevo@email.com";
$nueva_edad = 30;
$id_usuario = 1;

// Vincular parámetros (s = string, i = integer)
$stmt->bind_param("sii", $nuevo_email, $nueva_edad, $id_usuario);

// Ejecutar y verificar
if ($stmt->execute()) {
    if ($stmt->affected_rows > 0) {
        echo "Registro actualizado exitosamente";
    } else {
        echo "No se encontró el registro a actualizar";
    }
} else {
    echo "Error en la actualización: " . $stmt->error;
}
$stmt->close();
                    </code></pre>
                </div>
                <div class="ejemplo-practica">
                    <h3>Tu Implementación</h3>
                    <p>Aquí puedes escribir y probar tu código de actualización:</p>
                    <pre><code>
// Tu código aquí
                    </code></pre>
                    <div class="resultado">
                        <h4>Resultado:</h4>
                        <!-- Aquí se mostrará el resultado de tu código -->
                    </div>
                </div>
            </div>

            <h2>5. Manejo de Transacciones</h2>
            <div class="ejemplo-contenedor">
                <div class="ejemplo-teoria">
                    <h3>Código de Ejemplo</h3>
                    <p>Las transacciones son importantes cuando necesitas realizar múltiples operaciones que deben completarse todas o ninguna:</p>
                    <pre><code>
// Iniciar transacción
$conexion->begin_transaction();

try {
    // Primera operación
    $sql1 = "INSERT INTO productos (nombre, precio) VALUES (?, ?)";
    $stmt1 = $conexion->prepare($sql1);
    $nombre_producto = "Nuevo Producto";
    $precio = 199.99;
    $stmt1->bind_param("sd", $nombre_producto, $precio);
    $stmt1->execute();

    // Segunda operación
    $sql2 = "UPDATE inventario SET stock = stock - 1 WHERE producto_id = ?";
    $stmt2 = $conexion->prepare($sql2);
    $producto_id = $conexion->insert_id; // ID del producto recién insertado
    $stmt2->bind_param("i", $producto_id);
    $stmt2->execute();

    // Si todo sale bien, confirmar los cambios
    $conexion->commit();
    echo "Transacción completada con éxito";

} catch (Exception $e) {
    // Si algo sale mal, deshacer todos los cambios
    $conexion->rollback();
    echo "Error en la transacción: " . $e->getMessage();
}
                    </code></pre>
                </div>
                <div class="ejemplo-practica">
                    <h3>Tu Implementación</h3>
                    <p>Aquí puedes escribir y probar tu código de transacciones:</p>
                    <pre><code>
// Tu código aquí
                    </code></pre>
                    <div class="resultado">
                        <h4>Resultado:</h4>
                        <!-- Aquí se mostrará el resultado de tu código -->
                    </div>
                </div>
            </div>

            <h2>6. Búsqueda Avanzada con LIKE</h2>
            <div class="ejemplo-contenedor">
                <div class="ejemplo-teoria">
                    <h3>Código de Ejemplo</h3>
                    <p>Ejemplo de búsqueda flexible usando el operador LIKE:</p>
                    <pre><code>
// Función de búsqueda con sanitización
function buscarUsuarios($conexion, $termino) {
    $termino = "%{$termino}%"; // Agregar comodines para búsqueda parcial
    
    $sql = "SELECT * FROM usuarios WHERE 
            nombre LIKE ? OR 
            email LIKE ? OR 
            ciudad LIKE ?";
            
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("sss", $termino, $termino, $termino);
    $stmt->execute();
    
    $resultado = $stmt->get_result();
    $usuarios = [];
    
    while ($fila = $resultado->fetch_assoc()) {
        $usuarios[] = $fila;
    }
    
    return $usuarios;
}

// Ejemplo de uso:
$resultados = buscarUsuarios($conexion, "juan");
foreach ($resultados as $usuario) {
    echo "Nombre: {$usuario['nombre']}, Email: {$usuario['email']}&lt;br&gt;";
}
                    </code></pre>
                </div>
                <div class="ejemplo-practica">
                    <h3>Tu Implementación</h3>
                    <p>Aquí puedes escribir y probar tu código de búsqueda:</p>
                    <pre><code>
// Tu código aquí
                    </code></pre>
                    <div class="resultado">
                        <h4>Resultado:</h4>
                        <!-- Aquí se mostrará el resultado de tu código -->
                    </div>
                </div>
            </div>

            <h2>Consejos Avanzados</h2>
            <ul class="lista-notas">
                <li><strong>Conexión Persistente:</strong> Usa mysqli_connect_p() para conexiones persistentes en aplicaciones de alto tráfico.</li>
                <li><strong>Optimización:</strong> Utiliza índices en tus tablas para búsquedas más rápidas.</li>
                <li><strong>Seguridad:</strong> Nunca almacenes contraseñas en texto plano, usa password_hash().</li>
                <li><strong>Manejo de Errores:</strong> Implementa un sistema de logging para registrar errores de base de datos.</li>
                <li><strong>Caché:</strong> Considera usar caché para consultas frecuentes y pesadas.</li>
            </ul>

            <div class="alerta-importante">
                <h3>⚠️ Prácticas de Seguridad Importantes</h3>
                <ul>
                    <li>Nunca confíes en datos ingresados por el usuario</li>
                    <li>Siempre usa consultas preparadas para prevenir SQL injection</li>
                    <li>Establece timeouts adecuados para las conexiones</li>
                    <li>Limita los privilegios de la cuenta de base de datos</li>
                </ul>
            </div>

            <style>
                .alerta-importante {
                    background-color: #fff3cd;
                    border-left: 5px solid #ffc107;
                    padding: 1rem;
                    margin: 1rem 0;
                    border-radius: 4px;
                }
                .alerta-importante h3 {
                    color: #856404;
                    margin-top: 0;
                }
                .alerta-importante ul {
                    margin-bottom: 0;
                }
            </style>

            <h2>Notas Importantes</h2>
            <ul class="lista-notas">
                <li>Siempre usa consultas preparadas para prevenir inyecciones SQL</li>
                <li>Maneja adecuadamente los errores para mejor depuración</li>
                <li>Cierra las conexiones y statements cuando hayas terminado</li>
                <li>Utiliza try-catch para un mejor manejo de excepciones</li>
            </ul>
        </section>

        <a href="../conexiones.php">&larr; Volver</a>
    </main>
</body>
</html>
