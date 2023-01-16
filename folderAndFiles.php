<?php

function folderAndFiles($dir)
{
    $content = glob("$dir/*");

    foreach ($content as $fileOrFolder) {
        if (is_dir($fileOrFolder)) {
            echo "
                <div class='folder' path='$fileOrFolder' class='onclickCreateFolder' onclick='navigate(event)'>
                    <p href='$fileOrFolder'>$fileOrFolder</p>
                </div>
            ";
        }

        if (is_file($fileOrFolder)) {
            echo "
                <div class='file' path='$fileOrFolder'>
                    <p>$fileOrFolder</p>
                </div>
            ";
        }
    }
}
