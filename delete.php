<?php

$deleteFile = $_GET['path'];

rrmdir($deleteFile);

function rrmdir($dir)
{
    if (is_dir($dir)) {
        //  $objects = scandir($dir);
        //  foreach ($objects as $object) {
        //    if ($object != "." && $object != "..") {
        //        if (filetype($dir . "/" . $object) == "dir") rrmdir($dir . "/" . $object);
        //        else unlink($dir . "/" . $object);
        //     }
        //  }
        // reset($objects);
        rmdir($dir);
        echo json_encode(["ok" => true]);
    } else {
        unlink($dir);
        echo json_encode(["ok" => true]);
    }
}
