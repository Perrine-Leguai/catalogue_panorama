<?php

require_once(__DIR__.'/../exception/DAOException.php');
require_once(__DIR__.'/../../config.php');


    class Connection{
        public static function connect() {

            global $mysql_host, $mysql_database, $mysql_user;

            try {
                $bdd = new PDO("mysql:
                                host=$mysql_host;
                                dbname=$mysql_database;
                                charset=utf8", 
                                "$mysql_user", 
                                '');
                return $bdd;
            } catch(PDOException $e) {
                echo "Error :" . $e->getMessage(), $e->getCode();
            }
        }
    }
?>