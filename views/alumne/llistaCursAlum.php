<h2>Els Meus Cursos</h2>
<table border="1" class="taula">
    <tr class="titols">
        <td>Nom</td>
        <td>Descripció</td>
        <td>Hores</td>
        <td>Data Inici</td>
        <td>Data Final</td>
        <td>Nota</td>
        <td>Desmatricular-me</td>
    </tr>
<?php 
foreach($catalogo as $curs){

    echo "<tr style='color: white';>";
        echo "<td>".$curs['nom']."</td>";
        echo "<td>".$curs['descripcio']."</td>";
        echo "<td>".$curs['hores']."</td>";
        echo "<td>".$curs['data_inici']."</td>";
        echo "<td>".$curs['data_final']."</td>";
        echo "<td>".$nota['nota']."</td>";
        echo "<td><a href='desmatriculacio.php?dni=$dni&curs=$codi_curs'><input type='button' value='Desmatricular-me'></a></td>";
    echo "</tr>";
}
?>    
</table>
<br></br>
<div class="alta">
<a href="cursosalum.php">Tornar enrere</a>
<br></br>
<a href="sortir.php">Sortir de la sessió</a>
</div>