<?php

require "models/professor.php";

class ProfessorController
{
    public function index()
    {
        $profe = new Professor();
        $catalogo = $profe->cursosProfes();
        require "views/professor/cursosProf.php";
    }

    public function showProfes()
    {
        $profe = new Professor();
        $catalogo = $profe->taulaProfes();
        require_once "views/admin/mostrarProfes.php";
    }

    public function showFormProfes()
    {
        require_once "views/admin/formAltaProfes.php";
    }


    public function addProfe()
    {
        $profe = new Professor();
        $dni_professor = $_POST['dni_professor'];
        $nom = $_POST['nom'];
        $cognoms = $_POST['cognoms'];
        $titol_academic = $_POST['titol_academic'];
        // $foto = $_POST['foto'];
        $visible = '1';
        $profe->anadir($dni_professor, $nom, $cognoms, $titol_academic, $visible);
    }

    public function editarfoto()
    {
        $profe = new Professor();
        $dni_professor = $_POST['dni_professor'];
        $oldfotografia = $_POST['oldfoto'];
        if (is_uploaded_file ($_FILES['fotografia']['tmp_name'])){
            $nombreDirectorio = "imgprofes/";
            $idUnico = $dni_professor;
            $nom=$_FILES['fotografia']['name'];
            $cont=explode(".",$nom);
            $extensio= $cont[1];
            $fotografia = $idUnico.".".$extensio;
            move_uploaded_file ($_FILES['fotografia']['tmp_name'],
            $nombreDirectorio.$fotografia);
            $profe->editfoto();
        }else{
            print ("<p>No s'ha pogut pujar la fotografia nova</p>");
        }
    }
}