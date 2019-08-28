<?php

require_once("tool.php");
        //replace "." or ":" of none 
        $remove_sign = array("." , ":");
        $ip_no          = str_pad(trim(str_replace($remove_sign,"",get_client_ip())),12,"0",STR_PAD_LEFT);
        

if(isset($_FILES["fileToUpload"])) {


    $target_dir = "upload/";
    $file_name = basename($_FILES["fileToUpload"]["name"]);
    $fileID = $ip_no . $file_name;
    $target_file = $target_dir . $ip_no . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($file_name,PATHINFO_EXTENSION));


    //Check whether file exists before uploading it
    $myfile = glob("upload/*$fileID");
    
    function for_array_reduce($v1,$v2){
    return $v1 . " " . $v2;
    }

    $myfile = array_reduce($myfile,"for_array_reduce");
    $myfile = trim($myfile);

    //if file exists, rename it with new invoice
    if (!empty($myfile)){
    echo "File " . $myfile . " already exists. Please upload again<br>";
     $uploadOk = 0;
    // rename("$target_dir$file", "$target_file");
    }



    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 2048000) {
        echo "<span class='glyphicon glyphicon-remove'> Your file is too large.<br>";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "<span class='glyphicon glyphicon-remove'> Only JPG, JPEG, PNG & GIF files are allowed.<br>";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "<span class='glyphicon glyphicon-remove'>Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "<span class='glyphicon glyphicon-ok'> The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

            // write_log("server.log", "FileID: " . $fileID . "target_file" . $target_file); 

        } else {
            echo "<span class='glyphicon glyphicon-remove'>Sorry, there was an error uploading your file.";
        }
    }
}



?>