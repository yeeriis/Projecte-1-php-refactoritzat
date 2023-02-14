<h2>Alumnes del Curs</h2>
<table border="1" class="taula">
    <tr class="titols">
        <td>Nom</td>
        <td>Cognoms</td>
        <td>Correu</td>
        <td>Nota</td>
        <td>Editar nota</td>
    </tr>
<?php 
foreach($catalogo as $alumne){
    echo "<tr style='color: white';>";
        echo "<td>".$alumne['nom']."</td>";
        echo "<td>".$alumne['cognoms']."</td>";
        echo "<td>".$alumne['correu']."</td>";
        echo "<td>".$alumne['nota']."</td>";
        echo "<td><a href='editarnota.php?dni_alumne=".$alumne['dni_alumne']."&curs=".$alumne['codi_curs']."'><input type='button' value='Editar Nota'></a></td>";
    echo "</tr>";
}
?>    
</table>
<br></br>
<div class="alta">
    <a href="index.php?controller=Professor&action=mostrarMenu">Tornar enrere</a>
    <br></br>
    <a href="index.php?controller=Login&action=sortirSessio">Sortir de la sessió</a>
</div>