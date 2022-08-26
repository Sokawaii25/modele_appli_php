<?php
require_once 'php/DAO/DBConnect.php';

/**
 * Récupère quelque chose en base de données
 * @return mixed résultat de la requête
 */
function getSomething() {
    $sql = "SELECT * FROM table";
    return execSQLWithReturn($sql);
}

?>