<?php

require_once("database.php");

class User extends Database
{    
    public function cursosAlumnes($id_alumne)
    {
        $consulta = $this->db->prepare("SELECT * FROM matricula WHERE dni_alumne = '$id_alumne'");
        $consulta->execute();
        $profe = $consulta->fetchAll();
        return $profe;
    }

    public function taulaAlumnes()
    {
        $consulta = $this->db->prepare("SELECT * FROM alumnes");
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        return $resultado;
    }

    public function anadir($dni, $nom, $cognoms, $edat, $correu, $contrasenya,  $visible)
    {
        $consulta = $this->db->prepare("INSERT INTO alumnes (dni_alumne, nom, cognoms, edat, correu, contrasenya, visible)VALUES ('$dni','$nom','$cognoms','$edat', '$correu', '$contrasenya' ,'1')");
        $consulta->execute();
        echo "Nou alumne afegit amb èxit.";
    }

    public function editar($dni)
    {
        $consulta = $this->db->prepare("UPDATE alumnes SET dni_alumne = '$dni', nom = '$nom', cognoms = '$cognoms', edat = '$edat', correu = '$correu', contrasenya = '$contrasenya' ,'1'");
        $consulta->execute();
        echo "Nou alumne afegit amb èxit.";
    }

    public function desmatricular($dni)
    {
        $consulta = $this->db->prepare("DELETE FROM matricula WHERE dni_alumne = '$dni' AND codi_curs = '$codi_curs'");
        $consulta->execute();
        echo "Alumne desmatriculat amb èxit.";
    }

    public function matricular($dni)
    {
        $consulta = $this->db->prepare("INSERT INTO matricula VALUES ('$dni', $codi_curs, 0)");
        $consulta->execute();
        echo "Alumne matriculat amb èxit.";
    }

    public function perfil($dni)
    {
        $consulta = $this->db->prepare("SELECT * FROM alumnes WHERE dni_alumne LIKE '$dni_alumne'");
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        return $resultado;
    }

    public function editfoto($dni_alumne, $oldfotografia)
    {
        $consulta = $this->db->prepare("UPDATE alumnes SET fotografia='imgalumnes/$fotografia' WHERE dni_alumne LIKE '$dni_alumne'");
        $consulta->execute();
        echo "Nova foto afegida amb èxit.";
    }
}