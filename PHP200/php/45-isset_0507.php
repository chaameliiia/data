<?php
    if (isset($str)) {
        // 0506
        // isset() : 변수 선언되어 있는 지 확인하고 불린 값 반환
        echo "변수 str이 존재합니다.";
    } else {
        echo "변수 str이 존재하지 않습니다.";
    }

    echo "<br>";

    /* 0506
        // 0, false 포함 어떤 값이든 있으면 true
        // $str = "string"; // true
        // $str = "0"; // true
        // $str = ""; // true
        // $str = "false"; // true

        값 없으면 false
        // $str = null; // false
        $str; // false
    */

    if (isset($str)) {
        echo "변수 str이 존재합니다.";
    } else {
        echo "변수 str이 존재하지 않습니다.";
    }
?>