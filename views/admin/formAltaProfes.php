<br>
<form action="index.php?controller=Professor&action=addProfe" method="POST" class="formulari" enctype='multipart/form-data'>
    <h3>Alta de Professors</h3>
    <input type="text" name="dni_professor" class='invisible' placeholder="DNI" required>*
    <br></br>
    <input type="text" name="nom" class='invisible' placeholder="Nom" required>
    <br></br>
    <input type="text" name="cognoms" class='invisible' placeholder="Cognoms" required>
    <br></br>
    <input type="text" name="titol_academic" class='invisible' placeholder="Títol Acadèmic" required>
    <br></br>
    <input type="file" class='selectfile' name="foto" id="foto" required><label for="foto" class='invisible label'> Selecciona fotografia</label>
    <br></br>
    <input type="password" name="contrasenya" class='invisible' placeholder="Contrasenya" required>*
    <p style='font-size:10px;'>* -> El DNI i la contrasenya es faran servir com a usuari i password al Login, respectivament.
    <br>
    <br>
    <input type="submit" class='label button' name="enviar">
</form>
<div class="alta">
    <br></br>
    <a href="index.php?controller=Admin&action=mostrarMenu">Tornar enrere</a>
    <br></br>
    <a href="index.php?controller=Login&action=sortirSessio">Sortir de la sessió</a>
</div>      