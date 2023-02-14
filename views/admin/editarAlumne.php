<?php

echo "<h2> Modificar alumne </h2>";
echo "<form action='index.php?controller=Admin&action=editarAlumne' class='formulari' ENCTYPE='multipart/form-data' method='post'>";
    echo "<br>";
    echo "<br>";
    echo "DNI: <input type='text' class='invisible' name='dni_alumne' id='dni_professor' value='".$alumne['dni_alumne']."' readonly>";
    echo "<br>";
    echo "<br>";
    echo "Nom: <input type='text' class='invisible' name='nom' id='nom' value='".$alumne['nom']."'>";
    echo "<br>";
    echo "<br>";
    echo "Cognoms: <input type='text' class='invisible' name='cognoms' id='cognoms' value='".$alumne['cognoms']."'>";
    echo "<br>";
    echo "<br>";
    echo "Edat: <input type='text' class='invisible' name='edat' id='edat' value='".$alumne['edat']."'>";
    echo "<br>";
    echo "<br>";
    echo "Correu: <input type='text' class='invisible' name='correu' id='correu' value='".$alumne['correu']."'>";
    echo "<br>";
    echo "<br>";
    echo "Contrasenya: <input type='password' class='invisible' name='contrasenya' id='contrasenya'>";
    echo "<br>";
    echo "<br>";
    echo "<button type='submit'>Modificar</button>";
    echo "<br>";
    echo "<br>";      
echo "</form>"; 

?>