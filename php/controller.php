<?php
require_once 'php/DAO/DBQueries.php';
require_once 'php/models/ClassModel.php';
require_once 'php/models/ClassListModel.php';

/**
 * Récupère les informations en base de données et remplit une liste de 'class' avec
 * @return Array liste de 'class'
 */
function generateTableData() {
    $data = getSomething();
    $liste = new ClassList();
    foreach ($data as $key => $row) {
        // Parcours des données
        // Complétion des instances de 'class'
        // Insertion des instances dans $liste
    }
    return $liste->getList();
}

// Autres fonctions utiles

?>