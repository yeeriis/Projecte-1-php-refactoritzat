<?php

require "models/admin.php";
require "models/usuari.php";
require "models/professor.php";
require "models/principal.php";

class LoginController
{
    public function index()
    {
        if (isset($_SESSION['user']) && $_SESSION['role'] == 'admin') {
            header('Location: index.php?controller=Admin&action=mostrarMenu');
        } else if (isset($_SESSION['user']) && $_SESSION['role'] == 'alum') {
            header('Location: index.php?controller=Alumne&action=index');
        } else if (isset($_SESSION['user']) && $_SESSION['role'] == 'prof') {
            header('Location: index.php?controller=Professor&action=index');
        } else {
            header('Location: index.php?controller=Principal&action=mostrarPaginaPrincipal');
        }
    }

    public function mostrarLoginAdmin()
    {
        require "views/logins/loginAdmin.php";
    }

    public function loginAdmin()
    {
        $admin = new Admin();
        $_user = trim($_POST['usuari']);
        $_password = trim($_POST['contrasenya']);

        $_result = $admin->login($_user, $_password);
        if ($_result) {
            $_SESSION['usuari'] = $_user;
            echo "login correcto";
            header('Location: index.php?controller=Admin&action=mostrarMenu');
            die();
        } else {
            echo "Login incorrecto";
        }
    }


    public function mostrarLoginUser()
    {
        require "views/logins/loginUser.php";
    }

    public function loginUser()
    {
        $user = new Principal();
        $usuari = $_POST['usuari'];
        $password = $_POST['password'];
        $role = $_POST['select'];

        if ($role == 'alum'){
            $user->loginAlumne($usuari, $password);
            header('Location: index.php?controller=Alumne&action=index');
        }
        else if($role == 'prof'){
            $user->loginProfessor($usuari, $password);
            header('Location: index.php?controller=Professor&action=index');
        }

    }

    public function addUser()
    {
        $user = new User();
        $dni = $_POST['dni_alumne'];
        $nom = $_POST['nom'];
        $cognoms = $_POST['cognoms'];
        $edat = $_POST['edat'];
        // $foto = $_POST['foto'];
        $correu = $_POST['correu'];
        $contrasenya = $_POST['contrasenya'];
        // $foto = $_POST['foto'];
        $visible = '1';
        $user->anadir($dni, $nom, $cognoms, $edat, $correu, $contrasenya, $visible);
        header("Location: index.php?controller=Principal&action=mostrarPaginaPrincipal");
    }

    public function mostrarFormAlta()
    {
        require "views/general/altaUsers.php";
    }

    public function sortirSessio()
    {
        session_start();
        session_destroy();
        echo "<p>Redirigint...</p>";
        echo "<META HTTP-EQUIV='REFRESH' CONTENT='2;URL=index.php'>";
    }
}