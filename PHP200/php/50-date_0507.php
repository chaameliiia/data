<?php
    echo "현재 시간은 ".date("Y년 m월 d일 H시 i분 s초", time());
    // echo "현재 시간은 ".date("Y년 m월 d일 H시 i분 s초");
    // date() : 표준시

    echo "<br>";
    echo time(); // 1970년 1월 1일 0시 0분 0초 기준 현재 시점까지 시간 초로 변환
?>