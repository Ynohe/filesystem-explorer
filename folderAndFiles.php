<?php

function folderAndFiles($dir)
{
    $content = glob("$dir/*");
    foreach ($content as $fileOrFolder) {
        if (is_dir($fileOrFolder)) {
            echo "
                <img path='$fileOrFolder' class='onclickCreateFolder' onclick='navigate(event)' src='assets/icons/folder.png' width='100px'>
                <p href='$fileOrFolder'>$fileOrFolder <img src='assets/icons/delete.png' path='$fileOrFolder' onclick=deleteFile(event) width='30px'></p>
                <input id='renameFile'path='$fileOrFolder'></input>
            ";
        }

        if (is_file($fileOrFolder)) {
            echo "
                <div class='file' path='$fileOrFolder'>
                    <p>$fileOrFolder</p>
                </div>
                <input id='renameFile' path='$fileOrFolder'></input>
                <button path='$fileOrFolder' onclick=deleteFile(event)>Delete</button>
            ";
        }
    }
}
