<h2>Gestió de Professors</h2>
    <table border="1" class="taula">
        <tr class="titols">
            <td>DNI</td>
            <td>Nom</td>
            <td>Cognoms</td>
            <td>Titol Academic</td>
            <td>Fotografia</td>
            <td>Editar</td>
            <td>Editar Foto</td>
            <td colspan="2">Visibilitat</td>
        </tr>
<?php 
    foreach($catalogo as $profe){
        echo "<tr style='color:white;'>";
            echo "<td>".$profe['dni_professor']."</td>";
            echo "<td>".$profe['nom']."</td>";
            echo "<td>".$profe['cognoms']."</td>";
            echo "<td>".$profe['titol_academic']."</td>";
            echo "<td><img src=".$profe['fotografia']." height='40px' alt='foto_profe'></img></td>";
            echo "<td><a href='editarprofe.php?dni_professor=".$profe['dni_professor']."'><img src='img/lapiz.png' height='40px' width='40px' alt='llapis'</a></td>";
            echo "<td><a href='editarfoto.php?dni_professor=".$profe['dni_professor']."&oldfoto=".$profe['fotografia']."'><img src='img/editfoto.png' height='40px' width='40px' alt='foto_professor'</a></td>";
            if($profe['visible']==="1"){
                echo "<td>Actiu</td>";
                echo "<td><a href='index.php?controller=Admin&action=desactivarProfessor&id=".$profe['dni_professor']."'><img src='img/pngwing.png' height='40px' width='40px' alt='on'></a></td>";
            }else{
                echo "<td>Inactiu</td>";
                echo "<td><a href='index.php?controller=Admin&action=activarProfessor&id=".$profe['dni_professor']."'><img src='img/pngnowing.png' height='40px' width='40px' alt='off'></a></td>";
            }
        echo "</tr>";
        }
    ?>
</table>
<br>
<div class="alta">
    <a href="index.php?controller=Admin&action=mostrarMenu">Tornar enrere</a>
    <br></br>
    <a href="index.php?controller=Login&action=sortirSessio">Sortir de la sessió</a>
</div>