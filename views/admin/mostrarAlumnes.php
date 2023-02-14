<h2>Gestió d'Alumnes</h2>
    <table border="1" class="taula">
        <tr class="titols">
            <td>DNI</td>
            <td>Nom</td>
            <td>Cognoms</td>
            <td>Edat</td>
            <td>Fotografia</td>
            <td>Correu</td>
            <td>Editar</td>
            <td>Editar Foto</td>
            <td colspan="2">Visibilitat<td>
        </tr>
<?php
    foreach($catalogo as $alumne){
        echo "<tr style='color:white;'>";
            echo "<td>".$alumne['dni_alumne']."</td>";
            echo "<td>".$alumne['nom']."</td>";
            echo "<td>".$alumne['cognoms']."</td>";
            echo "<td>".$alumne['edat']."</td>";
            echo "<td><img src=".$alumne['fotografia']." class='photo' alt='foto_alumne'></td>";
            echo "<td>".$alumne['correu']."</td>";
            echo "<td><a href='index.php?controller=Alumne&action=showEditAlumne&dni_alumne=".$alumne['dni_alumne']."'><img src='img/lapiz.png' height='40px' width='40px' alt='llapis'></a></td>";
            echo "<td><a href='editarfotoalum.php?dni_alumne=".$alumne['dni_alumne']."&oldfoto=".$alumne['fotografia']."'><img src='img/editfoto.png' height='40px' width='40px' alt='foto_alumne'></a></td>";
            if($alumne['visible']=="1"){
                echo "<td>Actiu</td>";
                echo "<td><a href='index.php?controller=Admin&action=desactivarAlumne&id=".$alumne['dni_alumne']."'><img src='img/pngwing.png' height='40px' width='40px' alt='on'></a></td>";
            }else{
                echo "<td>Inactiu</td>";
                echo "<td><a href='index.php?controller=Admin&action=activarAlumne&id=".$alumne['dni_alumne']."'><img src='img/pngnowing.png' height='40px' width='40px' alt='off'></a></td>";
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
    