<?php
    require_once(__DIR__.'/../_class/Staff.php');
    require_once(__DIR__.'/../_dao/StaffDAO.php');
    require_once(__DIR__.'/../exception/ServiceException.php');

    class StaffService {
        
        //add new staff
        public static function create(int $idUser){

            try{

                $dao = new StaffDAO();
                //catch create result, if well or bad done
                return  $dao->create($idUser);

            }catch(DAOException $serviceException){
                throw new ServiceException($serviceException->getMessage(), $serviceException->getCode());
            }
        }
    }
?>