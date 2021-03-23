<?php
    require_once(__DIR__.'/../exception/DAOException.php');
    require_once(__DIR__.'/../_class/Update.php');
    require_once(__DIR__.'/Connection.php');
    
    class UpdateDAO extends Connection {
        
        //add new update
        public function create(Object $update){
             
            $updated_date   = $update->getUpdatedDate();
            $input_name     = $update->getInputName();
            $old_content    = $update->getOldContent();
            $new_content    = $update->getNewContent();
            $id_artwork     = $update->getIdArtwork();
            $is_seen        = $update->getIsSeen();

            try{
                //connect to the bdd
                $db= Connection::connect();

                //insert request
                $stmt = $db->prepare("INSERT INTO `updates` VALUES (NULL, :updated_date, :input_name, :old_content, :new_content, :id_artwork, :is_seen)");

                //binding params
                $stmt->bindParam(':updated_date', $updated_date); 
                $stmt->bindParam(':input_name', $input_name); 
                $stmt->bindParam(':old_content', $old_content); 
                $stmt->bindParam(':new_content', $new_content); 
                $stmt->bindParam(':id_artwork', $id_artwork); 
                $stmt->bindParam(':is_seen', $is_seen);

                $rs = $stmt->execute();
                //return rs to display success message after adding
                return $rs;

            }catch(PDOException $e){
                throw new DAOException($e->getMessage(), $e->getCode());
            }
        }

        //search updates by artwork
        public function searchByArtworkId(Int $idArtwork){
            try{
                //connect to the bdd
                $db= Connection::connect(); 

                $stmt=$db->prepare("SELECT * FROM updates WHERE id_artwork=:idArtwork");
                $stmt->bindParam(':idArtwork', $idArtwork);
                $stmt->execute();

                //store the result into data, returns an array indexed by column name 
                $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

                //free the memory
                $stmt->closeCursor();

                //transform $data into a tab of obj Update
                $i=0;
                foreach($data as $update){
                    $update_obj = new Update();
                    $update_obj ->setId($update['id'])->setUpdatedDate($update['updated_date'])->setInputName($update['input_name'])
                                ->setOldContent($update['old_content'])->setNewContent($update['new_content'])
                                ->setIdArtwork($update['id_artwork'])->setIsSeen($update['seen']) ;
                    $update_tab[$i]= $update_obj;
                    $i++;
                }

                if(!isset($update_tab)){
                    $update_tab=[];
                }
                
                return $update_tab;

            }catch(PDOException $e){
                throw new DAOException($e->getMessage(), $e->getCode());
            }
        }

        //search by seen (boolean) = false order from older to recenter
        public function researchByNotSeen(){
            try{
                //connect to the bdd
                $db= Connection::connect(); 

                //find all the updates not seen yet 
                $stmt=$db->prepare("SELECT * FROM updates WHERE seen='false' ORDER BY `updates`.`updated_date` ASC");
                $stmt->execute();
                //store the result into data, returns an array indexed by column name 
                $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $stmt->closeCursor();
                //transform $data into a tab of obj Update
                if(!empty($data)){
                    $i=0;
                    foreach($data as $update){
                        $update_obj = new Update();
                        $update_obj ->setId($update['id'])->setUpdatedDate($update['updated_date'])->setInputName($update['input_name'])
                                    ->setOldContent($update['old_content'])->setNewContent($update['new_content'])
                                    ->setIdArtwork($update['id_artwork'])->setIsSeen($update['seen']) ;
                        $update_tab[$i]= $update_obj;
                        $i++;
                    }  
                }elseif(empty($data)){
                    $update_tab=[];
                }
                

                return $update_tab;

            }catch(PDOException $e){
                throw new DAOException($e->getMessage(), $e->getCode());
            }
        }

        //update from not seen status to seen
        public function isSeen(int $updateId){
           
            try{
                //connect to the bdd
                $db= Connection::connect(); 

                //update the seen column
                $stmt=$db->prepare("UPDATE updates SET seen='1' WHERE id=$updateId");
                $stmt->execute();

            }catch(PDOException $e){
                throw new DAOException($e->getMessage(), $e->getCode());
            }
        }

    }
?>
