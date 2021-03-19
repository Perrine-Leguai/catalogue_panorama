<?php
    require_once(__DIR__.'/../_class/User.php');
    require_once(__DIR__.'/../_dao/UserDAO.php');
    require_once(__DIR__.'/../exception/ServiceException.php');

    class UserService {
        
        //add new user
        public static function create(Object $user){

            try{

                $dao = new UserDAO();
                //catch create result, if well or bad done
                return  $dao->create($user);

            }catch(DAOException $serviceException){
                throw new ServiceException($serviceException->getMessage(), $serviceException->getCode());
            }
        }

        //serach all users 
        public function searchAll(){
            try{

                $dao = new UserDAO();
                //catch a tab of all users in the database
                return $dao->searchAll();
                
            }catch(DAOException $serviceException){
                throw new ServiceException($serviceException->getMessage(), $serviceException->getCode());
            }
        }

        //search user by id
        public function searchBy(Int $idUser){
            try{
                $dao = new UserDAO();
                //catch a tab of one row, i.e the student looked for
                return $dao->searchBy($idUser);

            }catch(DAOException $serviceException){
                throw new ServiceException($serviceException->getMessage(), $serviceException->getCode());
            }
        }

        //search user by email
        public function searchByEmail(String $email){
            try{
                $dao = new UserDAO();
                //catch a tab of one row, i.e the user looked for
                return $dao->searchByEmail($email);

            }catch(DAOException $serviceException){
                throw new ServiceException($serviceException->getMessage(), $serviceException->getCode());
            }
        }
    }
?>