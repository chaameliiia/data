<!-- 정보값 DB -->
<?
  $id = $_GET['id'];
  $pw = $_GET['pw'];
  $gender = $_GET['gender'];
  $city = $_GET['city'];
  $how = implode('/', $_GET['how']);
  // implode(구분 단위, 배열): 배열값을 문자열로 반환
  $content = $_GET['content'];

  echo $id."<br>";
  echo $pw."<br>";
  echo $gender."<br>";
  echo $city."<br>";
  echo $how."<br>";
  echo nl2br($content);
  // nl2br(): 문자열 줄바꿈 위치에 <br> 삽입

  // foreach($how as $value) {
  //   $h .= $value."/";
  //   echo "<br>".$h;
  // }
?>