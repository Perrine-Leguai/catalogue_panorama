<?php
    require_once(__DIR__.'/../_class/Student.php');
    require_once(__DIR__.'/../_dao/StudentDAO.php');
    require_once(__DIR__.'/../exception/ServiceException.php');

    class StudentService {
        
        //add new student
        public static function create(Object $student){

            try{

                $dao = new StudentDAO();
                //catch create result, if well or bad done
                return  $dao->create($student);

            }catch(DAOException $serviceException){
                throw new ServiceException($serviceException->getMessage(), $serviceException->getCode());
            }
        }

        //search all student 
        public function searchAll(){
            try{

                $dao = new StudentDAO();
                //catch a tab of all students in the database
                return $dao->searchAll();
                
            }catch(DAOException $serviceException){
                throw new ServiceException($serviceException->getMessage(), $serviceException->getCode());
            }
        }

        //search one student
        public function searchBy(Int $idStudent){
            try{
                $dao = new StudentDAO();
                //catch a tab of one row, i.e the student looked for
                return $dao->searchBy($idStudent);

            }catch(DAOException $serviceException){
                throw new ServiceException($serviceException->getMessage(), $serviceException->getCode());
            }
        }

        // public function update(Object $objet, int $idOdbjectToModify){

        // }

        

        
    }
?>