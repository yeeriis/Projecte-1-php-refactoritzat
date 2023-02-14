<h2>Cursos Disponibles</h2>
<table border="1" class="taula">
    <tr class="titols">
        <td>Nom</td>
        <td>Descripció</td>
        <td>Hores</td>
        <td>Data Inici</td>
        <td>Data Final</td>
        <td>Matricular-me</td>
    </tr>
<?php
foreach($catalogo as $curs){
    $curs = mysqli_fetch_assoc($resultat);
    $codi_curs = $curs['codi_curs'];
    echo "<tr style='color: white';>";
        echo "<td>".$curs['nom']."</td>";
        echo "<td>".$curs['descripcio']."</td>";
        echo "<td>".$curs['hores']."</td>";
        echo "<td>".$curs['data_inici']."</td>";
        echo "<td>".$curs['data_final']."</td>";
        echo "<td><a href='matriculacio.php?dni=$dni&curs=$codi_curs'><input type='button' value='Matricular-me'></a></td>";
    echo "</tr>";
}
?>    
</table>
<br></br>
<div class="alta">
    <a href="index.php?controller=Login&action=sortirSessio">Sortir de la sessió</a>
</div>