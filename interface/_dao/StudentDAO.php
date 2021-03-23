<?php
    require_once(__DIR__.'/../exception/DAOException.php');
    require_once(__DIR__.'/Connection.php');
    require_once(__DIR__.'/../interface/InterfaceDao.php');

    class StudentDAO extends Connection {

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
                echo$idStudent;
                //connect to the bdd
                $db= Connection::connect(); 
                $collected_info =   'student.id, student.id_user, student.nickname, student.bio_short_fr, student.bio_fr, 
                                    student.facebook, student.twitter, student.website, user.first_name, user.last_name, 
                                    user.email, artwork.id"id_artwork", artwork.title, artwork.subtitle, artwork.type, artwork.duration, 
                                    artwork.synopsis_short, artwork.synopsis_long, artwork.thanks, artwork.seen';

                $stmt=$db->prepare("SELECT $collected_info FROM (student INNER JOIN user ON student.id_user = user.id) 
                INNER JOIN artwork on student.id= artwork.id_student 
                WHERE student.id=$idStudent");
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


        //search by user
        public function searchByUser(Int $idUser){
            try{
                //connect to the bdd
                $db= Connection::connect(); 

                $stmt=$db->prepare("SELECT * FROM student WHERE id_user=$idUser");
                $stmt->execute();
                //store the result into data, returns an array indexed by column name 
                $data = $stmt->fetch(PDO::FETCH_ASSOC);
                
                //free the memory
                $stmt->closeCursor();
                print_r($data);
                return $data;

            }catch(PDOException $e){
                throw new DAOException($e->getMessage(), $e->getCode());
            }
        }

        //search by artwork
        public function searchByArtwork(int $idArtwork){
            try{
                //connect to the bdd
                $db= Connection::connect(); 

                $stmt=$db->prepare("SELECT id_student FROM artwork WHERE id=:id_artwork");
                $stmt->bindParam(':id_artwork', $idArtwork);
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