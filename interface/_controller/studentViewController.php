<?php
    require_once(__DIR__.'/filesCheck.php');

    require_once(__DIR__.'/../_class/Media.php');
    require_once(__DIR__.'/../_class/Artwork.php');
    require_once(__DIR__.'/../_class/Update.php');

    require_once(__DIR__.'/../_service/UserService.php');
    require_once(__DIR__.'/../_service/MediaService.php');
    require_once(__DIR__.'/../_service/StudentService.php');
    require_once(__DIR__.'/../_service/ArtworkService.php');
    require_once(__DIR__.'/../_service/UpdateService.php');

    require_once(__DIR__.'/../presentation/communHtml.php');
    require_once(__DIR__.'/../presentation/studentView.php');
    

    session_start();
    //redirection if not connected or don't have access
    if (!$_SESSION) {
        header('location: ../_controller/connectionViewController.php?logout');
    }
    elseif($_SESSION['profil']!="is_student"){
        header('location: ../_controller/connectionViewController.php?logout');
    }

    $session_artwork_obj = ArtworkService::searchBy($_SESSION['idStudent']);
    if($session_artwork_obj!=null){
        $list_of_updates    = UpdateService::searchByAwId($session_artwork_obj->getId());
    }
    
    //display the global html
    html('Catalogue Panorama - Artiste', null, null, null);

    //form for creation and update
    formCreateArtwork($session_artwork_obj);

    //list of updates done by the student
    if(isset($list_of_updates) && !empty($list_of_updates)){
       updatesList($list_of_updates); 
    }
    
    
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
                $short_syn      = htmlentities($_POST['synopsis_short']);
                $long_syn       = htmlentities($_POST['synopsis_long']);
                $thanks         = htmlentities($_POST['thanks']);


                if(isset($_FILES) && !empty($_FILES)){
                    //stock the picture on the server and return an url to store in the database
                    $img    = checkFiles($_FILES, $_SESSION['full_name']); 
                }
                
                

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
                    ->setSynopsisShort($short_syn)->setSynopsisLong($long_syn)
                    ->setThanks($thanks)
                    ->setCreatedAt($created_date)->setIdStudent($id_student)->setSeen($seen);

                

                
                try{
                    //send the request throw several layer. 
                    //catch the id of the created artwork
                    $id_success=ArtworkService::create($aw);

                    if($id_success){
                        //send to the pre load artwork form
                        header('location: ../_controller/studentViewController'); 
                    }

                    //create media related to this artwork
                    $media  = new Media();
                    $media  ->setIdArtwork($id_success)->setTitle($title)->setDescription("teaser media")
                            ->setMedia($img);

                    MediaService::create($media);
                   

                }catch(ServiceException $serviceException){
                    echo $ServiceException->getCode();
                }
            }
            
            
            //if it's an update
            elseif($_GET['action']=="edit"){
                //keep only the comparable values (not id, created_at, id_student and seen)
                $old_content_array = array_slice((array) $session_artwork_obj, 1, 7);
                
                $new_content_array = [$title, $subtitle, $type, $duration, $short_syn, $long_syn, $thanks];
                
                try{
                    //create updates obj
                    $i=0;
                    foreach($old_content_array as $value){
                        
                        //compare index by index
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
                                        ->setSynopsisShort($short_syn)->setSynopsisLong($long_syn)
                                        ->setThanks($thanks)->setSeen(0);
                   
                    $success=ArtworkService::update($updated_artwork, $session_artwork_obj->getId());

                    
                    //send to the pre load artwork form
                   
                    

                }catch(ServiceException $serviceException){
                    echo $ServiceException->getCode();
                }  
            }      
        }
    }
?>