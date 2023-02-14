<?php
echo "<h2> Modificar la teva fotografia </h2>";
echo "<form action='editarfotoalum.php' ENCTYPE='multipart/form-data' class='formulari' method='post'>";
echo "<br>";
echo "<br>";
echo "<img with='100px' height='100px' src='$oldfotografia' alt='foto_antiga'>";
echo "<br>";
echo "<br>";
echo "<input readonly class='ocult invisible' type='text' name='oldfoto' id='oldfoto' value='$oldfotografia'>";
echo "<br/>";
echo "<br/>";
echo "DNI: <input readonly class='ocult invisible' type='text' name='dni_alumne' id='dni_alumne' value='$dni_alumne'>";
echo "<br>";
echo "<br>";
echo "<input required type='file' name='fotografia' id='fotografia' accept='image/*'>";
echo "<br>";
echo "<br>";
echo "<button type='submit' class='button label'>Modificar</button>";
echo "<br>";
echo "<br>";
echo "</form>";
?>
<div class="alta">
    <br></br>
    <a href="perfilalumne.php">Tornar enrere</a>
    <br></br>
    <a href="sortir.php">Sortir de la sessió</a>
</div>  