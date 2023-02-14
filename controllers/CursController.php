<?php

require "models/curs.php";

class CursController
{
    public function mostrarPaginaPrincipal()
    {
        require "views/general/menu.html";
    }

    public function showCursos()
    {
        $curs = new Curs();
        $catalogo = $curs->taulaCursos();
        require_once "views/admin/mostrarCursos.php";
    }

    public function showFormCursos()
    {
        require_once "views/admin/formAltaCursos.php";
    }

    public function addCurs()
    {
    $curs = new Curs();
    $codi_curs = $_POST['codi_curs'];
    $nom = $_POST['nom'];
    $descripcio = $_POST['descripcio'];
    $hores = $_POST['hores'];
    $data_inici = $_POST['data_inici'];
    $data_final = $_POST['data_final'];
    $visible = '1';
    $curs->anadir($codi_curs, $nom, $descripcio, $hores, $data_inici, $data_final, $visible);
    }
}