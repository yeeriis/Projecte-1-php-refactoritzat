<h2>Gestió de Cursos</h2>
    <table border="1" class="taula">
        <tr class="titols">
            <td>Codi Curs</td>
            <td>Nom</td>
            <td>Descripció</td>
            <td>Hores</td>
            <td>Data Inici</td>
            <td>Data Final</td>
            <td>DNI Professor</td>
            <td>Editar</td>
            <td colspan="2">Visibilitat</td>
        </tr>
    <?php 
    foreach($catalogo as $curs){
        echo "<tr style='color:white;'>";
            echo "<td>".$curs['codi_curs']."</td>";
            echo "<td>".$curs['nom']."</td>";
            echo "<td>".$curs['descripcio']."</td>";
            echo "<td>".$curs['hores']."</td>";

            $objeto_DateTime = date_create_from_format('Y-m-d', $curs['data_inici']);
            $nuevo_objeto_DateTime = date_format($objeto_DateTime, 'd-m-Y');

            echo "<td>".$nuevo_objeto_DateTime."</td>";
            echo "<td>".$nuevo_objeto_DateTime."</td>";
            echo "<td>".$curs['dni_professor']."</td>";
            echo "<td><a href='editarcurs.php?codi_curs=".$curs['codi_curs']."'><img src='img/lapiz.png' height='40px' width='40px' alt='llapis'></a></td>";
            if($curs['visible']==="1"){
                echo "<td>Actiu</td>";
                echo "<td><a href='index.php?controller=Admin&action=desactivarCurs&id=".$curs['codi_curs']."'><img src='img/pngwing.png' height='40px' width='40px' alt='on'></a></td>";
            }else{
                echo "<td>Inactiu</td>";
                echo "<td><a href='index.php?controller=Admin&action=activarCurs&id=".$curs['codi_curs']."'><img src='img/pngnowing.png' height='40px' width='40px' alt='off'></a></td>";
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