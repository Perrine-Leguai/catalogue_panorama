<?php
    require_once(__DIR__.'/../exception/DAOException.php');
    require_once(__DIR__.'/Connection.php');
    
    class UserDAO extends Connection {

        //add new user
        public function create(Object $user){
             
            $kart_url   = $user->getKartUrl();
            $first_name = $user->getFirstName();
            $last_name  = $user->getLastName();
            $email      = $user->getEmail();
            $profil     = $user->getProfil();
            

            try{
                //connect to the bdd
                $db= Connection::connect();                 
                //insert request
                $stmt = $db->prepare("INSERT INTO user VALUES (NULL, :kart_url, :first_name, :last_name, :email, :profil)");
                //binding params
                $stmt->bindParam(':kart_url', $kart_url ); 
                $stmt->bindParam(':first_name', $first_name ); 
                $stmt->bindParam(':last_name', $last_name ); 
                $stmt->bindParam(':email', $email ); 
                $stmt->bindParam(':profil', $profil );

                $rs = $stmt->execute();
                //return rs to display success message after adding
                return $rs;
            }catch(PDOException $e){
                throw new DAOException($e->getMessage(), $e->getCode());
            }
        }

        //search all users
        public function searchAll(){
            try{
                //connect to the bdd
                $db= Connection::connect();

                $stmt=$db->prepare("SELECT * from user");
                $stmt->execute();
                $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

                return $data;

            }catch(PDOException $e){
                throw new DAOException($e->getMessage(), $e->getCode());
            }
        }

        //search all users that are students
        public function searchAllStudents(){
            try{
                //connect to the bdd
                $db= Connection::connect();

                $stmt=$db->prepare("SELECT * from user inner join student on user.id = student.id_user ORDER BY user.first_name ASC");
                $stmt->execute();
                $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

                return $data;

            }catch(PDOException $e){
                throw new DAOException($e->getMessage(), $e->getCode());
            }
        }

        //search by user
        public function searchBy(Int $idUser){
            try{
                //connect to the bdd
                $db= Connection::connect(); 

                $stmt=$db->prepare("SELECT * FROM user WHERE id=:idUser");
                $stmt->bindParam(':idUser', $idUser);
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
        public function searchByEmail(String $email){
            try{
                //connect to the bdd
                $db= Connection::connect(); 

                $stmt=$db->prepare("SELECT * FROM user WHERE email=:email");
                $stmt->bindParam(':email', $email);
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