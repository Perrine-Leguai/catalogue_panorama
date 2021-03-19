<?php 
    require_once(__DIR__.'/../_class/Artwork.php');
    require_once(__DIR__.'/../_class/Update.php');
    require_once(__DIR__.'/../_service/UpdateService.php');
    require_once(__DIR__.'/../presentation/communHtml.php');
    require_once(__DIR__.'/../presentation/adminView.php');

    if( isset($_GET) && !empty($_GET)    &&
        isset($_GET['edit']) && !empty($_GET['edit'])){
            
            UpdateService::update($_GET['edit']);
            $not_seen_updates = UpdateService::searchByNotSeen() ;
    }else{
        $not_seen_updates = UpdateService::searchByNotSeen() ;
    }
    
    
    
    //display gloabl html
    html('Catalogue Panorama - admin');
    
    //display the list of updates not seen yet
    main_block($not_seen_updates);

    //display the scripts
    scripts('countdown');
?>