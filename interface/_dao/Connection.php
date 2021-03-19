<?php

require_once(__DIR__.'/../exception/DAOException.php');

    class Connection{
        public static function connect() {

            try {
                $bdd = new PDO('mysql:
                                host=localhost;
                                dbname=panorama;
                                charset=utf8', 
                                'root', 
                                '');
                return $bdd;
            } catch(PDOException $e) {
                echo "Error :" . $e->getMessage(), $e->getCode();
            }
        }
    }
?>