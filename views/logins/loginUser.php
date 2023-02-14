<h2>Benvingut/da al portal de cursos d'informàtica!</h2>
    <form name="formulari" action="index.php?controller=Login&action=loginUser" method="POST" class="formulari">
        <h3>Inicia Sessió:</h3>
        <input type="text" name="usuari" placeholder="Usuari" class="invisible" required><br>
        <br>
        <input type="password" name="password" placeholder="Contrasenya" class="invisible" required><br>
        <br>
        Professor: <input type="radio"  maxlength="15" id="professor" name="select" value="prof" required/>
        <br/>
        Alumne: <input type="radio"  maxlength="15" id="alumne" name="select" value="alum" required/>
        <br/>
        <br/>
        <input type="submit" clasS='button label' name="Enviar" value="Enviar">
        <br>
        <p>No estàs registrat? Clica <a href="index.php?controller=Login&action=mostrarFormAlta">aquí</a></p>
    </form>