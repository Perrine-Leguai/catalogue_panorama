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
        public function searchBy(Int $idArtwork){
            try{
                $dao = new mediaDAO();
                //catch a tab of one row, i.e the student looked for
                return $dao->searchBy($idArtwork);

            }catch(DAOException $serviceException){
                throw new ServiceException($serviceException->getMessage(), $serviceException->getCode());
            }
        }
        
    }
?>