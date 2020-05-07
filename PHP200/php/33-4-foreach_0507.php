<?php
    $memberList[0] = ['name'=>'미우','id'=>'miu'];
    $memberList[1] = ['name'=>'유나','id'=>'yuna'];
    $memberList[2] = ['name'=>'민후','id'=>'minhoo'];
    $memberList[3] = ['name'=>'해윤','id'=>'haeyun'];

    /* 0507
        $memberList = [
          ['미우', 'miu'],
          ['유나', 'yuna'],
          ['민후', 'minhoo'],
          ['해윤', 'haeyun']
        ];

        $memberList[0][0] // 미우
        $memberList[1][0] // 유나
        $memberList[2][0] // 민후
        $memberList[3][0] // 해윤

        foreach($memberList as $idx) { // idx == 0, 1, 2, 3
          foreach($idx as $value) { // value == 미우, 유나, 민후, 해윤
            실행문
          }
        }

        // 위와 같음
        for($i = 0; $i < $memberList.length; i++) {
          for($j = 0; $j < $memberList[$i].length; j++) {
            실행문
          }
        }

    */

    // foreach문 중첩
    foreach($memberList as $index => $value){
        foreach($value as $index2 => $value2 ){
            if($index2 == 'name'){
                echo "{$value2}님의 아이디는 : ";
            }
            if($index2 == 'id'){
                echo "{$value2} 입니다.";
            }
        }
        echo '<br><br>';
    }
?>