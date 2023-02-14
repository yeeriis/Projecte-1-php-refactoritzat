<?php

require_once("database.php");

class Principal extends Database
{
    public function loginAlumne($usuari, $password)
    {
        $consulta = $this->db->prepare("SELECT * FROM alumnes WHERE dni_alumne = '$usuari' AND contrasenya = '$password'");
        $consulta->execute();
        if ($consulta->fetch(PDO::FETCH_OBJ)) {
            return true;
        } else {
            return false;
        }
    }

    public function loginProfessor($usuari, $password)
    {
        $consulta = $this->db->prepare("SELECT * FROM professors WHERE dni_professor = '$usuari' AND contrasenya = '$password'");
        $consulta->execute();
        if ($consulta->fetch(PDO::FETCH_OBJ)) {
            return true;
        } else {
            return false;
        }
    }
}