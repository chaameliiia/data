<!-- 입력된 내용 수정 -->
<?
  // db 접근
  $root = $_SERVER['DOCUMENT_ROOT'];
  include_once $root."/0_ex/0507/join/db.php";

  // index.php에서 선택한 항목 num값 받아서 변수에 저장
  $num = $_GET['num'];

  // db 데이터 가져오기
  $query = "SELECT * from signup where num=$num";
  // where 조건: 테이블명 뒤에 작성, 조건에 해당하는 결과 값만 선택

  // db 조회
  $result = mysqli_query($dbConnect, $query);
  
  // db 조회한 결과를 배열 형태로 변수에 저장 → 배열 길이 만큼 실행
  $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form name="join" action="request_ok.php" method="get">
    <ul>
      <li><input type="text" name="id" value="<?=$row['id']?>"></li>
      <li><input type="password" name="pw" value="<?=$row['pw']?>"></li>
      <li>
        <?
          // index에서 선택한 값과 같으면 checked
          $gender = $row['gender'];
          $gender == 'male' ? $m = 'checked' : $m = '';
          $gender == 'female' ? $f = 'checked' : $f = '';
        ?>
        남<input type="radio" name="gender" value="male" <?=$m?>>
        여<input type="radio" name="gender" value="female" <?=$f?>>
      </li>
      <li>
        <select name="city" id="">
          <?
            $city = ['서울', '인천'];
            foreach($city as $value) {
              // index에서 선택한 값과 같으면 selected
              $value == $row['city'] ? $sel = 'selected' : $sel = '';
          ?>
              <option <?=$sel?>><?=$value?></option>
          <!-- foreach문 종료 -->
          <? } ?>
        </select>
      </li>
      <li> 유입경로 <br>
        검색<input type="checkbox" name="how[]" value="검색">
        지인<input type="checkbox" name="how[]" value="지인">
        광고<input type="checkbox" name="how[]" value="광고">
        <script>
          function entry(v) {
            var how = document.querySelectorAll('input[name="how[]"]');
            for(var i = 0; i < how.length; i++) {
              if (v == how[i].value) {
                how[i].checked = 'checked';
              }
            }
          }
        </script>
        <?
          // index에서 선택한 값 새 배열에 저장
          $how = explode('/', $row['how']); // 검색/지인
          // explode('기준', 배열): 기준점에 따라 문자열 잘라서 배열로 반환
          
          // 배열 길이만큼 실행
          foreach($how as $value) {
            echo "<script>entry('$value');</script>";
          }
        ?>
      </li>
      <li>
        <textarea name="content" id="" cols="30" rows="10"><?=
          $row['content']
        ?></textarea>
      </li>
      <li><input type="submit" value="확인"></li>
    </ul>

    <!-- modify.php 흔적 남기기 -->
    <input type="hidden" name="mode" value="modify">
    <!-- index.php에서 선탁한 항목 전달 -->
    <input type="hidden" name="num" value="<?=$row['num']?>">
  </form>
</body>
</html>