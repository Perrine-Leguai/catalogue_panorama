<?php
    require_once(__DIR__.'/../_class/Artwork.php');
    require_once(__DIR__.'/../_dao/ArtworkDAO.php');
    require_once(__DIR__.'/../exception/ServiceException.php');

    class ArtworkService {
        
        //add new artwork
        public static function create(Object $artwork){

            try{
                $dao = new ArtworkDAO();
                //catch a response tab , containing the status of the request and the last id entrance
                return  $dao->create($artwork);

            }catch(DAOException $serviceException){
                throw new ServiceException($serviceException->getMessage(), $serviceException->getCode());
            }
        }

        //serach all artwork 
        public static function searchAll(){
            try{

                $dao = new ArtworkDAO();
                //catch a tab of all artworks as objects in the database
                return $dao->searchAll();
                
            }catch(DAOException $serviceException){
                throw new ServiceException($serviceException->getMessage(), $serviceException->getCode());
            }
        }

        //search artwork by student
        public static function searchBy(Int $idStudent){
            try{
                $dao = new ArtworkDAO();
                //catch a tab of one row, i.e the student looked for
                return $dao->searchByStudentId($idStudent);

            }catch(DAOException $serviceException){
                throw new ServiceException($serviceException->getMessage(), $serviceException->getCode());
            }
        }

        //search by seen 
        public static function searchByNotSeen(){
            
            try{
                $dao = new ArtworkDAO();
                //catch a tab of all the not seen artwork, where seen = false
                return $dao->researchByNotSeen();

            }catch(DAOException $serviceException){
                throw new ServiceException($serviceException->getMessage(), $serviceException->getCode());
            }
        }

        //update an artwork identified by its id
        public static function update(Object $objet, int $id_object_to_modify){
            try{
                $dao = new ArtworkDAO();
                //return if the request has been successfull or a failure
                return $dao->update($objet, $id_object_to_modify);

            }catch(DAOException $serviceException){
                throw new ServiceException($serviceException->getMessage(), $serviceException->getCode());
            }
        }

        //change status seen from false to true
        public static function updateSeenStatus(int $artworkId){
            
            try{
                
                $dao = new ArtworkDAO();
                //return if the request has been successfull or a failure
                return $dao->isSeen($artworkId);

            }catch(DAOException $serviceException){
                throw new ServiceException($serviceException->getMessage(), $serviceException->getCode());
            }
        }

        
    }
?>