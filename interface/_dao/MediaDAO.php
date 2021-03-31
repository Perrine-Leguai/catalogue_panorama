<?php
require_once(__DIR__.'/../exception/DAOException.php');
require_once(__DIR__.'/Connection.php');

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
                $stmt = $db->prepare("INSERT INTO medias VALUES (NULL, :idAw, :title, :description, :media)");
                //binding params
                $stmt->bindParam(':idAw', $id_artwork);
                $stmt->bindParam(':title', $title ); 
                $stmt->bindParam(':description', $description);
                $stmt->bindParam(':media', $media); 

                $rs = $stmt->execute();

                //status of the request (success or failure)
                $response['status']     = $stmt->execute();
                //the id of the last database entrance
                $response['last_id']    = $db->lastInsertId();                
                
                return $response;

            }catch(PDOException $e){
                throw new DAOException($e->getMessage(), $e->getCode());
            }
        }

        //delete a media
        public function delete(Int $idMedia){
            echo "etienne DAO".$idMedia."<br>";
            try{
                //connect to the bdd
                $db= Connection::connect(); 

                $stmt=$db->prepare("DELETE FROM medias WHERE id=$idMedia");
                $rs=$stmt->execute();

                return $rs;
            }catch(PDOException $e){
                throw new DAOException($e->getMessage(), $e->getCode());
            }
        }

        //search all the medias of one artwork
        public function searchBy(Int $idAw){
            try{
                //connect to the bdd
                $db= Connection::connect(); 

                $stmt=$db->prepare("SELECT * FROM medias WHERE id_artwork=$idAw");
                $stmt->execute();
                //store the result into data, returns an array indexed by column name 
                $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
                
                //free the memory
                $stmt->closeCursor();

                //transform $data into a tab of obj Medias
                $i=0;
                foreach($data as $media){
                    $media_obj = new Media();
                    $media_obj ->setId($media['id'])->setTitle($media['title'])->setDescription($media['description'])
                                ->setMedia($media['media']);
                    $media_tab[$i]= $media_obj;
                    $i++;
                }

                if(!isset($media_tab)){
                    $media_tab=[];
                }
                
                return $media_tab;
                

            }catch(PDOException $e){
                throw new DAOException($e->getMessage(), $e->getCode());
            }
        }

        
    }
?>