<!-- 가입된 회원 리스트 -->
<?
  // db 접근
  $root = $_SERVER['DOCUMENT_ROOT'];
  include_once $root."/0_ex/0507/join/db.php";

  // db 데이터 가져오기
  $query = "SELECT * from signup order by num desc";
  // order by num desc: num 내림차 정렬, asc: 오름차순
  // where 조건: 테이블명 뒤에 작성, 조건에 해당하는 결과 값만 선택

  // db 조회
  $result = mysqli_query($dbConnect, $query);
  
  // // $result 값 확인
  // echo "<pre>";
  // var_dump($result); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <a href="request.php">가입하기</a>
  <article>
    <h2>회원 목록</h2>
    <table>
      <thead>
        <th>NUM</th>
        <th>ID</th>
        <th>PW</th>
        <th>GENDER</th>
        <th>CITY</th>
        <th>HOW</th>
        <th>CONTENT</th>
        <th>REMARKS</th>
        <th>EDIT</th>
      </thead>
      <tbody>
        <?
          // db 조회한 결과를 배열 형태로 변수에 저장 → 배열 길이 만큼 실행
          while($row = mysqli_fetch_array($result)) {  
            // echo $row['id']; // $row 값 확인
        ?>
            <tr>
              <!-- <td>a</td>
              <td>a</td>
              <td>a</td>
              <td>a</td>
              <td>a</td>
              <td>a</td>
              <td>a</td> -->

              <!-- 결과 출력 -->
              <td><?=$row['num']?></td>
              <td><?=$row['id']?></td>
              <td><?=$row['pw']?></td>
              <td><?=$row['gender']?></td>
              <td><?=$row['city']?></td>
              <td><?=$row['how']?></td>
              <td><?=$row['content']?></td>
              <!-- <?= 실행문?> == <? echo 실행문?> -->
              <td></td>
              <td>
                <a href="modify.php?num=<?=$row['num']?>">[수정]</a>
                <a href="delete.php?num=<?=$row['num']?>">[삭제]</a>
              </td>
            </tr>
        <!-- while 문 종료 -->
        <? } ?>
      </tbody>
    </table>
  </article>
</body>
</html>