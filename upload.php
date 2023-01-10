<?php

    $name=$_FILES["file"]['name'];
    $saved=$_FILES["file"]["tmp_name"];

    if(!file_exists("archives")){
        mkdir("root/archives", 0777, true);
        if(file_exists("archives")){
            if(move_uploaded_file($saved, "archives/" . $name)){
                echo "Saved";
            }
        }
    }