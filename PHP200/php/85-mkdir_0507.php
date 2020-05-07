<?php
    $folderName = 'hello';
    // $makeDir = mkdir($folderName,'777');
    $makeDir = @mkdir($folderName,'0777');
    // 폴더 생성 후 다시 실행하면 에러 → @: 에러 방지..?
    
    /* 0507
      mkdir(폴더명, 권한): 폴더 생성 메소드
        // 권한: 네자리, 기본값 → 0777
        // 첫째 자리: 항상 0
        // 둘째 자리: permissions for the owner
        // 셋째 자리: permissions for the owner's user group
        // 넷째 자리: permissions for everybody else

        // 1: 실행 허용
        // 2: 쓰기 허용
        // 4: 읽기 허용
        // 7: 모두 허용

    */

    if ($makeDir) {
        echo "{$folderName} 폴더 생성 완료";
    } else {
        echo "{$folderName} 폴더 생성 실패";
    }
?>