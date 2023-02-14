<?php
require_once("database.php");

class Admin extends Database
{
    private $user;
    private $nombre;
    private $clave;

    public function login($user, $password)
    {
        $consulta = $this->db->prepare("SELECT * FROM admin WHERE user LIKE '$user' and contrasenya LIKE '$password'");
        $consulta->execute();
        if ($consulta->fetch(PDO::FETCH_OBJ)) {
            return true;
        } else {
            return false;
        }
    }

    public function activarAlumne($id){
        $consulta = $this->db->prepare("UPDATE alumnes SET visible = '1' WHERE dni_alumne = '$id'");
        $count =$consulta->execute();
        echo $count." registros actualizados correctamente";
    }

    public function desactivarAlumne($id){
        $consulta = $this->db->prepare("UPDATE alumnes SET visible = '0' WHERE dni_alumne = '$id'");
        $count =$consulta->execute();
        echo $count+$count2." registros actualizados correctamente";
    }

    public function activarCurs($id){
        $consulta = $this->db->prepare("UPDATE cursos SET visible = 1 WHERE codi_curs = '$id'");
        $count =$consulta->execute();
        echo $count." registros actualizados correctamente";
    }

    public function desactivarCurs($id){
        $consulta = $this->db->prepare("UPDATE cursos SET visible = 0 WHERE codi_curs = '$id'");
        $count =$consulta->execute();
        echo $count+$count2." registros actualizados correctamente";
    }

    public function activarProfessor($id){
        $consulta = $this->db->prepare("UPDATE professors SET visible = 1 WHERE dni_professor LIKE '$id'");
        $count =$consulta->execute();
        echo $count." registros actualizados correctamente";
    }

    public function desactivarProfessor($id){
        $consulta = $this->db->prepare("UPDATE professors SET visible = 0 WHERE dni_professor LIKE '$id'");
        $count =$consulta->execute();
        echo $count+$count2." registros actualizados correctamente";
    }
}