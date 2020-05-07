<!-- 회원가입 폼 -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form name="join" action="request_ok.php" method="get">
  <!--
    method → get or post(enctype="multipart/form-data")
  -->
    <ul>
      <li><input type="text" name="id" placeholder="ID"></li>
      <li><input type="password" name="pw" placeholder="PW"></li>
      <li>
        남<input type="radio" name="gender" value="male">
        여<input type="radio" name="gender" value="female">
        <!-- 같은 name 값 → 보기 중 한 값만 넘김 -->
      </li>
      <li>
        <select name="city" id="">
          <option>서울</option>
          <option>인천</option>
        </select>
      </li>
      <li> 유입경로 <br>
        검색<input type="checkbox" name="how[]" value="검색">
        지인<input type="checkbox" name="how[]" value="지인">
        광고<input type="checkbox" name="how[]" value="광고">
        <!-- name="값[]" 두 개 이상 중복 값 배열 형태로 넘길 수 있음-->
      </li>
      <li>
        <textarea name="content" id="" cols="30" rows="10"></textarea>
      </li>
      <li><input type="submit" value="가입하기"></li>
    </ul>
  </form>
  
</body>
</html>