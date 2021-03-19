<?php

    interface InterfaceDao {
        public function create(Object $objet);
        // public function delete(Int $id);
      
        public function searchAll();
        // public function searchBy(Int $id); 
        // public function update(Object $objet, int $idOdbjectToModify);
    }
?>