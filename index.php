<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Experts en Cursos d'Informàtica en format Online. Cursos Barats amb professors molt Formats i amb ganes d'Ajudar">
    <link rel="stylesheet" href="styles/login.css" type="text/css">
    <title>📚 InfoBDN | Escola de Cursos Online 💻</title>
</head>

<body>
    <?php
    require_once "autoload.php";
    require_once "views/general/menu.html";

     
    if (isset($_GET['controller'])) {
        $nombreController = $_GET['controller'] . "Controller";
    } else {
        //Controlador per dedecte
        $nombreController = "LoginController";
    }
    if (class_exists($nombreController)) {
        $controlador = new $nombreController();
        if (isset($_GET['action'])) {
            $action = $_GET['action'];
        } else {
            $action = "index";
        }

        try{
            $controlador->$action();
        }catch(Exception $e){
            echo "Ha habido un error!", $e->getMessage();
        }

    } else {
        echo "No existe el controlador";
    }
    ?>
    <br>
    <br>
    
</body>
</html>