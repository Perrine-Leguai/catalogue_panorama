<?php
    require_once(__DIR__.'/../_class/Update.php');
    require_once(__DIR__.'/../_dao/UpdateDAO.php');
    require_once(__DIR__.'/../exception/ServiceException.php');

    class UpdateService {
        
        //add new update
        public static function create(Object $update){

            try{

                $dao = new UpdateDAO();
                //catch create result, if well or bad done
                return  $dao->create($update);

            }catch(DAOException $serviceException){
                throw new ServiceException($serviceException->getMessage(), $serviceException->getCode());
            }
        }

        //search update by artwork
        public static function searchByAwId(Int $idUpdate){
            try{
                $dao = new UpdateDAO();
                //catch a tab of one row, i.e the student looked for
                return $dao->searchByArtworkId($idUpdate);

            }catch(DAOException $serviceException){
                throw new ServiceException($serviceException->getMessage(), $serviceException->getCode());
            }
        }

        //search update by seen 
        public static function searchByNotSeen(){
            try{
                $dao = new UpdateDAO();
                //catch a tab of all the not seen update, where seen = false
                return $dao->researchByNotSeen();

            }catch(DAOException $serviceException){
                throw new ServiceException($serviceException->getMessage(), $serviceException->getCode());
            }
        }

        //change status seen from false to true
        public static function update(int $updateId){
            
            try{
                $dao = new UpdateDAO();
                return $dao->isSeen($updateId);

            }catch(DAOException $serviceException){
                throw new ServiceException($serviceException->getMessage(), $serviceException->getCode());
            }
        }
        
    }
?>