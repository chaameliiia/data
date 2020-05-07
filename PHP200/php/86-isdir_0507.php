<?php
    $folderName = 'hello';
    $isDir = is_dir($folderName);
    // is_dir(): 해당 폴더 있는 지 확인 후 불린 값 반환

    if($isDir){
        echo "{$folderName} 폴더가 존재합니다.";
    } else {
        echo "{$folderName} 폴더가 존재하지 않습니다.";
    }

    echo "<br>";

    $folderName = 'world';
    $isDir = is_dir($folderName);

    if($isDir){
        echo "{$folderName} 폴더가 존재합니다.";
    } else {
        echo "{$folderName} 폴더가 존재하지 않습니다.";
    }
?>