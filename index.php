<?php
function generarContenedorSemiRedondo($texto, $ancho, $alto, $color, $colorTexto) {
    // Inicia la salida del buffer para que podamos capturar el HTML generado.
    ob_start();
    ?>
    <div style="
        background-color: <?php echo $color; ?>;
        border-radius: 50% 50% 0 0;
        width: <?php echo $ancho; ?>px;
        height: <?php echo $alto; ?>px;
        text-align: center;
        line-height: <?php echo $alto; ?>px;
        font-family: sans-serif;
        font-size: 20px;
        color: <?php echo $colorTexto; ?>;
    ">
        <?php echo $texto; ?>
    </div>
    <?php
    // Obtiene el contenido del buffer y lo limpia.
    $html = ob_get_clean();
    return $html;
}

// Ejemplo de uso:
$nombre = "@Astrozdev";
$anchoContenedor = 200;
$altoContenedor = 100;
$colorFondo = "#f0f0f0";  // Gris claro
$colorTextoContenedor = "#000000"; // Negro

$contenedor = generarContenedorSemiRedondo($nombre, $anchoContenedor, $altoContenedor, $colorFondo, $colorTextoContenedor);
echo $contenedor;
?>
