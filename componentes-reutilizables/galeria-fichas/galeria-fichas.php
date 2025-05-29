<?php
// Componente galeria-fichas.php
// Uso: include 'componentes-estaticos/galerias-fichas/galeria-fichas.php';
// Espera una variable $fichas: array de ['titulo', 'descripcion', 'enlace']
?>
<section class="galeria-fichas">
    <ul>
        <?php foreach ($fichas as $ficha): ?>
        <li>
            <a href="<?= htmlspecialchars($ficha['enlace']) ?>">
                <div class="ficha">
                    <div class="titulo">
                        <?= htmlspecialchars($ficha['titulo']) ?>
                    </div>
                    <div class="descripcion">
                        <?= htmlspecialchars($ficha['descripcion']) ?>
                    </div>
                </div>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>
</section>
