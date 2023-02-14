<br>
<form action="index.php?controller=Curs&action=addCurs" method="POST" class="formulari">
    <h3>Creació de Cursos</h3>
    <input type="text" name="codi_curs" class='invisible' placeholder="Codi Curs" required>
    <br></br>
    <input type="text" name="nom" class='invisible' placeholder="Nom" required>
    <br></br>
    <input type="text" name="descripcio" class='invisible' placeholder="Descripció" required>
    <br></br>
    <input type="text" name="hores" class='invisible' placeholder="Hores" required>
    <br></br>
    <input type="date" name="data_inici" min=<?php $hoy=date("Y-m-d"); echo $hoy;?> class='invisible' placeholder="Data Inici" required>
    <br></br>
    <input type="date" name="data_final" min=<?php $hoy=date("Y-m-d"); echo $hoy;?> class='invisible' placeholder="Data Final" required>
    <br></br>
    Professor que imparteix: <select name="dni_professor" id="dni_professor" style='background: transparent;'></select>
    <br></br>
    <p><button type='submit' class='button label'>Crear</button></p>  
</form>
<div class="alta">
    <br></br>
    <a href="index.php?controller=Admin&action=mostrarMenu">Tornar enrere</a>
    <br></br>
    <a href="index.php?controller=Login&action=sortirSessio">Sortir de la sessió</a>
</div>          