<?php
  /* 0507
    $_SERVER[variables]: they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.
  */
    echo 'DOCUMENT_ROOT is '.$_SERVER['DOCUMENT_ROOT'].'<br>'; // 현재 작업하고 있는 파일이 속해 있는 서버의 루트 폴더 절대 경로
    echo 'HTTP_ACCEPT_LANGUAGE is '.$_SERVER['HTTP_ACCEPT_LANGUAGE'].'<br>';
    echo 'HTTP_HOST is '.$_SERVER['HTTP_HOST'].'<br>'; // 서버 도메인
    echo 'HTTP_USER_AGENT is '.$_SERVER['HTTP_USER_AGENT'].'<br>';
    echo 'SERVER_PORT is '.$_SERVER['SERVER_PORT'].'<br>'; // 서버 포트 번호
    echo 'SCRIPT_NAME is '.$_SERVER['SCRIPT_NAME'].'<br>'; // 페이지 이름
    echo 'REQUEST_URI is '.$_SERVER['REQUEST_URI'].'<br>'; // 페이지 주소
    echo 'PHP_SELF is '.$_SERVER['PHP_SELF'].'<br>';
    echo 'QUERY_STRING is '.$_SERVER['QUERY_STRING'];
?>