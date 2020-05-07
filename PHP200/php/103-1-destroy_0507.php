<?php
    /* 0507
      로그인 → input = id 작성(세션 생성)
      $_SESSION['id'] = input.value;

      로그아웃 → 세션 삭제
      session_destroy()
    */
    session_start();

    //2개의 세션생성
    $_SESSION['mySession1'] = 'everdevel';
    $_SESSION['mySession2'] = 'beanscent';
    $_SESSION['mySession3'] = 'tomodevel';

    //생성된 세션 확인
    echo "<pre>";
    var_dump($_SESSION);
    echo '</pre>';

    //세션 파괴
    if(session_destroy()){ // 세션 파일 모두 삭제
        echo "세션 삭제 완료";
    } else {
        echo "세션 삭제 실패";
    }
?>