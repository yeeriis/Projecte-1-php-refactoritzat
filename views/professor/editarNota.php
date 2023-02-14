<?php
echo "<h2> Modificar Nota </h2>";
echo "<form action='index.php?controller=Professor&action=posarNota' class='formulari' ENCTYPE='multipart/form-data' method='post'>";
    echo "<br>";
    echo "<br>";
    echo "DNI Alumne: <input type='text' name='dni_alumne' class='invisible' id='dni_alumne' value='".$alumne['dni_alumne']."' readonly>";
    echo "<br>";
    echo "<br>";
    echo "Codi Curs: <input type='text' name='codi_curs' class='invisible' id='codi_curs' value='".$alumne['codi_curs']."' readonly>";
    echo "<br>";
    echo "<br>";
    echo "Nota: <input type='number' name='nota' min='0' max='10' class='invisible' required id='nota' value='".$alumne['nota']."'>";
    echo "<br>";
    echo "<br>";
    echo "<button type='submit'>Modificar</button>";
    echo "<br>";
    echo "<br>";   
    echo "</form>";                     
echo "}";
?>
<br><br>
<div class="alta">
<a href="index.php?controller=Login&action=sortirSessio">Sortir de la sessió</a>
</div>