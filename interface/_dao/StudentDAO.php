<?php
    require_once(__DIR__.'/../exception/DAOException.php');
    require_once(__DIR__.'/Connection.php');
    require_once(__DIR__.'/../_class/Student.php');

    class StudentDAO extends Connection {

        //add new student
        public function create(Object $student){
             
             $id_user = $student->getIdUser();
            $nickname = $student->getNickname();
            $bio = $student->getBioEn();
            $facebook = $student->getFacebook();
            $twitter = $student->getTwitter();
            $website = $student->getWebsite();

            try{
                //connect to the bdd
                $db= Connection::connect();                 
                //insert request
                $stmt = $db->prepare("INSERT INTO student VALUES (NULL, :id_user, :nickname, :bio, :facebook, :twitter, :website)");
                //binding params
                $stmt->bindParam(':id_user', $id_user); 
                $stmt->bindParam(':nickname', $nickname); 
                $stmt->bindParam(':bio', $bio);
                $stmt->bindParam(':facebook', $facebook); 
                $stmt->bindParam(':twitter', $twitter); 
                $stmt->bindParam(':website', $website);

                //status of the request (success or failure)
                $response['status']     = $stmt->execute();
                //the id of the last database entrance
                $response['last_id']    = $db->lastInsertId();
                
                return $response;

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

                //Closes the cursor, enabling the statement to be executed again 
                $stmt->closeCursor();

                if($data!=null){
                    $i=0;
                    foreach($data as $student){
                        $student_obj = new Artwork();
                        $student_obj ->setId($student['id'])->setTitle($student['title'])->setSubtitle($student['subtitle'])
                                    ->setType($student['type'])->setDuration($student['duration'])
                                    ->setBio($student['bio'])->setSynopsisLong($student['synopsis_long'])->setThanks($student['thanks'])
                                    ->setCreatedAt($student['created_at'])->setIdStudent($student['id_student'])->setSeen($student['seen']) ;
                        $student_tab[$i]= $student_obj;
                        $i++;
                    }
                }elseif($data==null){
                    $student_tab[]=null;
                }
                //return an array of student obj or an empty tab if no student recorded yet
                return $student_tab;

            }catch(PDOException $e){
                throw new DAOException($e->getMessage(), $e->getCode());
            }
        }

        //search all informations by student id
        public function searchBy(Int $idStudent){
            try{
                //connect to the bdd
                $db= Connection::connect();
                //store into a var all the requested columns 
                $collected_info =   'student.id, student.id_user, student.nickname, student.bio 
                                    student.facebook, student.twitter, student.website, user.first_name, user.last_name, 
                                    user.email, artwork.id"id_artwork", artwork.title, artwork.subtitle, artwork.type, artwork.duration, 
                                    artwork.bio, artwork.synopsis_long, artwork.thanks, artwork.seen';

                $stmt=$db->prepare("SELECT $collected_info FROM (student INNER JOIN user ON student.id_user = user.id) 
                INNER JOIN artwork on student.id= artwork.id_student 
                WHERE student.id=$idStudent");
                $stmt->execute();
                //store the result into data, returns an array indexed by column name 
                $data = $stmt->fetch(PDO::FETCH_ASSOC);
                //free the memory
                $stmt->closeCursor();
                
                //return an array with all student infos and its artwork information
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
                
                if($data!=null){
                    //transform $data into a student obj
                    $student = new Student();
                    $student->getId($data['id'])->getIdUser($data['id_user'])->getNickname($data['nickname'])
                            ->getBio($data['bio'])->getFacebook($data['facebook'])
                            ->getTwitter($data['twitter'])->getWebsite($data['website']);
                }else{
                    $student=null;
                }
                //return student obj 
                return $student;

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

                //return the id of one student according to its artwork 
                return $data;

            }catch(PDOException $e){
                throw new DAOException($e->getMessage(), $e->getCode());
            }
        }

        // public function update(Object $objet, int $idOdbjectToModify){

        // }

        

        
    }
?>