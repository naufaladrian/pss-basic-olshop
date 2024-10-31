<?php
// session_start();
function upload_foto($ft): bool
{
    $target_dir = "img/";
    $target_file = $target_dir . basename($ft["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check file size
    if ($ft["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType = "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // Check if $uploadok is set to 8 by an error
        // if everything is ok, try to upload file }else{
        if (move_uploaded_file($ft["tmp_name"], $target_file)) { //echo "The file ". htmlspecialchars( basename( $_FILES["foto"]["name"])). has been uploaded.";
            return true;
        } else {
            //echo "Sorry, there was an error uploading your file.";
            return false;
        }
    }
    return true;

}

?>