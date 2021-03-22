<?php 
    require_once(__DIR__.'/../_class/Artwork.php');
    require_once(__DIR__.'/../_class/Update.php');
    require_once(__DIR__.'/../_service/UpdateService.php');
    require_once(__DIR__.'/../_service/ArtworkService.php');
    require_once(__DIR__.'/../presentation/communHtml.php');
    require_once(__DIR__.'/../presentation/adminView.php');

    if( isset($_GET) && !empty($_GET)    &&
        isset($_GET['edit']) && !empty($_GET['edit'])){
            if($_GET['type']=="update"){
                UpdateService::update($_GET['edit']);
                $not_seen_updates = UpdateService::searchByNotSeen() ;
            }elseif($_GET['type']=="artwork"){
                ArtworkService::updateSeenStatus($_GET['edit']);
                $not_seen_artwork = ArtworkService::searchByNotSeen();
            }   
    }else{
        $not_seen_updates = UpdateService::searchByNotSeen() ;
        $not_seen_artwork = ArtworkService::searchByNotSeen();
        $array= array_merge($not_seen_artwork, $not_seen_updates);

        foreach($array as $block){
            echo "objet <br>";
            print_r($block);
        }
        
    }
    
    
    
    //display gloabl html
    html('Catalogue Panorama - admin');
    
    //display the list of updates not seen yet
    main_block($not_seen_updates, $not_seen_artwork);

    //display the scripts
    scripts('countdown');
?>