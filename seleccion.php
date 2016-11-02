<?php
    require_once "Database.php";
    require_once "tabla1.php";

    $db = Database::getInstance();
    $mysqli = $db->getConnection();
/**
 * Created by PhpStorm.
 * User: alvarotellez
 * Date: 21/10/16
 * Time: 17:36
 */
    echo '<html>';
    echo '<form action="op1.php" method="post">';
    echo  '<body>';
    $nombreUsuario = $_POST["nombreUsuario"];
    //Variable para saber que opción ha cogido
    $op = $_POST["seleccion"];

    //Mensaje de bienvenida al usuario
   echo "<h1>"."Hola, ". $nombreUsuario . "</h1>" ;

    //En el if seleccionamos que acción quiere hacer
    //$op = 1 esta opcion hace un select
    if($op=="1"){
                echo "Introduzca el dni del alumno que desea seleccionar:".'</br>';
                echo '<input type="text" name="dniAlumno"></br>';
                echo '<input type="submit" value="Enviar">'.'</br>';
                echo '<a href="index.html">Volver a inicio</a>';
    }elseif ($op=="2"){
        echo "Introduzca los datos del nuevo alumno: ".'</br>';
        echo '<input type="text" name="nomAlumnoCambio"></br>';
        echo '<input type="submit" value="Enviar">'.'</br>';
        echo '<a href="index.html">Volver a inicio</a>';
    }else{
        echo '<h2>No has seleccionado ninguna opción</h2>';
    }//Fin Si
    echo  '</body>';
    echo '</form>';
    echo '</html>';