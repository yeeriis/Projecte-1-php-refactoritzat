<?php

echo "<h2> Modificar Curs </h2>";
echo "<form action='index.php?controller=Admin&action=editarCurs' class='formulari' ENCTYPE='multipart/form-data' method='POST'>";
    echo "<br>";
    echo "<br>";
    echo "Codi_curs: <input type='text' class='invisible' name='codi_curs' id='codi_curs' value='".$curs['codi_curs']."' readonly>";
    echo "<br>";
    echo "<br>";
    echo "Nom: <input type='text' class='invisible' name='nom' id='nom' value='".$curs['nom']."'>";
    echo "<br>";
    echo "<br>";
    echo "Descripcio: <input type='text' class='invisible' name='descripcio' id='descripcio' value='".$curs['descripcio']."'>";
    echo "<br>";
    echo "<br>";
    echo "Hores: <input type='text' class='invisible' name='hores' id='hores' value='".$curs['hores']."'>";
    echo "<br>";
    echo "<br>";
    echo "Data Inici: <input type='text' class='invisible' name='data_inici' id='data_final' value='".$curs['data_inici']."'>";
    echo "<br>";
    echo "<br>";
    echo "Data Final: <input type='text' class='invisible' name='data_final' id='data_final' value='".$curs['data_final']."'>";
    echo "<br>";
    echo "<br>";
    echo "DNI Professor: <input type='text' class='invisible' name='dni_professor' id='dni_professor' value='".$curs['dni_professor']."'>";
    echo "<br>";
    echo "<br>";
    echo "<button type='submit'>Modificar</button>";
    echo "<br>";
    echo "<br>";
echo "</form>"; 

?>