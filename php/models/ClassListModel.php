<?php
/**
 * Classe de gestion de listes d'entités
 * remplacer 'class' par le nom de la classe
 */
class ClassList 
{
    public $classList=array();
 
    function __construct() {

    }

    public function getList() { return $this->classList; }
    public function setList($classList) { $this->classList = $classList; }

    /**
     * Essaie d'ajouter un employé à la liste
     * @return bool true si tout s'est bien passé, false sinon
     */
    function addClass($class) {
        try {
            array_push($this->classList, $class);
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    /**
     * Essaie d'enlever un employé à la liste
     * @return bool true si tout s'est bien passé, false sinon
     */
    function removeClass($id) {
        try {
            unset($this->classList[array_search($this->classList, $id)]);
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
?>