<?php
    require_once(__DIR__.'/../exception/DAOException.php');
    require_once(__DIR__.'/Connection.php');
    require_once(__DIR__.'/../interface/InterfaceDao.php');
    require_once(__DIR__.'/../_class/Artwork.php');

    class ArtworkDAO extends Connection implements InterfaceDao{
        

        //add new artwork
        public function create(Object $artwork){
             
            $title             = $artwork->getTitle();
            $subtitle          = $artwork->getSubtitle() ;
            $type              = $artwork->getType() ;
            $duration          = $artwork->getDuration() ;
            $synopsis_short_fr = $artwork->getSynopsisShortFr();
            $synopsis_long_fr  = $artwork->getSynopsisLongFr();
            $synopsis_short_en = $artwork->getSynopsisShortEn() ;
            $synopsis_long_en  = $artwork->getSynopsisShortEn();
            $created_at        = $artwork->getCreatedAt();
            $id_student        = $artwork->getIdStudent();
            $seen              = $artwork->getSeen() ;

            try{
                //connect to the bdd
                $db= Connection::connect();                 
                //insert request
                $stmt = $db->prepare("INSERT INTO `artwork` VALUES (NULL, :title, :subtitle, :type, :duration, :synoSFr, :synoLFr, :synoSEn, :synoLEn, :create, :idStudent, :seen)");
                //binding params
                $stmt->bindParam(':title', $title ); 
                $stmt->bindParam(':subtitle', $subtitle); 
                $stmt->bindParam(':type', $type); 
                $stmt->bindParam(':duration', $duration); 
                $stmt->bindParam(':synoSFr', $synopsis_short_fr); 
                $stmt->bindParam(':synoLFr', $synopsis_long_fr ); 
                $stmt->bindParam(':synoSEn', $synopsis_short_en ); 
                $stmt->bindParam(':synoLEn', $synopsis_long_en ); 
                $stmt->bindParam(':create', $created_at ); 
                $stmt->bindParam(':idStudent', $id_student ); 
                $stmt->bindParam(':seen', $seen);

                $rs = $stmt->execute();
                //return rs to display success message after adding
                return $rs;
            }catch(PDOException $e){
                throw new DAOException($e->getMessage(), $e->getCode());
            }
        }

        //search all artwork 
        public function searchAll(){
            try{

                $stmt=$this->db->prepare("SELECT * from artwork");
                $stmt->execute();
                $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

                return $data;
                
            }catch(PDOException $e){
                throw new DAOException($e->getMessage(), $e->getCode());
            }
        }

        //search artwork by student
        public function searchByStudentId(Int $idStudent){
            try{
                //connect to the bdd
                $db= Connection::connect(); 

                $stmt=$db->prepare("SELECT * FROM artwork WHERE id_student=:idStudent");
                $stmt->bindParam(':idStudent', $idStudent);
                $stmt->execute();
                //store the result into data, returns an array indexed by column name 
                $data = $stmt->fetch(PDO::FETCH_ASSOC);
                
                //free the memory
                $stmt->closeCursor();
                
                //stock info into Artwork object
                $artwork = new Artwork();
                $artwork->setId($data['id'])->setTitle($data['title'])->setSubtitle($data['subtitle'])
                        ->setType($data['type'])->setDuration($data['duration'])
                        ->setSynopsisShortFr($data['synopsis_short_fr'])->setSynopsisLongFr($data['synopsis_long_fr'])
                        ->setSynopsisShortEn($data['synopsis_short_en'])->setSynopsisLongEn($data['synopsis_long_en'])
                        ->setCreatedAt($data['created_at'])->setIdStudent($data['id_student'])->setSeen($data['seen']);
                
                return $artwork;

            }catch(PDOException $e){
                throw new DAOException($e->getMessage(), $e->getCode());
            }
        }

        //search by seen (boolean) = false
        public function researchByNotSeen(){
            try{
                //connect to the bdd
                $db= Connection::connect(); 

                //find all the artwork where seen = false 
                $stmt=$db->prepare("SELECT * FROM artwork WHERE seen=:is_seen");
                $stmt->bindParam(':is_seen', 0);
                //store the result into data, returns an array indexed by column name 
                $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

                $stmt->closeCursor();

                return $data;

            }catch(PDOException $e){
                throw new DAOException($e->getMessage(), $e->getCode());
            }
        }

        public function update(Object $artwork, int $id_object_to_modify){
            $title             = $artwork->getTitle();
            $subtitle          = $artwork->getSubtitle() ;
            $type              = $artwork->getType() ;
            $duration          = $artwork->getDuration() ;
            $synopsis_short_fr = $artwork->getSynopsisShortFr();
            $synopsis_long_fr  = $artwork->getSynopsisLongFr();
            $synopsis_short_en = $artwork->getSynopsisShortEn() ;
            $synopsis_long_en  = $artwork->getSynopsisLongEn();
            print_r($artwork);
            echo "<br> id:".$id_object_to_modify;
            try{
                //connect to the bdd
                $db= Connection::connect();                 
                //insert request
                $stmt = $db->prepare("UPDATE `artwork`  SET `title`= :title, `subtitle`= :subtitle, `type`= :type, 
                                                            `duration`= :duration, `synopsis_short_fr`=:synoSFr, `synopsis_long_fr`=:synoLFr, 
                                                            `synopsis_short_en`=:synoSEn, `synopsis_long_en`=:synoLEn
                                                        WHERE `id`=:id");
                //binding params
                $stmt->bindParam(':title', $title ); 
                $stmt->bindParam(':subtitle', $subtitle); 
                $stmt->bindParam(':type', $type); 
                $stmt->bindParam(':duration', $duration); 
                $stmt->bindParam(':synoSFr', $synopsis_short_fr); 
                $stmt->bindParam(':synoLFr', $synopsis_long_fr ); 
                $stmt->bindParam(':synoSEn', $synopsis_short_en ); 
                $stmt->bindParam(':synoLEn', $synopsis_long_en ); 
                $stmt->bindParam(':id', $id_object_to_modify ); 
                

                $rs = $stmt->execute();
                echo $rs;
                //return rs to display success message after adding
                return $rs;
            }catch(PDOException $e){
                throw new DAOException($e->getMessage(), $e->getCode());
            }
        }

        

        
    }
?>