<?php
    require_once(__DIR__.'/../_class/Media.php');
    require_once(__DIR__.'/../_dao/MediaDAO.php');
    require_once(__DIR__.'/../exception/ServiceException.php');

    class MediaService {
        
        //add new media
        public static function create(Object $media){

            try{

                $dao = new MediaDAO();
                //catch create result, if well or bad done
                return  $dao->create($media);

            }catch(DAOException $serviceException){
                throw new ServiceException($serviceException->getMessage(), $serviceException->getCode());
            }
        }

        //search media by artwork
        public static function searchBy(Int $idArtwork){
            try{
                $dao = new mediaDAO();
                //catch a tab of one row, i.e the student looked for
                return $dao->searchBy($idArtwork);

            }catch(DAOException $serviceException){
                throw new ServiceException($serviceException->getMessage(), $serviceException->getCode());
            }
        }

        //delete media according its id
        public static function delete(Int $idMedia){
            echo "madame est service ".$idMedia."<br>";
            try{
                $dao = new mediaDAO();
                //return an information regarding the request (success or failure)
                return $dao->delete($idMedia);

            }catch(DAOException $serviceException){
                throw new ServiceException($serviceException->getMessage(), $serviceException->getCode());
            }
        }
        
    }
?>