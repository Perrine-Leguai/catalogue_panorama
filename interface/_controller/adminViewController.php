<?php 
    require_once(__DIR__.'/../_class/Artwork.php');
    require_once(__DIR__.'/../_class/Update.php');

    require_once(__DIR__.'/../_service/UserService.php');
    require_once(__DIR__.'/../_service/UpdateService.php');
    require_once(__DIR__.'/../_service/ArtworkService.php');
    require_once(__DIR__.'/../_service/ChangeKeyNameService.php');

    require_once(__DIR__.'/../presentation/communHtml.php');
    require_once(__DIR__.'/../presentation/adminView.php');

    session_start();
    //redirection if not connected or don't have access
    if (!$_SESSION ) {
        header('location: ../_controller/connectionViewController.php?logout');
    }elseif($_SESSION['profil']!="is_staff"){
        header('location: ../_controller/connectionViewController.php?logout');
    }

    if( isset($_GET) && !empty($_GET)    &&
        isset($_GET['edit']) && !empty($_GET['edit'])){
            if($_GET['type']=="update"){
                UpdateService::update($_GET['edit']);
                $not_seen_updates = UpdateService::searchByNotSeen() ;
                $not_seen_artwork = ArtworkService::searchByNotSeen();
            }elseif($_GET['type']=="artwork"){
                
                ArtworkService::updateSeenStatus($_GET['edit']);
                $not_seen_artwork = ArtworkService::searchByNotSeen();
                $not_seen_updates = UpdateService::searchByNotSeen() ;
            }   
    }else{
        
        $not_seen_updates = UpdateService::searchByNotSeen() ;
        $not_seen_artwork = ArtworkService::searchByNotSeen();
        $array= array_merge($not_seen_artwork, $not_seen_updates);
    }
    
    //load datas to send into the sidebar through html()
    //tab of student obj
    $student_list= UserService::searchAllStudents();
    
    //tab of artwork obj
    $artwork_list= ArtworkService::searchAll();
    
    
    //display gloabl html
    html('Catalogue Panorama - admin', $_SESSION['profil'], $student_list, $artwork_list);
    
    //display the list of updates not seen yet
    main_block($not_seen_updates, $not_seen_artwork);

    //display the scripts
    scripts('countdown');
?>