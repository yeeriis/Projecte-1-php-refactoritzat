<?php

require_once("database.php");

class Curs extends Database
{   
    public function taulaCursos()
    {
        $consulta = $this->db->prepare("SELECT * FROM cursos");
        $consulta->execute();
        $curs = $consulta->fetchAll();
        return $curs;
    }

    public function anadir($codi_curs, $nom, $descripcio, $hores, $data_inici, $data_final, $visible)
    {
        $consulta = $this->db->prepare("INSERT INTO cursos (codi_curs, nom, descripcio, hores, data_inici, data_final, visible)VALUES ('$codi_curs','$nom','$descripcio','$hores','$data_inici','$data_final','1')");
        $consulta->execute();
        echo "Nou curs afegit amb èxit.";
    }

}