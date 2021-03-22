<?php

    require_once(__DIR__.'/../_service/StudentService.php');
    require_once(__DIR__.'/../_service/UpdateService.php');
    require_once(__DIR__.'/../presentation/communHtml.php');
    require_once(__DIR__.'/../presentation/contentView.php');
    
    session_start();
    //redirection if not connected or don't have access
    if (!$_SESSION) {
        header('location: ../connectionViewController.php?logout');
    }

    //redirection if trying to access with an empty url
    if(empty($_GET) || !isset($_GET)){
        header('location: ../adminViewController.php');
    }else{
       //initialize $id_artist to get all inforamtions after
        if(isset($_GET['artist']) && !empty($_GET['artist'])){
            $id_artist=$_GET['artist'];
        }
        elseif(isset($_GET['artwork']) && !empty($_GET['artwork'])){
            $id_artwork=$_GET['artwork'];
            $id_artist= (StudentService::searchByArtwork($id_artwork))['id_student'];
        }

        //request to the bdd the user + student + artwork infos
        try{

            $artist= StudentService::searchBy($id_artist);
            $updates = UpdateService::searchByAwId($artist['id_artwork']);
        }catch(ServiceException $serviceException){
            echo $ServiceException->getCode();
            die("User creation Error");
        } 
    }

    //display the global html
    html($artist['first_name']." ".$artist['last_name'], null, null, null);

    //artist and its artwork form
    displayArtistContent($artist, $updates);
    
    //display the scripts
    scripts('countdown');
?>