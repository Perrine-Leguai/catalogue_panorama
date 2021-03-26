<?php
    require_once(__DIR__.'/../_class/Media.php');
    require_once(__DIR__.'/../_dao/MediaDAO.php');
    require_once(__DIR__.'/../exception/ServiceException.php');

    class MediaService {
        
        //add new media
        public static function create(Object $media){

            try{

                $dao = new MediaDAO();
                //catch a response tab , containing the status of the request and the last id entrance
                return  $dao->create($media);

            }catch(DAOException $serviceException){
                throw new ServiceException($serviceException->getMessage(), $serviceException->getCode());
            }
        }

        //search media by artwork
        public static function searchBy(Int $idArtwork){
            try{
                $dao = new mediaDAO();
                //catch a tab of all media obj related to the Artwork identified by the id
                return $dao->searchBy($idArtwork);

            }catch(DAOException $serviceException){
                throw new ServiceException($serviceException->getMessage(), $serviceException->getCode());
            }
        }

        //delete media according its id
        public static function delete(Int $idMedia){
            
            try{
                $dao = new mediaDAO();
                //return if the request has been successfull or a failure
                return $dao->delete($idMedia);

            }catch(DAOException $serviceException){
                throw new ServiceException($serviceException->getMessage(), $serviceException->getCode());
            }
        }
        
    }
?>