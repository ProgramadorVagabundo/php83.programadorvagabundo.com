<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Carta {
        public $nombre;
        public $costo_mana;
        public $imagen;
        public $tipo_carta;
        public $rareza;
        public $descripcion;
        public $poder;
        public function __construct($nombre, $costo_mana, $imagen, $tipo_carta, $rareza, $descripcion, $poder) {
            $this->nombre = $nombre;
            $this->costo_mana = $costo_mana;
            $this->imagen = $imagen;
            $this->tipo_carta = $tipo_carta;
            $this->rareza = $rareza;
            $this->descripcion = $descripcion;
            $this->poder = $poder;
        }
    }

    $mi_carta = new Carta(
        "Nissa, encarnación de los elementos",
        2,
        "http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=426906&type=card",
        "Planeswalker — Nissa",
        "Mítica",
        "+2: Adivina 2.\n0: Mira la primera carta de tu biblioteca. Si es una carta de tierra o de criatura con un coste de maná convertido menor o igual a la cantidad de contadores de lealtad sobre Nissa, encarnación de los elementos, puedes poner esa carta en el campo de batalla.\n−6: Endereza hasta dos tierras objetivo que controlas. Se convierten en criaturas Elementales 5/5 con las habilidades de volar y prisa hasta el final del turno. Siguen siendo tierras.",
        6
    );

    echo "Nombre: " . $mi_carta->nombre . "<br>";
    echo "Costo de mana: " . $mi_carta->costo_mana . "<br>";
    echo "Imagen: " . $mi_carta->imagen . "<br>";
    echo "Tipo de carta: " . $mi_carta->tipo_carta . "<br>";
    echo "Rareza: " . $mi_carta->rareza . "<br>";
    echo "Descripción: " . $mi_carta->descripcion . "<br>";
    echo "Poder: " . $mi_carta->poder . "<br>";
    ?>

    <html>
        <?php
            foreach ($mi_carta as $clave => $valor) {
                echo "$clave: $valor<br>";
              }        
        ?>
        <div class="carta">
            <div class="nombre"></div>
            <div class="costo-mana"></div>
            <div class="imagen">
                <img src="<?php echo $mi_carta->imagen ?>">
            </div>
            <div class="tipo-carta"></div>
            <div class="raresa-carta"></div>
            <div class="descripcion"><?php echo $mi_carta->descripcion ?></div>
            <div class="daño-resistencia"></div>
        </div>
    </html>
</body>
</html>