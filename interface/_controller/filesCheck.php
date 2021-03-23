<?php
    function checkFiles($file){
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

        $uploadOk=1;
        // Check file size
        if ($file["fileToUpload"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk *= 0;
        }
        
        // Check and change file path if file already exists
        $i=1;
        while(file_exists($target_file)){
            $pattern = '/\.(.*)/';
            preg_replace($pattern, $i.$pattern, $target_file);
        }
        

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk *= 0;
        } 

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
            } else {
            echo "Sorry, there was an error uploading your file.";
            }
        }

        //value stocked into the database
        return $target_file;
}
?>