<?php
    require_once(__DIR__.'/../_class/Student.php');
    require_once(__DIR__.'/../_dao/StudentDAO.php');
    require_once(__DIR__.'/../exception/ServiceException.php');

    class StudentService {
        
        //add new student
        public static function create(Object $student){

            try{

                $dao = new StudentDAO();
                //array of the request status + the id of student last entrance into the database
                return  $dao->create($student);

            }catch(DAOException $serviceException){
                throw new ServiceException($serviceException->getMessage(), $serviceException->getCode());
            }
        }

        //search all students 
        public function searchAll(){
            try{

                $dao = new StudentDAO();
                //array of all students in the database
                return $dao->searchAll();
                
            }catch(DAOException $serviceException){
                throw new ServiceException($serviceException->getMessage(), $serviceException->getCode());
            }
        }

        //search one student by its id
        public static function searchBy(Int $idStudent){
            try{
                $dao = new StudentDAO();
                //catch a tab of one row, i.e the student looked for
                return $dao->searchBy($idStudent);

            }catch(DAOException $serviceException){
                throw new ServiceException($serviceException->getMessage(), $serviceException->getCode());
            }
        }

        //search one student by id user
        public function searchByUser(Int $idUser){
            try{
                $dao = new StudentDAO();
                //catch a tab of one row, i.e the student looked for
                return $dao->searchByUser($idUser);

            }catch(DAOException $serviceException){
                throw new ServiceException($serviceException->getMessage(), $serviceException->getCode());
            }
        }

        //search one student by its artwork id
        public static function searchByArtwork($idArtwork){
            try{
                $dao = new StudentDAO();
                //catch a tab of one row, i.e the student looked for
                return $dao->searchByArtwork($idArtwork);

            }catch(DAOException $serviceException){
                throw new ServiceException($serviceException->getMessage(), $serviceException->getCode());
            }
        }


        // public function update(Object $objet, int $idOdbjectToModify){

        // }

        

        
    }
?>