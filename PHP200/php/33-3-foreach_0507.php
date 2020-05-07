<?php
    $memberList = ['name' => '미우','id' => 'miu'];

    /* 0507
        $memberList['name'] // 미우
    */

    foreach($memberList as $index => $value){
        /* 0507
            foreach(배열 as 매개변수(인덱스 값 == 'name') => 매개변수(밸류 값 == '미우')) {실행문}
            매개변수 하나만 쓰면 매개변수 == 밸류 값
        */
        echo "인덱스 {$index}의 값 : {$value}";
        echo '<br>';
    }
?>