<?php
    $root = $_SERVER['DOCUMENT_ROOT']; // C:/xampp/htdocs/0506_PHP200/php

    include $root."/70-1-include.php";
    /* 0507
      상대 경로 사용하는 경우
        index.php
            // include "asset/inc/include할 파일명"
        asset > inc > include할 파일
        company > sub.php
            // include "../asset/inc/include할 파일명"
        → 파일 위치에 따라 파일 지정 다르게 해야 함
    
      ***루트 폴더 절대경로 include 해놓으면 폴더 경로 지정이 쉬움***
    */
    
    
    // include "./70-1-include2.php"; // 에러 발생해도 화면 출력
    include_once "./70-1-include.php";
    // include_once: 이미 호출된 경우 중복 호출 안 함
?>

<div>
  화면이 깨지지 않습니다.
</div>