<?php

require_once("database.php");

class Professor extends Database
{   
    public function cursosProfes()
    {
        $consulta = $this->db->prepare("SELECT * FROM cursos WHERE dni_professor = '$dni_professor'");
        $consulta->execute();
        $profe = $consulta->fetchAll();
        return $profe;
    }

    public function taulaProfes()
    {
        $consulta = $this->db->prepare("SELECT * FROM professors");
        $consulta->execute();
        $profe = $consulta->fetchAll();
        return $profe;
    }

    public function anadir($dni_professor, $nom, $cognoms, $titol_academic, $visible)
    {
        $consulta = $this->db->prepare("INSERT INTO professors (dni_professor, nom, cognoms, titol_academic, visible)VALUES ('$dni_professor','$nom','$cognoms','$titol_academic','1')");
        $consulta->execute();
        echo "Nou professor afegit amb èxit.";
    }

    public function editfoto()
    {
        $consulta = $this->db->prepare("UPDATE professors SET fotografia='imgprofes/$fotografia' WHERE dni_professor LIKE '$dni_professor'");
        $consulta->execute();
        echo "Nova foto afegida amb èxit.";
    }
}