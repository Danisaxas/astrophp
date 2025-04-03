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
        font-size: 24px;  /* Aumenté el tamaño de la fuente para el ejemplo */
        color: <?php echo $colorTexto; ?>;
        margin: 0 auto; /* Centrado horizontal */
        display: block; /* Necesario para que margin: auto funcione */
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
$anchoContenedor = 300; /* Aumenté el ancho para el ejemplo */
$altoContenedor = 150; /* Aumenté el alto para el ejemplo */
$colorFondo = "#e0e0e0";  // Un gris más claro
$colorTextoContenedor = "#333"; // Un gris más oscuro
echo "<div style='display: flex; justify-content: center; align-items: center; min-height: 100vh;'>";
$contenedor = generarContenedorSemiRedondo($nombre, $anchoContenedor, $altoContenedor, $colorFondo, $colorTextoContenedor);
echo $contenedor;
echo "</div>";
?>
