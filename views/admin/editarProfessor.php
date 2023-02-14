<?php

echo "<h2> Modificar professor </h2>";
    echo "<form action='index.php?controller=Admin&action=editarProfe' class='formulari' ENCTYPE='multipart/form-data' method='post'>";
    echo "<br>";
    echo "<br>";
    echo "DNI: <input type='text' name='dni_professor' class='invisible' id='dni_professor' value='".$profe['dni_professor']."' readonly>";
    echo "<br>";
    echo "<br>";
    echo "Nom: <input type='text' name='nom' class='invisible' id='nom' value='".$profe['nom']."'>";
    echo "<br>";
    echo "<br>";
    echo "Cognoms: <input type='text' name='cognoms' class='invisible' id='cognoms' value='".$profe['cognoms']."'>";                            
    echo "<br>";
    echo "<br>";
    echo "Titol acadèmic: <input type='text' name='titol' class='invisible' id='titol' value='".$profe['titol_academic']."'>";
    echo "<br>";
    echo "<br>";
    echo "Contrasenya: <input type='password' name='contrasenya' class='invisible' id='contrasenya'>";
    echo "<br>";
    echo "<br>";
    echo "<button type='submit'>Modificar</button>";
    echo "<br>";
    echo "<br>";   
echo "</form>";

?>