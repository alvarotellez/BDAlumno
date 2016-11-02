<?php

require_once "Database.php";
require_once "tabla1.php";


$db = Database::getInstance();
$mysqli = $db->getConnection();
$sql_query = "SELECT ". \Constantes_DB\tabla1::DNI . " , "
                      . \Constantes_DB\tabla1::NOMBRE . " , "
                      . \Constantes_DB\tabla1::EDAD . " "
              ." FROM ". \Constantes_DB\tabla1::TABLE_NAME;


$result = $mysqli->query($sql_query);

if ($result->num_rows > 0) {
    echo '<table border=\"1\">';
    echo '<tr>';
    echo '<td>'. \Constantes_DB\tabla1::DNI  .'</td>';
    echo '<td>'. \Constantes_DB\tabla1::NOMBRE  .'</td>';
    echo '<td>'. \Constantes_DB\tabla1::EDAD .'</td>';
    echo '</tr>';
  
    while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>'. $row[\Constantes_DB\tabla1::DNI]  .'</td>';
        echo '<td>'. $row[\Constantes_DB\tabla1::NOMBRE]  .'</td>';
        echo '<td>'. $row[\Constantes_DB\tabla1::EDAD] .'</td>';
        echo '</tr>';
    }
    echo '</table>';
}


