<?php

require "models/usuari.php";

class AlumneController
{
    public function index()
    {
        $id_alumne = $_POST['dni_alumne'];
        $alumne = new User();
        $catalogo = $alumne->cursosAlumnes();
        require "views/alumne/cursosAlum.php";
    }

    public function showAlumnes()
    {
        $categoria = new User();
        $catalogo = $categoria->taulaAlumnes();
        require_once "views/admin/mostrarAlumnes.php";
    }

    public function showEditAlumne()
    {
        $categoria = new User();
        $catalogo = $categoria->editar();
        require_once "views/general/AltaUsers.php";
    }

    public function desmatricularAlumne()
    {
        $categoria = new User();
        $catalogo = $categoria->desmatricular();
        require_once "views/alumne/llistaCursAlum.php";
    }

    public function matricularAlumne()
    {
        $categoria = new User();
        $catalogo = $categoria->matricular();
        require_once "views/alumne/llistaCursAlum.php";
    }

    public function mostrarPerfil()
    {
        $categoria = new User();
        $catalogo = $categoria->perfil();
        require_once "views/alumne/perfilAlumne.php";
    }

    public function editarFoto()
    {
        $categoria = new User();
        $dni_alumne = $_POST['dni_alumne'];
        $oldfotografia = $_POST['oldfoto'];
        if (is_uploaded_file ($_FILES['fotografia']['tmp_name'])){
            $nombreDirectorio = "imgalumnes/";
            $idUnico = $dni_alumne;
            $nom=$_FILES['fotografia']['name'];
            $cont=explode(".",$nom);
            $extensio= $cont[1];
            $fotografia = $idUnico.".".$extensio;
            move_uploaded_file ($_FILES['fotografia']['tmp_name'],
            $nombreDirectorio.$fotografia);
            $categoria->editfoto();
        }
        require_once "views/alumne/editarfoto.php";
    }
}