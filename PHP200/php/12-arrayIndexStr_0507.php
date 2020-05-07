<?php
    //배열 선언
    $earth = array();

    //earth의 nation 인덱스에 'korea'를 대입
    $earth['nation'] = 'korea';

    //earth 배열의 nation 인덱스를 출력
    echo "earth 배열의 nation 인덱스는 ".$earth['nation'];

    // 0507
    echo "<pre>"; // 문자 원래 형태대로 보기
    echo var_dump($earth); // var_dump(배열): 배열 확인
?>