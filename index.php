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
        font-size: 28px;
        color: <?php echo $colorTexto; ?>;
        margin: 0 auto;
        display: block;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
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
$anchoContenedor = 320;
$altoContenedor = 160;
$colorFondo = "#f8f8f8";
$colorTextoContenedor = "#222";

echo "<div style='display: flex; justify-content: center; align-items: center; min-height: 100vh; background-color: #fff;'>";
$contenedor = generarContenedorSemiRedondo($nombre, $anchoContenedor, $altoContenedor, $colorFondo, $colorTextoContenedor);
echo $contenedor;
echo "</div>";
?>
