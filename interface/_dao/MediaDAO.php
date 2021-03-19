<?php
require_once(__DIR__.'/../exception/DAOException.php');
require_once(__DIR__.'/Connection.php');
require_once(__DIR__.'/../interface/InterfaceDao.php');

    class MediaDAO extends Connection{
        
        //create new media
        public function create(Object $media){
            $id_artwork = $media->getIdArtwork() ;
            $title      = $media->getTitle() ;
            $description= $media->getDescription() ;
            $media      = $media->getMedia() ;

            try{
                //connect to the bdd
                $db= Connection::connect();                 
                //insert request
                $stmt = $db->prepare("INSERT INTO `medias` VALUES (NULL, :idAw, :title, :description, :media)");
                //binding params
                $stmt->bindParam(':idAw', $id_artwork);
                $stmt->bindParam(':title', $title ); 
                $stmt->bindParam(':description', $description); 

                $rs = $stmt->execute();
                //return rs to display success message after adding
                return $rs;

            }catch(PDOException $e){
                throw new DAOException($e->getMessage(), $e->getCode());
            }
        }

        //delete a media
        public function delete(Int $idMedia){
            try{
                //connect to the bdd
                $db= Connection::connect(); 

                $stmt=$db->prepare("DELETE FROM medias WHERE id=:id"); 
                $stmt->bindParam(':id', $idMedia);
                $rs=$stmt->execute();

                return $rs;
            }catch(PDOException $e){
                throw new DAOException($e->getMessage(), $e->getCode());
            }
        }

        //search media by artwork
        public function searchBy(Int $idAw){
            try{
                //connect to the bdd
                $db= Connection::connect(); 

                $stmt=$db->prepare("SELECT * FROM medias WHERE id_artwork=:id");
                $stmt->bindParam(':id', $idAw);
                $stmt->execute();
                //store the result into data, returns an array indexed by column name 
                $data = $stmt->fetch(PDO::FETCH_ASSOC);
                
                //free the memory
                $stmt->closeCursor();
                
                return $data;

            }catch(PDOException $e){
                throw new DAOException($e->getMessage(), $e->getCode());
            }
        }

        
    }
?>