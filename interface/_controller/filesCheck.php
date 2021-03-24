<?php
    function checkFiles($file, $artist_name){

        $target_dir = "../img.gitignore/";
        $folder_dir= $target_dir.$artist_name."/";
        //create an artist name folder to record medias if doesn't exist yet
        if(!file_exists($folder_dir)){
            mkdir($folder_dir, 0777, true);
        }
        
        $target_file = $folder_dir . basename($file['media']["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

        $uploadOk=1;
        // Check file size
        if ($file["media"]["size"] > 1000000) {
            echo "Sorry, your file is too large.";
            $uploadOk *= 0;
        }
        
        // Check and change file path if file already exists
        if(file_exists($target_file)){
            
            //add a random number
            $random_char    = bin2hex(random_bytes(2));
            $file_name      = pathinfo($target_file,PATHINFO_DIRNAME)."/".pathinfo($target_file,PATHINFO_FILENAME).$random_char.".";
            
            //adding an unique indice
            $replacement = $file_name;

            //remplace the old part by the new one
            $pattern2='/(.*)\./';
            
            $target_file=preg_replace($pattern2, $replacement, $target_file);
            
        }
        

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk *= 0;
        } 

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            $target_file=0;
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["media"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars($target_file). " has been uploaded.";
            } else {
            echo "Sorry, there was an error uploading your file.";
            }
        }

        
        //value stocked into the database
        return $target_file;
}
?>