<?php

    require_once('../_service/UserService.php');
    require_once('../_service/StudentService.php');
    require_once('../_service/ArtworkService.php');
    require_once('../_service/UpdateService.php');
    require_once('../presentation/communHtml.php');
    require_once('../presentation/studentView.php');
    require_once('../_class/Artwork.php');
    require_once('../_class/Update.php');

    //var used for displaying
    $edit = false;

    ////////////////////////////////////////FAKE INITIALISATION////////////////////
    $_SESSION['idStudent']  = 1;
    $session_artwork_obj = ArtworkService::searchBy($_SESSION['idStudent']);
    $list_of_updates    = UpdateService::searchByAwId($session_artwork_obj->getId());
    
    //display the global html
    html('Etudiant.e.s');

    //form for creation and update
    formCreateArtwork($session_artwork_obj);

    //list of updates doen by the student
    updatesList($list_of_updates);
    
    //display the scripts
    scripts('countdown');

    

    //check if there is any information on the url
    if(isset($_GET) && !empty($_GET)){

        
        if( isset($_GET['action']) && !empty($_GET['action']) && isset($_POST)   &&  !empty($_POST)){
                //Convert all applicable characters to HTML entities
                $title          = htmlentities($_POST['title']);
                $subtitle       = htmlentities($_POST['subtitle']);
                $type           = htmlentities($_POST['type']);
                $duration       = htmlentities($_POST['duration']);
                $short_fr_syn   = htmlentities($_POST['short_synopsis_FR']);
                $short_en_syn   = htmlentities($_POST['short_synopsis_EN']);
                $long_fr_syn    = htmlentities($_POST['long_synopsis_FR']);
                $long_en_syn    = htmlentities($_POST['long_synopsis_EN']);
            
                //if it's a creation
            if($_GET['action']=="create"){
                
                //set automatically the current date and seen = false
                date_default_timezone_set("Europe/Paris");
                $created_date   = date("Y-m-d");
                $seen = 0;
                
                //catch idStudent
                $id_student     = $_SESSION['idStudent'];

                //create an object Artwork
                $aw = new Artwork();
                $aw ->setTitle($title)->setSubtitle($subtitle)->setType($type)->setDuration($duration)
                    ->setSynopsisShortFr($short_fr_syn)->setSynopsisLongFr($long_fr_syn)
                    ->setSynopsisShortEn($short_en_syn)->setSynopsisLongEn($long_en_syn)
                    ->setCreatedAt($created_date)->setIdStudent($id_student)->setSeen($seen);
                
                try{
                    //send the request throw several layer. 
                    //can catch a success if operation happened well - to display a success alert 1=success 0=fail
                   $success=ArtworkService::create($aw);
                   echo $success;

                }catch(ServiceException $serviceException){
                    echo $ServiceException->getCode();
                }
            }
            
            
            //if it's an update
            elseif($_GET['action']=="edit"){
                //keep only the comparable values (not id, created_at, id_student and seen)
                $old_content_array = array_slice((array) $session_artwork_obj, 1, 8);
                $new_content_array = [$title, $subtitle, $type, $duration, $short_fr_syn, $long_fr_syn, $short_en_syn, $long_en_syn];
                
                try{
                    
                    //create updates obj
                    $i=0;
                    foreach($old_content_array as $value){
                        
                        if($value != $new_content_array[$i]){
                            $input_name = preg_replace('/artwork/i', "", array_search($value, $old_content_array));
                            $old_content    =   $value;
                            $new_content    = $new_content_array[$i];
                            $updated_at     = date("Y-m-d");
                            $id_artwork     = $session_artwork_obj->getId();

                            $update = new Update();
                            $update ->setUpdatedDate($updated_at)->setInputName($input_name)->setOldContent($old_content)
                                    ->setNewContent($new_content)->setIdArtwork($id_artwork)->setIsSeen(0);

                            $update_is_ok = UpdateService::create($update);
                        }
                        $i++;
                    }

                    //update the current artwork
                    $updated_artwork = new Artwork();
                    $updated_artwork    ->setTitle($title)->setSubtitle($subtitle)->setType($type)->setDuration($duration)
                                        ->setSynopsisShortFr($short_fr_syn)->setSynopsisLongFr($long_fr_syn)
                                        ->setSynopsisShortEn($short_en_syn)->setSynopsisLongEn($long_en_syn)
                                        ->setSeen(0);
                    $success=ArtworkService::update($updated_artwork, $session_artwork_obj->getId());

                }catch(ServiceException $serviceException){
                    echo $ServiceException->getCode();
                }
                
            }
                
        }

        
    }
?>