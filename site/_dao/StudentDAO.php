<?php
    require_once(__DIR__.'/../exception/DAOException.php');
    require_once(__DIR__.'/Connection.php');
    require_once(__DIR__.'/../interface/InterfaceDao.php');

    class StudentDAO extends Connection implements InterfaceDao{

        //add new artwork
        public function create(Object $student){
             
             $id_user = $student->getIdUser();
            $nickname = $student->getNickname();
            $bio_short_fr = $student->getBioShortFr();
            $bio_fr = $student->getBioFr();
            $bio_short_en = $student->getBioShortEn();
            $bio_en = $student->getBioEn();
            $facebook = $student->getFacebook();
            $twitter = $student->getTwitter();
            $website = $student->getWebsite();

            try{
                //connect to the bdd
                $db= Connection::connect();                 
                //insert request
                $stmt = $db->prepare("INSERT INTO `student` VALUES (NULL, :id_user, :nickname, :bio_short_fr, :bio_fr, :bio_short_en, :bio_en, :facebook, :twitter, :website)");
                //binding params
                $stmt->bindParam(':id_user', $id_user); 
                $stmt->bindParam(':nickname', $nickname); 
                $stmt->bindParam(':bio_short_fr', $bio_short_fr); 
                $stmt->bindParam(':bio_fr', $bio_fr); 
                $stmt->bindParam(':bio_short_en', $bio_short_en); 
                $stmt->bindParam(':bio_en', $bio_en); 
                $stmt->bindParam(':facebook', $facebook); 
                $stmt->bindParam(':twitter', $twitter); 
                $stmt->bindParam(':website', $website);

                $rs = $stmt->execute();
                //return rs to display success message after adding
                return $rs;
            }catch(PDOException $e){
                throw new DAOException($e->getMessage(), $e->getCode());
            }
        }

        //search all students
        public function searchAll(){
            try{

                $stmt=$this->db->prepare("SELECT * from student");
                $stmt->execute();
                $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

                return $data;

            }catch(PDOException $e){
                throw new DAOException($e->getMessage(), $e->getCode());
            }
        }

        //search by student
        public function searchBy(Int $idStudent){
            try{
                //connect to the bdd
                $db= Connection::connect(); 

                $stmt=$db->prepare("SELECT * FROM student WHERE id=:idStudent");
                $stmt->bindParam(':idStudent', $idStudent);
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

        // public function update(Object $objet, int $idOdbjectToModify){

        // }

        

        
    }
?>