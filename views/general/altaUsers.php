<h2>Creació del compte</h2>
        <form action="index.php?controller=Login&action=addUser" method="POST" class="formulari" enctype='multipart/form-data'>
            <br>
            <input type="text" required class='invisible' placeholder="DNI" name="dni_alumne"/>
            <br></br>
            <input type="text" required class='invisible' placeholder="Nom" name="nom">
            <br></br>
            <input type="text" required class='invisible' placeholder="Cognoms" name="cognoms">
            <br></br>
            <input type="text" required class='invisible' placeholder="Edat" name="edat">
            <br></br>
            <input type="file" class='selectfile' name="foto" id="foto" required><label for="foto" class='invisible label'> Selecciona fotografia</label>
            <br></br>
            <input type="text" required class='invisible' placeholder="Correu" name="correu">
            <br></br>
            <input type="password" required class='invisible' placeholder="Contrasenya" name="contrasenya">
            <br></br>
            <input type="submit" class='button label' name="enviar" value="Aceptar"/>
            <br></br>
        </form>
        <br><br>
        <div class="alta">
            <a href="index.php">Tornar enrere</a>
        </div>