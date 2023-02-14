<?php

require "models/admin.php";

class AdminController
{
    public function mostrarMenu(){
        require_once "views/admin/menuAdmin.php";
    }

    public function mostrarAltaProfes()
    {
        require_once "views/admin/formAltaProfes.php";
    }

    public function mostrarGestioProfes()
    {
        require_once "views/admin/mostrarProfes.php";

    }

    public function mostrarAltaCursos()
    {
        require_once "views/admin/formAltaCursos.php";

    }

    public function mostrarGestioCursos()
    {
        require_once "views/admin/mostrarCursos.php";

    }

    public function mostrarGestioAlumnes()
    {
        require_once "views/admin/mostrarAlumnes.php";
    }

    public function activarAlumne()
    {
        $idalumne = $_GET['dni_alumne'];
        $categoria = new Admin();
        $categoria->activarAlumne($idalumne);
        header("Location: index.php?controller=Alumne&action=showAlumnes");
    }

    public function desactivarAlumne()
    {
        $idalumne = $_GET['dni_alumne'];
        $categoria = new Admin();
        $categoria->desactivarAlumne($idalumne);
        header("Location: index.php?controller=Alumne&action=showAlumnes");
    }

    public function activarCurs()
    {
        $idcurs = $_GET['codi_curs'];
        $categoria = new Admin();
        $categoria->activarCurs($idcurs);
        header("Location: index.php?controller=Curs&action=showCursos");
    }

    public function desactivarCurs()
    {
        $idcurs = $_GET['codi_curs'];
        $categoria = new Admin();
        $categoria->desactivarCurs($idcurs);
        header("Location: index.php?controller=Curs&action=showCursos");
    }

    public function activarProfessor()
    {
        $id_professor = $_GET['id'];
        $categoria = new Admin();
        $categoria->activarProfessor($id_professor);
        header("Location: index.php?controller=Professor&action=showProfes");
    }

    public function desactivarProfessor()
    {
        $idprofessor = $_GET['dni_professor'];
        $categoria = new Admin();
        $categoria->desactivarProfessor($idprofessor);
        header("Location: index.php?controller=Professor&action=showProfes");
    }

    public function editarAlumne()
    {
        $idalumne = $GET['dni_alumne'];
        $categoria = new Admin();
        $categoria->editAlumne($idalumne);
        header("Location: index.php?controller=Alumne&action=showEditAlumne");

    }

    public function editarProfe()
    {
        $idprofessor = $_GET['dni_professor'];
    }

    public function editarCurs()
    {
        
    }
}